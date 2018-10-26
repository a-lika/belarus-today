<?php
session_start();
include('config.php');
include('connect.php');
include('admin_function.php');

$shablon = file_get_contents(PATH_TEMPLATE. 'admin_form.tpl');
$shablon = str_replace('{LINK_SITE}', LINK_SITE, $shablon);

$Login = isset($_POST['Login']) ? $_POST['Login'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
$Submit = isset($_POST['Submit']) ? $_POST['Submit'] : '';

if ((strlen($Submit) != 0) || (strlen($Submit)) != 0) {

	if (($_POST['Login'] == 'admin') && ($_POST['Password'] == 'admin')) {
		$page = header('Location:admin_hello.php');
		$_SESSION['access'] = 1;
	}
	else {
		$page = $shablon;
	}
}
else {
	$page = $shablon;
}

echo $page;


?>