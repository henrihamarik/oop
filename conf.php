<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 19.01.2018
 * Time: 09:45
 */

define('MODEL_DIR','model/');
define('VIEW_DIR','views/');
define('CONTROL_DIR','controllers/');

require_once  MODEL_DIR.'template.php';
require_once MODEL_DIR.'http.php';

$http = new http();