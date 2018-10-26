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
		$COOL = $inf[3];
		$ROWS =$inf[4];
		$ZOOM= $inf[2]; 

    }

?>

var object_map;

function initMapObject() {
object_map = new google.maps.Map(document.getElementById('object_map'), {
center : {
lat : <?php echo $COOL;?>,
lng : <?php echo $ROWS;?>
},
zoom : <?php echo $ZOOM;?>
});

var marker_Minsk = new google.maps.Marker({
position : {
lat : <?php echo $COOL;?>,
lng : <?php echo $ROWS;?>
},
map : object_map,
icon : 'http://beltravel.by/images/mark/mark.png',
animation : google.maps.Animation.DROP
});

}
