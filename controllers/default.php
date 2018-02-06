<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 31.01.2018
 * Time: 09:52
 */
$page_id = (int)$http->get('page_id');//lehe id
//..
$sql = 'SELECT * FROM content '.
    'WHERE content_id='.fixDb($page_id);
//..
$result = $db->getData($sql);
if($result == false){
    $sql = 'SELECT * FROM content WHERE '.
        'is_first_page='.fixDb(1);
    $result = $db->getData($sql);
}
if ($result !=false){
    $page = $result[0];
    $http->set('page_id', $page['content_id']);
    $mainTmpl->set('content', $page['content']);
}
