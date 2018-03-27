 <?php 

 	include 'metadata/map_data.php';

      $map_host = 'localhost';
      $map_user = 'username';
      $map_pass = 'password';
      $map_database = $_GET['database'];
      //echo $map_database;

      $map_con = mysqli_connect( $map_host, $map_user, $map_pass, $map_database );

      if($map_database == 'crime_avg'){

          $map_query = "select sum(total) as s, state from crimedata_total_avg group by state order by s desc";

          $map_color = array();
          $map_query_result = array();

          $map_result = $map_con->query($map_query);
          $count = 0;
          while($map_row = mysqli_fetch_array($map_result)){


              $map_color[$map_row['state']] = $colors[ $count %7 ];       
              $count = $count + 1;

          }
      // echo json_encode($map_color);
      }

      if($map_database == 'farmers_sih'){

          $map_query = "select sum(suicideavg) as s, district from farmers_state_analysis group by district order by s desc";

          $map_color = array();
          $map_query_result = array();

          $map_result = $map_con->query($map_query);
          $count = 0;
          while($map_row = mysqli_fetch_array($map_result)){


              $map_color[strtoupper($map_row['district'])] = $colors[ $count %7 ];       
              $count = $count + 1;

          }
      //echo json_encode($map_color);
      }

      if($map_database == 'sih_o2'){

          $map_query = "select sum(unemprate) as s, district from pmkvy group by district order by s desc";

          $map_color = array();
          $map_query_result = array();

          $map_result = $map_con->query($map_query);
          $count = 0;
          while($map_row = mysqli_fetch_array($map_result)){


              $map_color[strtoupper(substr($map_row['district'], 0, -5))] = $colors[ $count %7 ];       
              $count = $count + 1;

          }
      // echo json_encode($map_color);
      }

      
      echo "<html>";
      echo "<head>";
      ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  
  <link href="jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />
  <script src="jsmaps/jsmaps-libs.js" type="text/javascript"></script>
  <script src="jsmaps/jsmaps-panzoom.js"></script>
  <script src="jsmaps/jsmaps.min.js" type="text/javascript"></script>

 <?php
      echo "<script>";
      include 'maps/india.php';
      echo "</script>";
      include 'map.php';


?>