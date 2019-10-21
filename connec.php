<?php
$link = mysql_connect("localhost","root","")
	or die ("noconnection");
mysql_select_db("teach",$link);
$query = mysql_query("SET NAMES 'utf8'");
?>