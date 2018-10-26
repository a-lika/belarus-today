<?php
include('config.php');
include('connect.php');
include('function.php');


$type_card = file_get_contents(PATH_TEMPLATE . 'razdel_travel.tpl');
$shablon = file_get_contents(PATH_TEMPLATE . 'guide_type.tpl');

$marker = array('{MENU}', '{LOGO}' , '{FOOTER}' , '{POPULAR_TRIP}', '{TYPE_CARD}');
$marker_info = array(Menu(2), Logo(), Footer(), Popular_trip(), $type_card);

$page = str_replace($marker, $marker_info, $shablon);

    echo $page;


?>