<?php
$DB = mysql_connect('sql310.epizy.com', 'epiz_20784582', 'AhVlZOpi5y') or die('no connect MYSQL');
mysql_select_db('epiz_20784582_belarusbase',$DB) or die('no select Base');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
mysql_query('SET NAMES utf8 COLLATE utf8_general_ci');

?>