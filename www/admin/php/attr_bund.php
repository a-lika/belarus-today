<?php
session_start();
include('config.php');
include('connect.php');
include('admin_function.php');
Attr_Bund();

$title = 'Достопримечательность - связать';

$shablon = file_get_contents(PATH_TEMPLATE. 'attr_redact.tpl');
$markers = array('{REGION}', '{TYPE}');
$markers_info = array(Region(), Attr_Type());
$shablon = str_replace($markers, $markers_info, $shablon);

function Select() {
    $marker = array('{NAME}', '{IMAGE}', '{ID}');
    $shablon = file_get_contents(PATH_TEMPLATE. 'attraction_card_bund.tpl');
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

    echo $type;
    echo $region;
    return $str;
}

if (isset($_POST['submit'])) {

    $mark = array('{ATTRACTION}');
    $mark_info = array(Select());
    $shablon = str_replace($mark, $mark_info, $shablon);

} else {

    $mark = array('{ATTRACTION}');
    $mark_info = array(Attr_For_Bund());

    $shablon = str_replace($mark, $mark_info, $shablon);
}

$page = file_get_contents(PATH_TEMPLATE. 'index.tpl');
$marker = array('{LOGO}', '{MENU}', '{TITLE}', '{INFO}');
$marker_info = array(Logo(), Menu(), $title, $shablon);

$page = str_replace($marker, $marker_info, $page);

echo $page;
    
?>