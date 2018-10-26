<?php
include('config.php');
include('connect.php');

$ID = isset($_GET['id']) ? $_GET['id']:0;
$ID =(int)$ID;
$str_lat ='';
$str_rout = '';
$shablon = file_get_contents(PATH_TEMPLATE .'map.tpl');
$marker=array('{LAT}','{LNG}','{ID}');
    $SQL = "SELECT`marker_coord_lat`, `marker_coord_lng`, `marker_type`
	FROM `marker_rout`
	WHERE `rout_id`=$ID";

	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    if($count>1)
    {
        for($i=0; $i<$count;$i++)
        {
            $inf = mysql_fetch_array($date, MYSQL_NUM);
            $str_lat .='{lat: '. $inf[0] .', lng:' . $inf[1] .'},';
            $marker_info=array($inf[0],$inf[1],$inf[2]);
            $str_rout .=str_replace($marker, $marker_info, $shablon);


        }
    
    }

	
$ID_map= isset($_GET['id']) ? $_GET['id']:0;
$ID_map =(int)$ID_map;

$SQL_map = "SELECT `rout_coord_center_lat`, `rout_coord_center_lng` , `zoom`
	FROM `rout`  
	WHERE `rout_id`=$ID_map";

	
	$date = mysql_query($SQL_map);
    $count_map = mysql_affected_rows();
	
	if($count_map==1)
	{
        $inf = mysql_fetch_array($date, MYSQL_NUM);
		
		$Center_lat = $inf[0];
		$Center_lnt = $inf[1];
		$Zoom = $inf[2];
    }
	else {
        echo('нет координат');
	}
?>

var rout_map;
function initMapRout() {
rout_map = new google.maps.Map(document.getElementById('rout_map'), {
center : {
lat : <?php echo $Center_lat;?>,
lng : <?php echo $Center_lnt;?>
},
zoom : <?php echo $Zoom;?>
});

var routPlanCoordinates = [
<?php echo $str_lat;?>
];

<?php echo $str_rout; ?>



var flightPath = new google.maps.Polyline({
path: routPlanCoordinates,
geodesic: true,
strokeColor: '#464646',
strokeOpacity: 1.0,
strokeWeight: 4
});

flightPath.setMap(rout_map);


}


