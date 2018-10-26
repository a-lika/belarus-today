<?php
    session_start();
    include('config.php');
    include('connect.php');
    include('admin_function.php');

    $title = 'Достопримечательность - связать';

    $shablon = file_get_contents(PATH_TEMPLATE . 'attr_bunding.tpl');
    $markers= array('{ATTRACTION_NEAR}', '{TYPE}', '{REGION}');
    $markers_info = array(Attr_Near(), Attr_Type(), Region());
    $shablon = str_replace($markers, $markers_info, $shablon);

	$page = file_get_contents(PATH_TEMPLATE . 'index.tpl');
    $marker = array('{LOGO}', '{MENU}','{TITLE}','{INFO}');
    $marker_info = array(Logo(), Menu(), $title, $shablon);

    $page = str_replace($marker, $marker_info, $page);

    echo $page;

?>