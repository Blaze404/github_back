<?php 
  
      $host = "localhost";
    $user = "username";
    $database_name = "schemes";
    $password = "password";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
   // echo "hello again";
$search=$_POST['searchstring'];
//echo $search."</br>";
$search = trim($search);
$search_explode = explode(" ", $search);
$cons = "select * from scheme where ";
$count = 0;
foreach ($search_explode as $exploded_search ) {
    # code...
    # $exploded_search = metaphone($exploded_search);
    $count++;
    if( $count == 1){
        $cons .= "name LIKE '%$exploded_search%' OR keywords LIKE '%$exploded_search%' ";    
    } else{
        $cons .= "OR name LIKE '%$exploded_search%' OR keywords LIKE '%$exploded_search%' ";
    }

}
//$cons .= " LIMIT 0, 10";    
//echo $cons."</br>";
$query = $pdo->prepare($cons);
//select * from scheme where name LIKE '%$search%' OR kewwords LIKE '%$search%'  LIMIT 0 , 10
$query->bindValue(1, "%$search%-", PDO::PARAM_STR);
$query->execute();
// echo "again hello";
// Display search result
      /*   if (!$query->rowCount() == 0) {
        echo "Search found :<br/>";
        echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Title Scheme</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Description</td></tr>";        
            while ($results = $query->fetch()) {
        echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";      
                echo $results['name'];
        echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['keywords'];
        echo "</td>";
            
            }
        echo "</table>";    
        } else {
            echo 'Nothing found';
        }*/


?>


<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Ministry Of Skill Development and Entrepreneurship</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
 
  .jumbotron {
      background-color:  #1b365d;
      color: #fff;
      padding: 10px 25px;
      font-family: Montserrat, sans-serif;
      margin: 0px;
  }
  @media(max-width: 720px){
    .jumbotron{
        background-color:  #1b365d;
      color: #fff;
      padding: 20px 25px;
      font-family: Montserrat, sans-serif;
      margin: 0px;
    }
       .jumbotron a{
        margin: 0px;
        padding: 0px;
  position: inline-block;
  text-decoration: none;
  color: white;
  }
.jumbotron h2{
    font-size: 3vw;
    color: white;
    padding: 1px 0px 0px 0px;
    margin-top: 2px;
  }
  }


  .jumbotron img{
    position: inline-block;
    width: 5em;
  }
  .jumbotron h2{
    font-size: 3vw;
    color: white;
  }
  .jumbotron a{
  position: inline-block;
  text-decoration: none;
  color: white;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color:  #fff;
  }
  footer{
    font-size: 15px;
    color: #fff;
    background-color: #1b365d;
    padding: 30px; 
  }
  .slideanim {
    visibility:hidden;

  }
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(10%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(10%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

.cards {
  border: 1px solid #999999;
  box-shadow:  5px 5px 8px #999999;
  text-align: center;
  margin-top: 50px;
}
.contents {
  border: 2px solid black;
  text-align: center;
}

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- jumbotron header -->

<div class="jumbotron text-center">
  <h2>Search Results</h2>
  <span>You searched for <?php echo json_encode($search) ?></span></a>
</div>

<!-- jumbotron header ends -->



<div id="main" tabindex="-1">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 content">
            <article>
                <div>
    <div class="tn-searchresults parbase">
  <!-- search box -->      

  <?php 

  if (!$query->rowCount() == 0) {
        //echo "Search found :<br/>";
        //echo "<table style=\"font-family:arial;color:#333333;\">";  
                //echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Title Scheme</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Description</td></tr>";        
            while ($results = $query->fetch()) {
        //echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";      
                $name =  $results['name'];
        //echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                $description = $results['description'];
        //echo "</td>";
                include 'searchbox.php';
            }
            
        } else {
            echo '<center><h1>Nothing found</h1></center></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>';
        }




   ?>      

        <div style="clear:both;"></div>
</div>
</div>
    </article>
        </div>
    </div>
</div>               
<footer class="container-fluid text-center ">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright CODEBLACK for Smart India Hackathon,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ministry of Skill and Entrepreneurship India.</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>
