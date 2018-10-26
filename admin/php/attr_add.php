<?php
    session_start();
    include('config.php');
    include('connect.php');
    include('admin_function.php');
    Attr_Add();

    $title = 'Достопримечательность - добавить';

    $shablon = file_get_contents(PATH_TEMPLATE . 'attr_add.tpl');
    $markers= array('{ATTRACTION_NEAR}', '{REGION}', '{TYPE}');
    $markers_info = array(Attr_Near(), Region(), Attr_Type());
    $shablon = str_replace($markers, $markers_info, $shablon);

	$page = file_get_contents(PATH_TEMPLATE . 'index.tpl');
    $marker = array('{LOGO}', '{MENU}','{TITLE}','{INFO}');
    $marker_info = array(Logo(), Menu(), $title, $shablon);

    $page = str_replace($marker, $marker_info, $page);

    echo $page;

?>