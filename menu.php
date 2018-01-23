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
// tegutseme ühe menüü elemendiga
$menuItemTmpl->set('menu_item_name', 'esimene');
echo '<pre>';
print_r($menuItemTmpl);
echo '</pre>';
// täidame loodud elemendiga lehe menüü
$menuItem = $menuItemTmpl->parse();
$menuTmpl->set('menu_items', $menuItem);
echo '<pre>';
print_r($menuTmpl);
echo '</pre>';
// koostame valmis menüü vaade
$menu = $menuTmpl->parse();
// ja lisame antud vaade peamalli elemendile
// nimega {menu}
$mainTmpl->set('menu', $menu);