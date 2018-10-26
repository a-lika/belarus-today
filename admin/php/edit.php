<?php

session_start();
include('config.php');
include('connect.php');
include('admin_function.php');

$title = 'Достопримечательность - редактировать';

$page = file_get_contents(PATH_TEMPLATE . 'index.tpl');
$marker = array('{LOGO}', '{MENU}','{TITLE}','{INFO}');
$marker_info = array(Logo(), Menu(), $title, Attr_Update());

$page = str_replace($marker, $marker_info, $page);

echo $page;

?>