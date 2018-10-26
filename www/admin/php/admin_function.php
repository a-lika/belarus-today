<?php
include('config.php');
include('connect.php');

function Logo() {
    $shablon = file_get_contents(PATH_TEMPLATE. 'logo.tpl');
    $shablon = str_replace('{LINK_SITE}', LINK_SITE, $shablon);

    return $shablon;
}

function Menu() {
    $shablon = file_get_contents(PATH_TEMPLATE.'menu.tpl');
    return $shablon;
}

function Attr_Type() {
    $str = '';
    $marker = array('{TYPE}', '{VALUE}');
    $shablon = file_get_contents(PATH_TEMPLATE. 'type_select.tpl');

    $SQL = "SELECT `type_name`, `type_id`
    FROM`type`
    WHERE`type_id`
    ORDER BY`type_id` ASC";

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str.= str_replace($marker, $inf, $shablon);
    }
    return $str;
}

function Region() {
    $str = '';

    $marker = array('{REGION}', '{VALUE}');

    $shablon = file_get_contents(PATH_TEMPLATE. 'region_select.tpl');

    $SQL = "SELECT `region_name`, `region_id`
    FROM`region`
    WHERE`region_id`
    ORDER BY`region_id` ASC";

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);

        $str.= str_replace($marker, $inf, $shablon);

    }

    return $str;
}

function Attr_Near() {
    $str = '';
    $ID = isset($_GET['id']) ? $_GET['id'] : 0;
    $ID = (int)$ID;

    $marker = array('{ATTR_NAME}', '{ATTR_IMG}', '{VALUE}');
    $shablon = file_get_contents(PATH_TEMPLATE. 'attr_near.tpl');

    $SQL = "SELECT `attr_name`, `attr_img_small`, `attr_id`
    FROM`attraction`, `type`
    WHERE`type`.`type_id` = `attraction`.`type_id`
    ORDER BY`attr_name` ASC";

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str.= str_replace($marker, $inf, $shablon);
    }
    return $str;
}

function Attr_For_Redact() {
    $str = '';
    $ID = isset($_GET['id']) ? $_GET['id'] : 0;
    $ID = (int)$ID;

    $marker = array('{NAME}', '{IMAGE}', '{ID}');
    $shablon = file_get_contents(PATH_TEMPLATE. 'attraction_card.tpl');
    $SQL = "SELECT `attr_name`, `attr_img_small`, `attr_id`
    FROM`attraction`
    WHERE`attr_id`
    ORDER BY`attr_name` ASC";

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str.= str_replace($marker, $inf, $shablon);

    }
    return $str;
}

function MyString($temp) {
    $Str = trim($temp);
    $Str = stripslashes($Str);
    $Str = htmlspecialchars($Str, ENT_QUOTES);
    $Str = nl2br($Str);
    return $Str;
}

function Attr_Add() {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $region = isset($_POST['region']) ? $_POST['region'] : '';
    $image_small = isset($_FILES['image_small']) ? $_FILES['image_small'] : '';
    $image = isset($_FILES['image']) ? $_FILES['image'] : $_FILES['image_small'];

    $link = isset($_POST['link']) ? $_POST['link'] : '';
    $text = isset($_POST['txt']) ? $_POST['txt'] : '';
    $text_short = isset($_POST['text_short']) ? $_POST['text_short'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : $_POST['2'];
    $marker_lat = isset($_POST['marker_lat']) ? $_POST['marker_lat'] : '0';
    $marker_lng = isset($_POST['marker_lng']) ? $_POST['marker_lng'] : '0';
    $map_lat = isset($_POST['map_lat']) ? $_POST['map_lat'] : 53.7976;
    $map_lng = isset($_POST['map_lng']) ? $_POST['map_lng'] : 27.9089;
    $map_zoom = isset($_POST['map_zoom']) ? $_POST['map_zoom'] : '5';
    $panorama_name = isset($_POST['panorama_name']) ? $_POST['panorama_name'] : '';
    $panorama_link = isset($_POST['panorama_link']) ? $_POST['panorama_link'] : '';
    $panorama_coords = isset($_POST['panorama_coords']) ? $_POST['panorama_coords'] : '';
    $keywords = isset($_POST['keywords']) ? $_POST['keywords'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : $name;

    $photo_number = isset($_POST['photo_number']) ? $_POST['photo_number'] : '';
    $photo = isset($_FILES['photo']) ? $_FILES['photo'] : '';

    $name = MyString($name);
    $type = MyString($type);
    $region = MyString($region);
    $link = MyString($link);
    $rating = MyString($rating);
    $marker_lat = (float)($marker_lat);
    $marker_lng = (float)($marker_lng);
    $map_lat = (float)$map_lat;
    $map_lng = (float)$map_lng;
    $map_zoom = MyString($map_zoom);
    $panorama_name = MyString($panorama_name);
    $panorama_coords = MyString($panorama_coords);
    $keywords = MyString($keywords);
    $description = MyString($description);
    $title = MyString($title);
    $photo_number = MyString($photo_number);

    if ($image[error] != UPLOAD_ERR_OK) $image = '';
    else {
        $fullname = tempnam(PATH_IMAGE, "img").".jpg";
        $basename = basename($fullname);
        move_uploaded_file($image[tmp_name], $fullname);
    }

    if ($image_small[error] != UPLOAD_ERR_OK) $image_small = '';
    else {
        $fullname = tempnam(PATH_IMAGE, "img").".jpg";
        $basename_small = basename($fullname);
        move_uploaded_file($image_small[tmp_name], $fullname);
    }

    if ($photo[error] != UPLOAD_ERR_OK) $photo = '';
    else {
        $fullname = tempnam(PATH_IMAGE, "img").".jpg";
        $basename_attr = basename($fullname);
        move_uploaded_file($photo[tmp_name], $fullname);
    }

    if ((mb_strlen($name) > 0) && (mb_strlen($name) < 255)) {
        $SQL = "INSERT INTO `belarusbase`.`attraction` (`attr_id`, `type_id`, `region_id`, `attr_name`, `attr_img`, `attr_img_small`, `attr_link`, `attr_rating`, `attr_text`, `attr_description`, `attr_coord_lat`, `attr_coord_lng`, `attr_coord_center_lat`, `attr_coord_center_lng`, `zoom`, `panorama_name`, `panorama_link`, `panorama_coords`, `keywords`, `description`, `title`, `visible`) VALUES (NULL, '$type', '$region', '$name', '$basename', '$basename_small',  '$link', '$rating', '$text ', '$text_short', '$marker_lat', '$marker_lng ', '$map_lat', '$map_lng', '$map_zoom', '$panorama_name', '$panorama_link', '$panorama_coords', '$keywords', '$description', '$title', '1')";
        mysql_query($SQL);
        $attr_id = mysql_insert_id();
        $SQL_photo = "INSERT INTO `belarusbase`.`attr_photo` (`attr_photo_id`,`attr_id`, `photo_id`, `photo`) VALUES (NULL, '$attr_id', '$photo_number', '$basename_attr')";
        mysql_query($SQL_photo);
    }
}

function Attr_Delete() {
    $image = isset($_FILES['image']) ? $_FILES['image'] : '';

    if (isset($_POST['submit'])) {
        $check = $_POST['attr_near'];

        if (empty($check)) {
            echo("<p>Вы не выбрали ни одного объекта</p>\n");
        }
        else {
            $N = count($check);

            for ($i = 0; $i < $N; $i++) {

                $sql = "SELECT `attr_img` 
                FROM`attraction`
                WHERE`attraction`.`attr_id` = $check[$i]";
                $sql_del = mysql_query($sql);
                $file = mysql_fetch_assoc($sql_del);
                $way = PATH_IMAGE.$file['attr_img'];
                if ($way != PATH_IMAGE) {
                    unlink($way);
                }
                $SQL = "DELETE FROM `belarusbase`.`attraction` 
                WHERE`attraction`.`attr_id` = $check[$i]";
                mysql_query($SQL);
            }
        }
    }

}


function Attr_Update() {
    $str = '';
    $ID = isset($_GET['id']) ? $_GET['id'] : 0;
    $ID = (int)$ID;

    $marker = array('{ID}', '{TYPE}', '{REGION}', '{NAME}', '{IMAGE}', '{IMG_SMALL}', '{LINK}', '{RAITING}', '{FULL_INFO}', '{SHORT_INFO}', '{MARKER_LAT}', '{MARKER_LNG}', '{MAP_LAT}', '{MAP_LNG}', '{ZOOM}', '{PANORAMA_NAME}', '{PANORAMA_LINK}', '{PANORAMA_COORD}', '{KEYWORDS}', '{DESCRIPTION}', '{TITLE}', '{VISIBLE}');

    $shablon = file_get_contents(PATH_TEMPLATE. 'edit.tpl');
    $markers = array('{REGION}', '{TYPE}');
    $markers_info = array(Region(), Attr_Type());
    $shablon = str_replace($markers, $markers_info, $shablon);

    $SQL = "SELECT `attr_id`, `type_id`, `region_id`, `attr_name`, `attr_img`, `attr_img_small`, `attr_link`, `attr_rating`, `attr_text`, `attr_description`, `attr_coord_lat`, `attr_coord_lng`, `attr_coord_center_lat`, `attr_coord_center_lng`, `zoom`, `panorama_name`, `panorama_link`, `panorama_coords`, `keywords`, `description`, `title`, `visible`
    FROM`attraction`
    WHERE`attr_id` = $ID";

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str.= str_replace($marker, $inf, $shablon);
    }

    return $str;
}


function Attr_Bund() {
    $str = '';
    $ID = isset($_GET['id']) ? $_GET['id'] : 0;
    $ID = (int)$ID;

    $marker = array('{ID}', '{NAME}', '{IMAGE}');
    $shablon = file_get_contents(PATH_TEMPLATE. 'attr_bunding.tpl');
    $SQL = "SELECT `attr_id`, `attr_name`, `attr_img_small`
    FROM`attraction`
    WHERE`attr_id` = $ID";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str.= str_replace($marker, $inf, $shablon);

    }

    return $str;
}



function Attr_For_Bund() {
    $str = '';
    $ID = isset($_GET['id']) ? $_GET['id'] : 0;
    $ID = (int)$ID;

    $marker = array('{NAME}', '{IMAGE}', '{ID}');

    $shablon = file_get_contents(PATH_TEMPLATE. 'attraction_card_bund.tpl');

    $SQL = "SELECT `attr_name`, `attr_img_small`, `attr_id`
    FROM`attraction`
    WHERE`attr_id`
    ORDER BY`attr_name` ASC";

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str.= str_replace($marker, $inf, $shablon);

    }

    return $str;
};

function Bund() {

    $ID = isset($_GET['id']) ? $_GET['id'] : 0;
    $ID = (int)$ID;

    if (isset($_POST['submit'])) {
        $check = $_POST['attr_near'];

        if (empty($check)) {
            echo("<p>Вы не выбрали ни одного объекта</p>\n");
        }
        else {
            $N = count($check);

            for ($i = 0; $i < $N; $i++) {

                $SQL = "INSERT INTO `belarusbase`.`similar_attr` (
                    `similar_attr_id`,
                    `similar_attr_1_id`,
                    `similar_attr_2_id`
                )
                VALUES(
                    NULL, '$ID', '$check[$i]')";
                mysql_query($SQL);
            }

        }

    }

};


?>