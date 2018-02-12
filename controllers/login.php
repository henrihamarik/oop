<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 12.02.2018
 * Time: 08:55
 */
$loginForm = new template('login');
$loginForm->set('kasutaja', 'Kasutajanimi');
$loginForm->set('parool', 'Kasutaja parool');
$loginForm->set('nupp', 'Logi sisse!');

$link = $http->getLink(array('control'=>'login_do'));
$loginForm->set('link', $link);

$mainTmpl->set('content', $loginForm->parse());