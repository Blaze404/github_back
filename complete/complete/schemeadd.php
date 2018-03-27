 <form action="" method="post">
  <div class="form-group">
    <label for="scheme">Scheme Name:</label>
    <input type="text" class="form-control" id="scheme" name="scheme">
  </div>
  <div class="form-group">
    <label for="keys">Keywords:</label>
    <input type="text" class="form-control" id="keys" name="keys">
  </div>

  <div class="form-group">
    <label for="disc">Discription:</label>
    <input type="text" class="form-control" id="disc" name="disc">
  </div>
  
  <input name="submit" type="submit" class="btn btn-default">Submit</input>
</form> 

<?php

  if( isset($_POST['submit'])){
    $scheme_sound = metaphone($_POST['scheme']);
    $key_data = explode(" ", $_POST['keys']);
    $keywords = '';
    foreach ($key_data as $key_data_temp) {
      # code...
      $keywords .= metaphone($key_data_temp)." ";

    }

    $scheme_host = "localhost";
    $scheme_user = "username";
    $scheme_pass = "password";
    $scheme_db = "schemes";

   $scheme_conn = mysqli_connect($scheme_host, $scheme_user, $scheme_pass, $scheme_db ); 
    
    $query = " INSERT INTO scheme values( '" . $_POST['scheme'] . "', '". $scheme_sound ."','"  . $_POST['keys'] . "','" . $keywords ."' , '" . $_POST['disc'] ."' )" ;

    $scheme_conn->query($query);
  }

?>