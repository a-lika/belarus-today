<?php
session_start();
include('config.php');
include('connect.php');
include('admin_function.php');
Attr_Delete();

$title = 'Достопримечательность - удалить';

$shablon = file_get_contents(PATH_TEMPLATE. 'attr_delete.tpl');
$markers = array('{REGION}', '{TYPE}');
$markers_info = array(Region(), Attr_Type());
$shablon = str_replace($markers, $markers_info, $shablon);


function Select() {

    $marker = array('{ATTR_NAME}', '{ATTR_IMG}', '{VALUE}');
    $shablon = file_get_contents(PATH_TEMPLATE. 'attr_near.tpl');
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $region = isset($_POST['region']) ? $_POST['region'] : '';

    $SQL = "SELECT `attr_name`, `attr_img_small`, `attr_id`
    FROM`attraction`, `region`, `type`
    WHERE`attraction`.`type_id` = `type`.`type_id`
    AND`attraction`.`region_id` = `region`.`region_id`";

    if ($type > 0) {
        $SQL.= " AND `type`.`type_id`='$type'";
    }

    if ($region > 0) {
        $SQL.= " AND `region`.`region_id`='$region'";
    }


    $SQL.= " ORDER BY `attr_name` ASC";

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++) {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str.= str_replace($marker, $inf, $shablon);
    }

    return $str;
}

if (isset($_POST['submitSearch'])) {

    $mark = array('{ATTRACTION_NEAR}');
    $mark_info = array(Select());

    $shablon = str_replace($mark, $mark_info, $shablon);


} else {

    $mark = array('{ATTRACTION_NEAR}');
    $mark_info = array(Attr_Near());

    $shablon = str_replace($mark, $mark_info, $shablon);
}






$page = file_get_contents(PATH_TEMPLATE. 'index.tpl');
$marker = array('{LOGO}', '{MENU}', '{TITLE}', '{INFO}');
$marker_info = array(Logo(), Menu(), $title, $shablon);


$page = str_replace($marker, $marker_info, $page);

echo $page;


?>