<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 31.01.2018
 * Time: 09:37
 */
$control = $http->get('control');
$file = CONTROL_DIR.$control.'.php';
if (file_exists($file)and is_file($file)and is_readable($file)){
    require_once $file;
} else {
    $file = CONTROL_DIR.DEFAULT_CONTROL.'.php';
    require_once $file;
}