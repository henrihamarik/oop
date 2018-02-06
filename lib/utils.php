<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 23.01.2018
 * Time: 13:13
 */

function fixUrl($str){
    return urlencode($str);
}

function fixDb($value) {
    return '"'.addslashes($value).'"';
}