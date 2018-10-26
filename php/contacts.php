<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $page = file_get_contents(PATH_TEMPLATE . 'contacts.tpl');

	$marker = array('{MENU}', '{LOGO}', '{FOOTER}');
	$marker_info = array(Menu(0), Logo(), Footer());

    $page = str_replace($marker, $marker_info, $page);

    echo $page;
?>