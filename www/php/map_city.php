<?php
include('config.php');
include('connect.php');

$ID = isset($_GET['id']) ? $_GET['id']:0;
$ID =(int)$ID;

    $SQL = "SELECT `city_coord_center_lat`, `city_coord_center_lng` , `zoom`, `city_coord_lat`, `city_coord_lng`  
	FROM `city`  
	WHERE `city_id`=$ID";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    if($count==1)
	{
        $inf = mysql_fetch_array($date, MYSQL_NUM);
		
		$Center_lat = $inf[0];
		$Center_lnt = $inf[1];
		$Zoom = $inf[2];
		$Coord_lat = $inf[3];
		$Coord_lnt =$inf[4];
    }
	

?>

var object_map;

function initMapObject() {
object_map = new google.maps.Map(document.getElementById('object_map'), {
center : {
lat : <?php echo $Center_lat;?>,
lng : <?php echo $Center_lnt;?>
},
zoom : <?php echo $Zoom;?>
});

var marker_city = new google.maps.Marker({
position : {
lat : <?php echo $Coord_lat;?>,
lng : <?php echo $Coord_lnt;?>
},
map : object_map,
icon : 'images/mark/mark.png',
animation : google.maps.Animation.DROP
});

}
