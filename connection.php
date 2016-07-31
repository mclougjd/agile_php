<?php

	$hostname = "127.0.0.1";
	$username = "johnmcloughlin";
	$password = "";
	$database = "c9";
   	$port = 3306;                               //The port #. It is always 3306

	$conn = mysql_connect("$hostname","$username","$password", "$port") or die(mysql_error());
	mysql_select_db("$database", $conn) or die(mysql_error());

?>