<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $marker = array('{MENU}', '{LOGO}' , '{FOOTER}' , '{POPULAR_TRIP}', '{SIMILAR_ARTICLE}');
    $marker_info = array(Menu(6), Logo(), Footer(), Popular_trip(), Similar_Article());
    $page = str_replace($marker, $marker_info, Article());

    echo $page;
?>