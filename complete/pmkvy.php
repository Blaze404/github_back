<?php 

	if( $pmkvy_scheme == 'cts' ){
		$query = " SELECT district , unemprate, lr8_10 from pmkvy order by unemprate desc, lr8_10 limit 10";

	//	echo $query;

		$district = array();
		$current = array();
		$third_col = array();
		$table_name = "CTS";
		$second = 'unemployement';
		$third = 'literacy';

	$result_1=$con->query($query);
	while($row = mysqli_fetch_array($result_1)){
	    /*echo $row['district']."</br>";*/
	    $district[] = "".$row['district'];
	    $current[] = floatval( $row['unemprate'] );
	    $third_col[] = floatval( $row['lr8_10'] );

		}
		include 'graph3.php';
	}
	if( $pmkvy_scheme == 'sdi' ){
		$query = " SELECT district , unemprate, lrg from pmkvy order by unemprate desc, lrg  limit 10";

	//	echo $query;

		$district = array();
		$current = array();
		$third_col = array();
		$table_name = "SDI";
		$second = 'unemployement';
		$third = 'literacy';

	$result_1=$con->query($query);
	while($row = mysqli_fetch_array($result_1)){
	    /*echo $row['district']."</br>";*/
	    $district[] = "".$row['district'];
	    $current[] = floatval( $row['unemprate'] );
	    $third_col[] = floatval( $row['lrg'] );

		}
		include 'graph3.php';
	}
	if( $pmkvy_scheme == 'ddugky' ){
		$query = " SELECT district , unemprate, youth from pmkvy order by unemprate desc, youth desc limit 10";

	//	echo $query;

		$district = array();
		$current = array();
		$third_col = array();
		$table_name = "DDUGKY";
		$second = 'unemployement';
		$third = 'youth population';

	$result_1=$con->query($query);
	while($row = mysqli_fetch_array($result_1)){
	    /*echo $row['district']."</br>";*/
	    $district[] = "".$row['district'];
	    $current[] = floatval( $row['unemprate'] );
	    $third_col[] = floatval( $row['youth'] );

		}
		include 'graph3.php';
	}

	if( $pmkvy_scheme == 'hsrt' ){
		$query = " SELECT district , unemprate, dropg, youth from pmkvy order by unemprate desc, dropg desc, youth desc limit 10";

	//	echo $query;

		$district = array();
		$current = array();
		$third_col = array();
		$table_name = "HSRT";
		$second = 'unemployement';
		$third = 'Dropout rate';
		$fourth = 'Youth %';
		$fourth_col = array();

	$result_1=$con->query($query);
	while($row = mysqli_fetch_array($result_1)){
	    /*echo $row['district']."</br>";*/
	    $district[] = "".$row['district'];
	    $current[] = floatval( $row['unemprate'] );
	    $third_col[] = floatval( $row['dropg'] );
	    $fourth_col[] = floatval( $row['youth'] );

		}
		include 'graph4.php';
	}

	if( $pmkvy_scheme == 'sankalp' ){
		$query = " SELECT district , unemprate, csr/100, tsr from pmkvy order by unemprate desc, tsr , csr  limit 10";

	//	echo $query;

		$district = array();
		$current = array();
		$third_col = array();
		$table_name = "Sankalp";
		$second = 'unemployement';
		$third = 'College Student Ratio in 100\'s';
		$fourth = 'Teacher Student Ratio';
		$fourth_col = array();

	$result_1=$con->query($query);
	while($row = mysqli_fetch_array($result_1)){
	    /*echo $row['district']."</br>";*/
	    $district[] = "".$row['district'];
	    $current[] = floatval( $row['unemprate'] );
	    $third_col[] = floatval( $row['csr/100'] );
	    $fourth_col[] = floatval( $row['tsr'] );

		}
		include 'graph4.php';
	}


?>