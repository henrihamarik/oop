<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 19.01.2018
 * Time: 11:10
 */
// loeme sisse projekti konfiguratsiooni
require_once 'conf.php';
// loome peamalli objekti template klassist
$mainTmpl = new template('main');
// määrame reaalväärtused malli elementidele
$mainTmpl->set('lang', 'et');
$mainTmpl->set('page_title', 'Lehe pealkiri');
$mainTmpl->set('user', 'Kasutaja');
$mainTmpl->set('title', 'Pealkiri');
$mainTmpl->set('lang_bar', 'Keeleriba');
// katsetame menüü loomist
require_once 'menu.php';
$mainTmpl->set('content', 'Lehe sisu');
echo $mainTmpl->parse();
echo HTTP_HOST.SCRIPT_NAME;