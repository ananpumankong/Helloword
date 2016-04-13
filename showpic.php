<?php 
	$id = $_GET['id'];

	mysql_connect("localhost","root","");
		mysql_select_db("my_database_gis");

	$result = mysql_query("select fileType, fileContent from products where PID = $id")or die(mysql_error());
	$type = mysql_result($result, 0, 'fileType');
	$content = mysql_result($result, 0, 'fileContent');

	// header("content-Disposition: attachment; filename=aaa.jpg");
	header("Content-type: $type");
	echo $content;
?>