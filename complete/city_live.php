
<?php
		
	/*echo "string";*/

	include_once 'metadata/tables.php';
	

	# two arrays to store district and ins value
	$city_crime = array();
	$city_values = array();

	if( $city_database == 'farmers_sih' || $city_database == 'crime_avg' ){

	foreach ( ${$city_database} as $city_each_table ) {
		$crafted_col = ${$city_each_table}['col'];
		if( $crafted_col == 'damage' ){
			$crafted_col = $crafted_col . '/50 as ' + $crafted_col;
		}

		$district = 'district';

		if( $city_each_table == 'pmkvy' ){
			$district = 'state';
		}
		$query = "SELECT ". $crafted_col ." FROM ". $city_each_table. " WHERE ". $district . " like '". $city_name."%'" ;
		echo $query;
		$result_1=$city_con->query($query);
		$row = mysqli_fetch_array($result_1);
		#echo $query." ".$crime_table_key."</br>";
		// echo $query."</br>";
		$city_values[] = floatval( $row[${$city_each_table}['col']] );
		$city_crime[] = ${$city_each_table}['col'];
	}

	
	include 'graphcity.php';
	//$city_con.close();
	// echo json_encode($city_crime);
	// echo json_encode($city_values);

	$city_keywords = array();

	foreach ( ${$city_database} as $city_each_table ) {	

		$query = "SELECT COUNT(*) from ". $city_each_table. " WHERE " . ${$city_each_table}['col'] . " >= ( SELECT ". ${$city_each_table}['col'] . " FROM " . $city_each_table. " where district='". $city_name . "')";

		echo $query;
		$city_result = $city_con->query($query);
		$city_row = mysqli_fetch_array($city_result);

		$city_rank = $city_row['COUNT(*)'];

		if( $city_rank <= 78 ){
			$city_keywords[] = "high".${$city_each_table}['search'];
		} else{
			$city_keywords[] = "low".${$city_each_table}['search'];
		}
		$city_keywords[] = ${$city_each_table}['search'];



	}
	//$city_con.close();;
	 echo json_encode($city_keywords);
	$search_result = array();
	$search_result_scheme = array();


		$city_con = mysqli_connect($city_host, $city_user, $city_password, 'schemes');

		foreach ($city_keywords as $keys ) {
			$query = "select name, description from scheme where keywords LIKE '%$keys%'";
			//echo $query;
			$city_result_temp = $city_con->query($query);

			while( $city_result_row = mysqli_fetch_array($city_result_temp) ){
				//echo $city_result_row['name'];
				$search_result_scheme[$city_result_row['name']] = $city_result_row['description'];
				if( array_key_exists($city_result_row['name'], $search_result)){
					$tempCount = intval($search_result[$city_result_row['name']]);
					$search_result[$city_result_row['name']] = $tempCount + 1;

				} else{
					$search_result[$city_result_row['name']] = 1;					
				}
			}

		 } 
	//echo json_encode($search_result);	
	//echo json_encode(array_reverse($search_result)); 
	arsort($search_result);

	//array_reverse($search_result);


	foreach ($search_result as $key => $value) {
		# code...
		echo $key.": ".$search_result_scheme[$key]."</br></br></br>";
	}
	}
	else if( $city_database == 'sih_o2' ) {


		$query = "SELECT * from pmkvy where state like '" . $city_name . "%'";
		//echo $query;

		$result_1=$city_con->query($query);
		$row = mysqli_fetch_array($result_1);

		$city_crime[] = 'Unemployment';
		$city_values[] = floatval($row['unemprate']);


		$city_crime[] = 'Illeteracy';
		$city_values[] = (floatval($row['lr5_8']) + floatval($row['lr8_10']) + floatval($row['lr11_12']) + floatval($row['lrg']) + floatval($row['lrpg'])) / 5 ;


		$city_crime[] = 'Dropout';
		$city_values[] = floatval($row['drop8_10']);


		$city_crime[] = 'Youth';
		$city_values[] = floatval($row['youth']);
	include 'graphcity.php';

		$ranks = array();
		$cities = array();

		//$city_con = mysqli_connect($city_host, $city_user, $city_password, 'schemes');
		foreach ($pmkvy as $pmk) {

			$emp_con = $city_con = mysqli_connect($city_host, $city_user, $city_password, 'sih_o2');			
			$query = "SELECT COUNT(*) from (select *from pmkvy order by ". ${$pmk}['col'] ." desc)t WHERE t.".${$pmk}['col']." > ( SELECT distinct ".${$pmk}['col']." FROM pmkvy where state LIKE '".$city_name."%')";
			
			//echo $query;
			$emp_result_temp = $emp_con->query($query);

			$emp_result_row = mysqli_fetch_array($emp_result_temp);  

			$rank = $emp_result_row['COUNT(*)'];
			//echo json_encode($rank);
			if( $rank <= 78 ){
			$city_keywords[] = "high".${$pmk}['search'];
		} else{
			$city_keywords[] = "low".${$pmk}['search'];
		}
			$city_keywords[] = ${$pmk}['search'];

		}
		//echo json_encode(${$pmkvy}['search']);
		//echo json_encode($city_keywords);

		$search_result = array();
		$search_result_scheme = array();


		$emp_con = mysqli_connect($city_host, $city_user, $city_password, 'schemes');

		foreach ($city_keywords as $keys ) {
			$query = "select name, description from scheme where keywords LIKE '%$keys%'";
			//echo $query;
			$emp_result_temp = $emp_con->query($query);

			while( $emp_result_row = mysqli_fetch_array($emp_result_temp) ){
				//echo $city_result_row['name'];
				$search_result_scheme[$emp_result_row['name']] = $emp_result_row['description'];
				if( array_key_exists($emp_result_row['name'], $search_result)){
					$tempCount = intval($search_result[$emp_result_row['name']]);
					$search_result[$emp_result_row['name']] = $tempCount + 1;

				} else{
					$search_result[$emp_result_row['name']] = 1;					
				}
			}

		 } 
	
	//echo json_encode(array_reverse($search_result)); 
	arsort($search_result);
	//	echo json_encode($search_result_scheme)."</br></br>";	


	foreach ($search_result as $key => $value) {
		# code...
		echo $key.": ".$search_result_scheme[$key]."</br></br></br>";
	}
	
	}

	else{

		$query = "SELECT * from ". $chapter . " WHERE district LIKE '". $city_name ."%'";
		$smart_skill_result = $city_con->query($query);

		$smart_skill_row = mysqli_fetch_array($smart_skill_result);

		$district = array();
		$values = array();
		//echo json_encode($smart_skill_row);



		foreach (${$chapter} as $col) {
			$district[] = $col;
			$values[] = floatval($smart_skill_row[$col]);
		}
		//echo json_encode($district);
		//echo json_encode($values);

		//$district = $city_name;
		$table_name = $city_name;
		$topic = "Percentage Value";
		//echo json_encode($values);
		include 'graph2.php';


	}




?>
