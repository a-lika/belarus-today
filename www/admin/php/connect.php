<?php
$DB = mysql_connect('localhost', 'root', '') or die('no connect MYSQL');
mysql_select_db('belarusbase',$DB) or die('no select Base');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
mysql_query('SET NAMES utf8 COLLATE utf8_general_ci');

?>