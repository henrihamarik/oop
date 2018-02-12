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
define('LIB_DIR', 'lib/');

define('DEFAULT_CONTROL','default');

require_once LIB_DIR.'utils.php';

define('ROLE_NONE', 0);
define('ROLE_USER', 1);
define('ROLE_ADMIN', 2);

require_once  MODEL_DIR.'template.php';
require_once MODEL_DIR.'http.php';
require_once MODEL_DIR.'linkobject.php';
require_once MODEL_DIR.'mysql.php';

require_once 'db_conf.php';

$http = new linkobject();

$db = new mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME);