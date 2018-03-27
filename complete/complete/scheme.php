<div class="container">

<div class="row">

<?php

	include_once 'connection.php';
	include_once 'metadata/tables.php';

	// #################### IF CITY #############################
	if( $city_name != '' && $city_name != 'CITY'){

		// #### array to store the results of the search in database
		$status = array();

		// #### for each database
		foreach ($databases as $city_database) {
			// #### for every table in the database
			$city_host = 'localhost';
			$city_username = 'username';
			$city_password = 'password';
			$city_db = $city_database;
			
			$city_con = mysqli_connect( $city_host, $city_username, $city_password, $city_db);

			foreach (${$city_database} as $city_table ) {
				// echo $city_table."</br>";

				$query = "SELECT COUNT(*) from ". $city_table. " WHERE " . ${$city_table}['col'] . " >= ( SELECT ". ${$city_table}['col'] . " FROM " . $city_table. " where district='". $city_name . "')";
				// echo $city_db." : ".$query."</br>";

				$city_result = $city_con->query($query);
				$city_row = mysqli_fetch_array($city_result);

				$city_rank = $city_row['COUNT(*)'];

				if( $city_rank != 0 && $city_rank <= 78 ){
					$status[${$city_table}['keyword']] = $city_rank;
					///echo ${$city_table}['keyword'];

				}

			}
			$city_con->close();
		}
		asort($status);
		//echo json_encode($status);

		// ######## schemes for city

		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "schemes";

		// Create connection
		$scheme_con = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($scheme_con->connect_error) {
		    die("Connection failed: " . $scheme_con->connect_error);
		}
			$schl = array();
		foreach ($status as $keywords => $rank) {
			$sql = "SELECT distinct * from scheme where keywords LIKE '%".$keywords."%'";
			$result = $scheme_con->query($sql);
			$sch = array();
			if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $name1 = $row['name'];
				        $keywords1 = $row['description'];
				        //echo "name: " . $row["name"]. " - key: " . $row["keywords"]. "<br>";
				    	# include 'iframe_utils/schemebox.php';
				    	$sch[$name1] = $keywords1;
				    }
				} else {
				    //echo "0 results";
				}
			
				foreach ($sch as $name => $keywords) {
					# code...
					if(!array_key_exists($name, $schl)){
						$schl[$name] = $keywords;
						
					}
				}
				//echo json_encode($sch);
				///echo "</br>";
				//echo json_encode($schl);
				//echo "</br></br></br>";
				
		}
		foreach ($schl as $name => $keywords) {
					# code...
					include 'iframe_utils/schemebox.php';
				}
		$scheme_con->close();
				


	}
	// ##################### END CITY ############################


	// ##################### Crime ########################

		if( $database == 'crime_avg' && ($city_name == '' || $city_name == 'CITY' )){

		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "schemes";

		// Create connection
		$crime_con = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($crime_con->connect_error) {
		    die("Connection failed: " . $crime_con->connect_error);
		}

			$sch = array();
		
			$sql = "SELECT distinct * from scheme where keywords LIKE '%".$table_name."%'";
			$result = $crime_con->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $name1 = $row['name'];
				        $keywords1 = $row['description'];
				        //echo "name: " . $row["name"]. " - key: " . $row["keywords"]. "<br>";
				    	//include 'iframe_utils/schemebox.php';
				    	$sch[$name1] = $keywords1;
				    }
				} else {
				    //echo "0 results";
				}
			echo "here";
			foreach ($sch as $name => $keywords) {
				# code...
				include 'iframe_utils/schemebox.php';
			}
		
		$crime_con->close();

		}


	// ##################### END Crime #####################

		// ######### agri #################


		if( $database == 'farmers_sih'){

		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "schemes";

		// Create connection
		$crime_con = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($crime_con->connect_error) {
		    die("Connection failed: " . $crime_con->connect_error);
		}

		
			$sql = "SELECT distinct * from scheme where keywords LIKE '%".${$table}['keyword']."%'";
			$result = $crime_con->query($sql);

			if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $name = $row['name'];
				        $keywords = $row['description'];
				        //echo "name: " . $row["name"]. " - key: " . $row["keywords"]. "<br>";
				    	include 'iframe_utils/schemebox.php';
				    }
				} else {
				    //echo "0 results";
				}
		
		$crime_con->close();

		}

		// ################# end agri


/*
	foreach ( $crime_avg as $crime_table_key ) {
		$crime_table_name = "crimedata_".$crime_table_key."_avg";
		$query = "SELECT COUNT(*) from ".$crime_table_name." WHERE ". $crime_table_key ." >= ( SELECT ". $crime_table_key ." FROM ". $crime_table_name ." WHERE district='".$city_name."')";
		# echo $query;
		$result_2=$con->query($query);
		$row = mysqli_fetch_array($result_2);

		#echo $query." ".$crime_table_key."</br>";

		$rank = $row['COUNT(*)'];
		# echo $rank." heyyy</br>";

		if( $rank <= 100 ){
				$servername = "localhost";
				$username = "username";
				$password = "password";
				$dbname = "schemes";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * from scheme where keywords LIKE '%".$crime_table_key."%'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $name = $row['name'];
				        $keywords = $row['keywords'];
				        //echo "name: " . $row["name"]. " - key: " . $row["keywords"]. "<br>";
				    	include 'iframe_utils/schemebox.php';
				    }
				} else {
				    //echo "0 results";
				}
				$conn->close();
		}

	}*/

?>

</div>

</div>

<!-- SELECT COUNT(*) FROM crimedata_murder_avg  WHERE murder >= ( SELECT murder FROM crimedata_murder_avg WHERE district='GHAZIABAD'); -->