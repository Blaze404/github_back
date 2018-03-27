
<?php
		
	include_once 'connection.php';

	/*echo "string";*/

	# two arrays to store district and ins value
	$district = array();
	$current = array();
	$third_col = array();

	$query = "SELECT district, currprod , ". $third ." FROM ". $table ." limit 10";

	if( $second == 'suicide14f' ){
		$query = "SELECT district,". $second .", ". $third ." FROM ". $table ." order by suicide14f desc limit 10";
	}


	
	echo $query;

	$result_1=$con->query($query);
	while($row = mysqli_fetch_array($result_1)){
	    /*echo $row['district']."</br>";*/
	    $district[] = "".$row['district'];
	    $current[] = floatval( $row[$second] );
	    $third_col[] = floatval( $row[$third] );
	    
	};
				
?>