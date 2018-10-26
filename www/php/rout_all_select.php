<?php
include('config.php');
include('connect.php');
include('function.php');

	$all_rout= file_get_contents(PATH_TEMPLATE . 'all_rout.tpl');
	
	$marker = array('{MENU}', '{LOGO}' , '{FOOTER}', '{TRANSPORT}', '{START_POINT}', '{DURATION}');
	$marker_info = array(Menu(4), Logo(), Footer(),Transport_Li(), Start_City_Li(), Time_Li());

	function Select()	{
        $transport = isset($_POST['transport']) ? ($_POST['transport']) : "";
        $start_point = isset($_POST['start_point']) ? ($_POST['start_point']) : "";
        $time = isset($_POST['time']) ? ($_POST['time']) : "";

        $transport =str_replace('не имеет значения','', $transport);
        $start_point =str_replace('не имеет значения','', $start_point);
        $time =str_replace('не имеет значения','', $time);

	  $str = '';

    $mark =array('{ID}', '{NAME}', '{TIME}', '{IMAGE}' , '{LINK}', '{LENGTH}', '{PATH}', '{TRANSPORT_ICON}');
    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_card.tpl');
	
    $SQL = "SELECT `rout_id`, `rout_name`, `rout_time`, `rout_img_small`, `rout_link`, `rout_length`, `rout_path`, `transport_img` 
	FROM `rout`, `transport`,`rout_start`,`rout_time`
	WHERE `rout`.`transport_id`=`transport`.`transport_id` 
	AND `rout`.`rout_start_id`=`rout_start`.`rout_start_id`
	AND `rout`.`rout_time_id`=`rout_time`.`rout_time_id`";
    if(mb_strlen($transport)>0)
    {
        $SQL .=" AND `transport`.`transport_name`='$transport'";
    }
    if(mb_strlen($start_point)>0)
    {
        $SQL .=" AND `rout_start`.`start_city`='$start_point'";
    }

    if(mb_strlen($time)>0)
    {
        $SQL .=" AND `rout_time`.`time`='$time'";
    }


    $SQL .=" ORDER BY `rout_rating` DESC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($mark, $inf, $shablon);

    }

    return $str;

}

function Select_Rout()
{
 
$mark = array('{ROUT_CARD}');
$mark_info = array(Select());

$all_rout= file_get_contents(PATH_TEMPLATE . 'all_rout.tpl');

$page = str_replace($mark, $mark_info, $all_rout);
    return $page;
}


if(isset($_POST['submit'])) 	{

	$page = str_replace($marker, $marker_info, Select_Rout());
	}
	else	
	{
	$page = str_replace($marker, $marker_info, All_Rout());
	}
	
	
    echo $page;



?>