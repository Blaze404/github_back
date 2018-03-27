<?php 


	$city_name = $_GET['city'];
	$city_database = $_GET['database'];

	$chapter = $_GET['chapter'];

	$city_host = 'localhost';
	$city_user = 'username';
	$city_password = 'password';
	$city_database = $city_database;

	$city_con = mysqli_connect($city_host, $city_user, $city_password, $city_database);
	include 'city_live.php';

?>