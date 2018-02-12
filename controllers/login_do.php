<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 12.02.2018
 * Time: 09:52
 */
$username = $http->get('username');
$password = $http->get('password');

echo $username.'<br/>';
echo $password.'<br/>';

$sql = 'SELECT * FROM user'.
    'WHERE username ='.fixDb($username).
    ' AND password='.fixDb(md5($password));
echo $sql. '<br/>';