<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Редактирование</title>
<meta http-equiv="Refresh" content="2; URL=http://beltravel.by/admin/attr_redact.php"> 
</head>
<body>

<?php
include('config.php');
include('connect.php');
include('admin_function.php');

	$ID = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
   	$type = isset($_POST['type']) ? $_POST['type'] : '';
	$region = isset($_POST['region']) ? $_POST['region'] : '';
	$image_small = isset($_FILES['image_small']) ? $_FILES['image_small'] : '';
	$image = isset($_FILES['image']) ? $_FILES['image'] : $_FILES['image_small'];

	$link =  isset($_POST['link']) ? $_POST['link'] : '';
	$text =  isset($_POST['txt']) ? $_POST['txt'] : '';
	$text_short =  isset($_POST['text_short']) ? $_POST['text_short'] : '';
	$rating =  isset($_POST['rating']) ? $_POST['rating'] : $_POST['2'];
	$marker_lat =  isset($_POST['marker_lat']) ? $_POST['marker_lat'] : '0';
	$marker_lng =  isset($_POST['marker_lng']) ? $_POST['marker_lng'] : '0';
	$map_lat =  isset($_POST['map_lat']) ? $_POST['map_lat'] : 53.7976;
	$map_lng =  isset($_POST['map_lng']) ? $_POST['map_lng'] : 27.9089;
	$map_zoom =  isset($_POST['map_zoom']) ? $_POST['map_zoom'] : '5';
	$panorama_name = isset($_POST['panorama_name']) ? $_POST['panorama_name'] : '';
	$panorama_link = isset($_POST['panorama_link']) ? $_POST['panorama_link'] : '';
	$panorama_coords = isset($_POST['panorama_coords']) ? $_POST['panorama_coords'] : '';
	$keywords =  isset($_POST['keywords']) ? $_POST['keywords'] : '';
	$description = isset($_POST['description']) ? $_POST['description'] : '';
	$title = isset($_POST['title']) ? $_POST['title'] : $name;
	
	$photo_number = isset($_POST['photo_number']) ? $_POST['photo_number'] : '';
	$photo = isset($_FILES['photo']) ? $_FILES['photo'] : '';


$SQL = "UPDATE `belarusbase`.`attraction` SET 
`type_id` = '$type',
`region_id` = '$region',
`attr_name` = '$name',
`attr_img` = '$image',
`attr_img_small` = '$image_small',
`attr_link` = '$link',
`attr_rating` = '$rating',
`attr_text` = '$text',
`attr_description` = '$text_short',
`attr_coord_lat` = '$marker_lat ',
`attr_coord_lng` = '$marker_lng',
`attr_coord_center_lat` = '$map_lat',
`attr_coord_center_lng` = '$map_lng',
`zoom` = '$map_zoom',
`panorama_name` = '$panorama_name',
`panorama_link` = '$panorama_link',
`panorama_coords` = '$panorama_coords',
`keywords` = '$keywords',
`description` = '$description',
`title` = '$title' 
WHERE `attraction`.`attr_id` ='$ID'";
    mysql_query($SQL);
	echo "<center><h1>Изменения сохранены.</h1>"
?>

</body>
</html>