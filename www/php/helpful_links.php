<?php
include('config.php');
include('connect.php');
include('function.php');


$page = file_get_contents(PATH_TEMPLATE . 'helpful_links.tpl');
$marker = array('{MENU}', '{LOGO}', '{FOOTER}', '{POPULAR_TRIP}');
$marker_info =array(Menu(5), Logo(), Footer(), Popular_trip());

$page = str_replace($marker, $marker_info, Links());

echo $page;


?>