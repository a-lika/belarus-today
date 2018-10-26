<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $marker = array('{MENU}', '{LOGO}' , '{FOOTER}' , '{POPULAR_TRIP}', '{ATTR_CARD}');
    $marker_info = array(Menu(2), Logo(), Footer(), Popular_trip(), Attr());
    $page = str_replace($marker, $marker_info, Attr_Type());

    echo $page;
?>