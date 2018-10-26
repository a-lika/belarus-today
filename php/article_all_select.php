<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $marker = array('{MENU}', '{LOGO}' , '{FOOTER}', '{ARTICLE_CARD}');
    $marker_info = array(Menu(6), Logo(), Footer(), Articles_Select());
    $page = str_replace($marker, $marker_info, Articles_Category());

    echo $page;
?>