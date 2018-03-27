<?php 

	$one = array('1'=>'one', '2'=>'two', '1'=>'one', '2'=>'two');

	$two = array();

	foreach ($one as $key => $value) {
		# code...
		if( !array_key_exists($key, $two)){
			$two[$key] = $value;
		}
	}

	echo json_encode($two);


 ?>