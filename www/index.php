<?php
include('config.php');
include('connect.php');
include('function.php');


$razdel_travel = file_get_contents(PATH_TEMPLATE . 'razdel_travel.tpl');

$marker = array('{RAZDEL_TRAVEL}','{FOOTER}','{MENU}', '{LOGO}', '{POPULAR_TRIP}');
$marker_info = array($razdel_travel, Footer(), Menu(0), Logo(), Popular_trip());

    $page = file_get_contents(PATH_TEMPLATE . 'index.tpl');
    $page = str_replace($marker, $marker_info, $page);

    echo $page;


?>