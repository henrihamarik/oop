<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 19.01.2018
 * Time: 11:10
 */
require_once 'conf.php';

$testTabel = new template(file:'test');
echo '<pre>';
print_r($testTabel)
echo '</pre>';