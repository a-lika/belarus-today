<?php
include('config.php');
include('connect.php');
include('function.php');

$shablon = file_get_contents(PATH_TEMPLATE . 'guide_object.tpl');
$marker = array('{MENU}', '{LOGO}' , '{FOOTER}');
$marker_info = array(Menu(2), Logo(), Footer());

$page = str_replace($marker, $marker_info, $shablon);

    echo $page;


?>