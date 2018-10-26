<?php
include('config.php');
include('connect.php');
include('function.php');


$marker = array('{MENU}', '{LOGO}', '{FOOTER}' , '{MARKER}', '{MARKER_FINISH}', '{OTHER_ROUT}');
$marker_info = array(Menu(4), Logo(), Footer(), Marker(), Marker_Finish(), Other_trip());

$page = str_replace($marker, $marker_info, Rout());

    echo $page;

?>