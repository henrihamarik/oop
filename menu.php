<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 23.01.2018
 * Time: 11:05
 */
// loome menüü peamalli objekti template klassist
$menuTmpl = new template('menu.menu');
// loome menüü elemendi malli objekti
$menuItemTmpl = new template('menu.menu_item');
// ###############################################
// tegutseme ühe menüü elemendiga
// esimene
$menuItemTmpl->set('menu_item_name', 'avaleht');
// loome lingi
$link = $http->getLink();
$menuItemTmpl->set('link', $link);
// täidame loodud elemendiga lehe menüü
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
// ###############################################
// ###############################################
// tegutseme ühe menüü elemendiga
// esimene
$menuItemTmpl->set('menu_item_name', 'esimene');
// loome lingi
$link = $http->getLink(array('control' => 'esimene'));
$menuItemTmpl->set('link', $link);
// täidame loodud elemendiga lehe menüü
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
// ###############################################
// tegutseme ühe menüü elemendiga
// teine
$menuItemTmpl->set('menu_item_name', 'teine');
// loome lingi
$link = $http->getLink(array('control' => 'teine'));
$menuItemTmpl->set('link', $link);
// täidame loodud elemendiga lehe menüü
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
// koostame valmis menüü vaade
$menu = $menuTmpl->parse();
// ja lisame antud vaade peamalli elemendile
// nimega {menu}
$mainTmpl->set('menu', $menu);