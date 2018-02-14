<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 12.02.2018
 * Time: 09:52
 */
$username = $http->get('username');
$password = $http->get('password');
// koostame päring kasutaja kontrollimiseks
$sql = 'SELECT * FROM user '.
    'WHERE username='.fixDb($username).
    ' AND password='.fixDb(md5($password));
$result = $db->getData($sql);
if ($result !=false){

    echo 'Oled sisse logitud<br/>';
} else{
    $link = $http->getLink(array('control'=>'login'));
    $http->redirect($link);
}