<?php
session_start();
include('config.php');
include('connect.php');
include('admin_function.php');

$shablon = file_get_contents(PATH_TEMPLATE . 'admin_hello.tpl');
$shablon = str_replace('{LINK_SITE}', LINK_SITE, $shablon);

$marker = array('{MENU}', '{LOGO}');
$marker_info = array(Menu(), Logo());

$page = str_replace($marker, $marker_info, $shablon);

    echo $page;


?>