<html>

<head>

				<!-- Links -->
	 			<link href="https://use.fontawesome.com/releases/v5.0.0/css/all.css" rel="stylesheet">       
                <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
               
                <!-- Links End -->
<style>
	.scheme-box{
		border-radius: 10px;
		box-shadow:2px 3px 3px 2px; 
		margin: 12px 10px;
	}
     .scheme-box h2:hover{
     	text-shadow: 2px;
     	transform: s;
     }

</style>
</head>

<body>


<?php

	$database = $_GET['database'];


	$table_name = $_GET['table'];

	if( $database == ''){
		$database = "crime_avg";
		$table_name = "murder";
	}

	// echo $database;

	# get table name

	# if not either then show smart city ( crime )


	$city_name = $_GET['city'];
	if( !($city_name == '' || $city_name == 'CITY')){
		include 'city_live.php';	
	}

	if( $database == 'farmers_sih'){
		//echo "here";
		$table = $_GET['table'];
		$third = $_GET['third'];
		$second = "currprod";
		if( $third == '' ){
			$third = 'suicide14l';
			$second = "suicide14f";
		}
		include 'agridata_live.php';
		include 'graph3.php';
	}

	if( $database == 'crime_avg' && ($city_name == '' || $city_name == 'CITY')){
		$table = 'crimedata_'.$table_name.'_avg';
	
		include 'crimedata_live.php';
		$topic = $table_name;
		include 'graph2.php';
	}

	if( $database == 'sih_o3'){
		include_once 'connection.php';

		$table_name = $_GET['table'];

		$district = array();
		$values = array();


		$query = "SELECT district, avg FROM ". $table_name ." limit 10";

		// echo $query;

		$result_1=$con->query($query);
		while($row = mysqli_fetch_array($result_1)){
		    /*echo $row['district']."</br>";*/
		    $district[] = "".$row['district'];
		    $values[] = floatval( $row['avg'] );
		    $count = $count + 1;
		    
		};
		include 'graph2.php';	
	}

	if( $database == 'sih_o2' ){
		$pmkvy_scheme = $_GET['scheme'];
		include_once 'connection.php';
		include 'pmkvy.php';
		//echo "here";
		//include 'graph3.php';
	}


	include 'scheme.php';

?>

</body>

</html>