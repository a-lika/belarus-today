<?php
include('config.php');
include('connect.php');
include('function.php');

$shablon = file_get_contents(PATH_TEMPLATE . 'guide_city.tpl');
$marker = array('{MENU}', '{LOGO}' , '{FOOTER}' , '{POPULAR_TRIP}');
$marker_info = array(Menu(2), Logo(), Footer(), Popular_trip());

$page = str_replace($marker, $marker_info, $shablon);

    echo $page;

?>