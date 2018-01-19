<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 19.01.2018
 * Time: 11:10
 */
// loeme sisse projekti konfiguratsiooni
require_once 'conf.php';
// loome test objekti template klassist
$testTabel = new templates('test');
// lisame objekti testvaade
echo '<pre>';
print_r($testTabel);
echo '</pre>';