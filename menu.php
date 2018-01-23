<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 23.01.2018
 * Time: 11:05
 */
$menuTmpl = new template('menu.menu');
$menuItemTmpl = new template('menu.menu_item');
$menuItemTmpl->set('menu_item_name','esimene');
echo '<pre>';
print_r($menuItemTmpl);
echo '</pre>';
$menuTmpl = $menuItemTmpl->parse();
$menuTmpl->set('menu_items',$menuTmpl);
echo '<pre>';
print_r($menuTmpl);
echo '</pre>';