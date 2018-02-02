<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 02.02.2018
 * Time: 10:53
 */

class mysql
{
    // klassi väljad
    var $conn = false; // ühendus db serveriga
    var $host = false; // db serveri nimi/ip
    var $user = false; // db kasutajanimi
    var $pass = false; // db kasutaja parool
    var $dbname = false; // db nimi
    /**
     * mysql constructor.
     * @param bool $host
     * @param bool $user
     * @param bool $pass
     * @param bool $dbname
     */
    public function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connect(); // ühenduse loomine
    }
    // funktsioon ühenduse tekitamiseks andmebaasiserveriga
    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if($this->conn == false){
            echo 'Probleem andmebaasi ühendamisega<br />';
            exit;
        }
    }

    //
    function query($sql){
        $result = mysqli_query($this->conn, $sql);
        if ($result == false){
            echo 'Probleem Päringuga<br />';
            echo '<b>'.$sql.'</b>';
            return false;
        }
        return $result;
    }
}