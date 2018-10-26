<?php
include('config.php');
include('connect.php');

$ID = isset($_GET['id']) ? $_GET['id']:0;
$ID =(int)$ID;

    $SQL = "SELECT `attr_coord_center_lat`, `attr_coord_center_lng` , `zoom`, `attr_coord_lat`, `attr_coord_lng`  
	FROM `attraction`  
	WHERE `attr_id`=$ID";
	
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
		
	} else {
	
		$Center_lat = 53.7976;
		$Center_lnt  = 27.9089;
		$Zoom = 5;
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

var marker_object = new google.maps.Marker({
position : {
lat : <?php echo $Coord_lat;?>,
lng : <?php echo $Coord_lnt;?>
},
map : object_map,
icon : 'images/mark/mark.png',
animation : google.maps.Animation.DROP
});

}
