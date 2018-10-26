<?php
include('config.php');
include('connect.php');
include('function.php');


$page = file_get_contents(PATH_TEMPLATE . 'helpful_info.tpl');
$marker = array('{MENU}', '{LOGO}', '{FOOTER}','{HELPFUL_MENU}');
$marker_info =array(Menu(5), Logo(), Footer(), Helpful_Menu());


$page = str_replace($marker, $marker_info, Helpful());



echo $page;


?>