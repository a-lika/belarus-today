<?php
    include('config.php');
    include('connect.php');
    include('function.php');


    $page = file_get_contents(PATH_TEMPLATE . 'active_rest.tpl');
    $marker = array('{FOOTER}','{MENU}', '{LOGO}', '{ACTIVE_REST}' ,'{MENU_RAZDEL}', '{POPULAR_TRIP}');
    $marker_info =array(Footer(), Menu(3), Logo(), Active_Rest(), Active_Rest_Menu(),Popular_trip());
    $page = str_replace($marker, $marker_info, Active_Rest_Razdel());

    echo $page;

?>