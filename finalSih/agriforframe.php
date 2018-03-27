<?php 


   $host = 'localhost';
  $username = 'username';
  $password = 'password';
  $database = 'pune';

  $con = mysqli_connect($host, $username, $password, $database);




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
  <h2>Agricultre</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Whole">Drought</a></li>
    <li><a data-toggle="tab" href="#Suicide">Suicide</a></li>
    <li><a href="seasonforiframe.php">Season</a></li> 
  <li><a href="forIframe.php">Home</a></li>
  </ul>

  <div class="tab-content">
    <div id="Drought" class="tab-pane fade in active">
      <h3>Drought</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="Suicide" class="tab-pane fade">
      <h3>Suicide</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
   
  </div>
</div>


</body>
</html>