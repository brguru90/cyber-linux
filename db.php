<?php
/*******************************************************************************************************************************************/
	//phpmyadmin
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="cyber";//In some web server (Actually in sub domain),specified database name need to br manully created in phpmyadmin section

	//Account registered at way2sms.com
	$uid="9482399078";
	$pwd="1111";
/*******************************************************************************************************************************************/
$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "create database $dbname";
	$conn->query($sql);
	$conn->close();
?>