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


}
