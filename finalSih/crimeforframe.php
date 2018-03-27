<?php 


  $host = 'localhost';
  $username = 'username';
  $password = 'password';
  $database = 'pune';

  $con = mysqli_connect($host, $username, $password, $database);

  $table_name = $_GET['table_name'];

  if( $table_name != '' ){

  include_once 'tables1.php';

  $taluka = array();
  $values = array();

  
    # code...

    $query = "SELECT taluka, ";
    foreach (${$table_name} as $crime_row) {
      # code...
      $query .= $crime_row." ";
    }
    $query .= " FROM ". $table_name ;

    $result_set = $con->query($query);
    echo $query;

    while( $row = mysqli_fetch_array($result_set) ){
      $taluka[] = $row['taluka'];
      $values[] = floatval($row[${$table_name}[0]]);
      //echo json_encode(${$table_name}[0]);
    }
  
    echo json_encode($taluka);

  }
 ?>

<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Crime</h2>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="./crimeforframe.php?table_name=pune_crime_murder">Murder</a></li>
    <li><a data-toggle="tab" href="./crimeforframe.php?table_name=pune_crime_rape">Rape</a></li>
    <li><a data-toggle="tab" href="./crimeforframe.php?table_name=pune_crime_dowry">Dowry</a></li>
    <li><a data-toggle="tab" href="./crimeforframe.php?table_name=pune_crime_arson">Arson</a></li>
    <li><a data-toggle="tab" href="./crimeforframe.php?table_name=pune_crime_robbery">Robbery</a></li>
    <li><a data-toggle="tab" href="./crimeforframe.php?table_name=pune_crime_Kidnapping">Kidnapping</a></li>
    <li><a data-toggle="tab" href="./crimeforframe.php?table_name=pune_crime_riots">Riots</a></li>
    <li><a href="forIframe.php">Home</a></li>

  </ul>

  <?php include '../punegraph.php'; ?>

  <div class="tab-content">
    <div id="Murder" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="Rape" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="Dowry" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="Arson" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
      <div id="Robbery" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  <div id="Kidnapping" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
      <div id="Riots" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
      </div>
</div>


</body>
</html>