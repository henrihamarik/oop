<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 14.02.2018
 * Time: 14:53
 */

class session
{
    var $sid = false;
    var $vars = array();
    var $http = false;
    var $db = false;
    var $timeout = 1800;
    var $anonymous = true;

    public function __construct(&$http, &$db)
    {
        $this->http = &$http;
        $this->db = &$db;
        $this->sid = $http->get('sid');
        $this->checkSession();
    }

    function sessionCreate($user = false) {
        if ($user == false) {
            $user = array(
                'user_id' => 0,
                'role_id' => 0,
                'username' => 'Anonüümne'
            );
            $sid = md5(uniqid(time().mt_rand(1,1000),true));
            $sql = 'INSERT INTO session SET '.
                'sid='.fixDb($sid).', '.
                'user_id='.fixDb($user['user_id']).', '.
                'user_data='.fixDb(serialize($user)).', '.
                'login_ip='.fixDb(REMOTE_ADDR).', '.
                'created=NOW()';
            $this->db->query($sql);
            $this->sid = $sid;
            $this->http->set('sid', $sid);
        }
    }
    function clearSessions(){
        $sql = 'DELETE FROM session WHERE '.
            time().' - UNIX_TIMESTAMP(changed) > '.
            $this->timeout;
        $this->db->query($sql);
    }


    function  checkSession(){
        $this->clearSessions();
        if ($this->sid === false and $this->anonymous){
            $this->sessionCreate();
        }
        if ($this->sid !== false){
            $sql = 'SELECT * FROM session WHERE '.
                'sid='.fixDb($this->sid);
            $result = $this->db->getData($sql);
            if ($result == false){
                if ($this->anonymous){
                    $this->sessionCreate();
                    define('USER_ID', 0);
                    define('ROLE_ID', 0);
                } else {
                    $this->sid = false;
                }
            } else {
                $vars = unserialize($result[0]['svars']);
                if (!is_array($vars)){
                    $vars = array();
                }
                $this->vars = $vars;
                $user_data = unserialize($result[0]['user_data']);
                define('USER_ID', $user_data['user_id']);
                define('ROLE_ID', $user_data['role_id']);
                $this->user_data = $user_data;
            }
        } else {
            define('USER_ID', 0);
            define('ROLE_ID', 0);
        }
    }
}
