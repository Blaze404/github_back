
<?php
		
	include_once 'connection.php';

	/*echo "string";*/


	# two arrays to store district and ins value
	$district = array();
	$values = array();


	$query = "SELECT district, ". $table_name ." FROM ". $table ." limit 10";
	
	$result_1=$con->query($query);
	while($row = mysqli_fetch_array($result_1)){
	    /*echo $row['district']."</br>";*/
	    $district[] = "".$row['district'];
	    $values[] = floatval( $row[$table_name] );
	    $count = $count + 1;
	    
	};
				
?>