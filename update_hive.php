<?php
	echo "hello";
	

	
	$target_dir = "./uploads/";
	$target_file = $target_dir . 'temp';
	$uploadOk = 1;
	echo $target_file."</br>";
	$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.</br>";
	    $uploadOk = 0;
	}
	echo $target_file . "</br>";

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
       	echo $_FILES['fileToUpload']['error'];
       	print_r($_FILES);
   		die();
    }

	$var = exec( "hive -f ./hive.hql");
var_dump($var);
echo "file uploaded in hive </br>";
	$var1 = exec( "rm ./uploads/temp");

?>

