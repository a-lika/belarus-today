<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $page = file_get_contents(PATH_TEMPLATE . 'about_belarus.tpl');
    $marker = array('{FOOTER}','{MENU}', '{LOGO}', '{ABOUT_BELARUS}','{MENU_RAZDEL}', '{POPULAR_TRIP}');
    $marker_info =array(Footer(), Menu(1), Logo(), About_Belarus(), About_Belarus_Menu(),Popular_trip());
    $page = str_replace($marker, $marker_info, About_Belarus_Razdel());

    echo $page;
?>