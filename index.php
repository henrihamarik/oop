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
$mainTmpl = new templates('main');
// lisame objekti testvaade
$mainTmpl->set('lang','et');
$mainTmpl->set('page_title','Lehe pealkiri');
$mainTmpl->set('user','Kasutaja');
$mainTmpl->set('title','Pealkiri');
$mainTmpl->set('lang_bar','Keeleriba');
$mainTmpl->set('menu','Lehe menüü');
$mainTmpl->set('content','Lehe sisu');

echo '<pre>';
print_r($mainTmpl);
echo '</pre>';
echo $mainTmpl->parse();