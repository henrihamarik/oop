<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 23.01.2018
 * Time: 11:05
 */
$menuTmpl = new templates('menu.menu');
$menuItemTmpl = new templates('menu.menu_item');
$menuItemTmpl->set('menu_item_name','esimene');
echo '<pre>';
print_r($menuItemTmpl);
echo '</pre>';
echo $menuItemTmpl->parse();