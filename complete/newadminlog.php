  
<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:newLogIn.php");  
} else {  
?>  
          <!DOCTYPE html>
          <html>

          <head>
              <title></title>
              <meta charset="utf-8">
              <meta name="viewport" content="initial-scale=1, width=device-width">
<link href="https://use.fontawesome.com/releases/v5.0.0/css/all.css" rel="stylesheet">       
       <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
              <style>
                  

                          .intrinsic-container {
        position: relative;
        height: 0;
        overflow: hidden;
      }
       
      /* 16x9 Aspect Ratio */
      .intrinsic-container-16x9 {
        padding-bottom: 50%;
      }
       
      /* 4x3 Aspect Ratio */
      .intrinsic-container-4x3 {
        padding-bottom: 75%;
      }
       
      .intrinsic-container iframe {

        position: absolute;
        top:2%;
        left:1.4%;
        width: 97.3%;
        height: 100%;
      }
                      
                          .search{
                              width: 40%;
                          }
                          .button-group-super{
                              float:right;
                              align-items: block;
                              margin-right: 2%;
                              padding-right: 0px;
                              
                          }
                          .navbar-container{
                              margin-top: 2%;
                          }
                          .navbar-default{
                              color:white;
                          }
                          .navbar-nav li  a{
                              color: white;
                          }
                              .navbar-head{
                                background-color: white;
                                border:0px;
                                margin-bottom: 0px;
                                padding-bottom: 0px;
                              }

                        .home-navbar{
                         
                          background-color: #488cf6;
                          background-color:#057d4a;
                          background-color: #264796;
                          margin-bottom: 0px;
                          padding-bottom: 0px;
                          width: 100%;
                          margin-right: 8%; 
                        }

    #external-links-wrapper {

      text-align: center;
margin-top: 2%;
      background-color: #eceff1;
    }

   #external-links-wrapper ul li {
     margin-left: 2%;
     margin right: 2%;
    }



  #header {
    background-color: #fff;

  }

  #ne-logo{
   
    max-height: 100%;
  max-width: 100%;
   width: 8em;
  float: left;
  }


  #logo-text {
    padding-top: 1em;

  word-wrap:break-word;
    text-align: left;
    text-transform: uppercase;

    color: #488cf6;
    color:#057d4a;
    color: #264796;

    font-size: 2.5em;
    font-weight: 700;
    }
  #Digi_Logo{

   max-width: 100%;
   max-height: 100%;
    width: 15em;
    float: right;
   
  }

  #msde_logo{

   max-width: 100%;
   max-height: 100%;
    width: 15em;
    float: right;
   
  }

  .dropdown{
  color: white;
  }
   /*   .affix {
        top: 0;
        width: 90%;
        z-index: 9999 !important;
    }

    .affix ~ .container-fluid {
       position: absolute;
       top: 50px;
    }*/
#footer-top{
background-color: darkgrey; 
text-align: center;
 
}
#footer-top li a{
  margin-top: 20%;
  color: white;
}

    #footer {
    padding:20px;

    cursor: pointer;
      text-align : center;

    color: #fff;
    background-color: #b0bec5;

    font-size: 13px;
      font-weight: 300px;
    }

    #footer a {
      color: #fff;
    }
#footer{
  background-color: black; 
}
  #footer ul li a {
       padding: 0 15px;
       }
}

.bottom-images li {
margin: 2%;
}

              </style>
          </head>
    
          <body>
             <div class="container">
             

  <nav class="navbar navbar-inverse navbar-head">
    <div class="container-fluid">
      <div class="navbar-header"  id="header" style="width: 100%; margin-top: 2%;">
      <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
          <a href="index.html">
                 <img  src="images/ne1.png" alt="NE Logo"  id="ne-logo" />
                 </a>

        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 ">
          <h4 id="logo-text">Government Of India</h4>
        </div>

        <div class="col-sm-2 col-md-2 col col-lg-2">
          <img src="images/Digital_India.png" alt="Digital India" id="Digi_Logo" />

        </div>
        <div class="col-sm-2 col-md-2 col col-lg-2">
          <img src="images/msde.png" alt="Skill India" id="msde_logo" />

        </div>
      </div>
      </div>
    </div>
  </nav>      
              <!-- Navbar starts -->
              <div class="container navbar-container" style="width: 100%; ">
  <nav class="navbar navbar-inverse home-navbar"  >
    <div class="container-fluid">
      <div class="navbar-header">
                      <button type="button" id="toggle_button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                          <div id="toggle_front">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </div>
                        
                      </button>
                      <a href="#" class="navbar-brand" style="color:white;">HOME</a>
                  </div>
                      <div class="collapse navbar-collapse" id="mainNavBar">
      <ul class="nav navbar-nav">
   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Crime
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
          </ul>
        </li>
   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Production
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
          </ul>
        </li>
   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Empowerment
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
          </ul>
        </li>    
           <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Extras
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
            <li><a href="#" style="color: black;">related stuff</a></li>
          </ul>
        </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Update
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;">Crime</a></li>
            <li><a href="#" style="color: black;">Empowerment</a></li>
            <li><a href="#" style="color: black;">Production</a></li>
          </ul>
        </li>

         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Profile
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color: black;"><?=$_SESSION['sess_user'];?>!</a></li>
            <li><a href="logout.php" style="color: black;">Log Out</a></li>
          <!--  <li><a href="#" style="color: black;"></a></li> -->
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
       
      </form>
    
    </div>
  </div>
  </nav>
    


              </div>

               <!-- Navbar endss -->
               <!-- Carousal essential-->
  <div class="row" style="width: 100%;margin-left: 0.1%;">
  <div class="col-lg-12 col-md-12 col-sm-12 " style="width: 99.9%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"  >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner"  >
      <div class="item active">
        <img src="images/carousel1.jpeg" width="100%"  alt="#">
      </div>

      <div class="item">
        <img src="images/agrischeme.jpg" width="100%" alt="#">
      </div>

      <div class="item">
        <img src="images/carousel3.jpg" width="100%"   alt="#">
      </div>
      <div class="item">
        <img src="images/carousel4.jpg" width="100%"   alt="#">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
  </div>
  </div>
  <!-- Carousal Ends -->
               <!-- Iframe -->
               <div class="intrinsic-container intrinsic-container-16x9">
        <iframe src="index.html" allowfullscreen></iframe>
      </div>

              <!-- End ifrme -->

              <!-- Modal 1-->
              <div class="modal fade" id="updateModal" role="dialog">
                  <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title-1">You need to be an admin to update, Please LogIn :-)</h4>
                          </div>
                          <div class="modal-body">
                              <div id="Admin" class="tab-pane fade in active">
                                  <div class="form">
                                      <form action="/action_page.php" style="margin: 5%;">
                                          <div class="form-group">
                                              <label for="text">User-Name:</label>
                                              <input type="text" class="form-control" id="" placeholder="Enter name" name="Name" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="email">Email:</label>
                                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                          </div>
                                          <div class="form-group">
                                              <label for="pwd">Password:</label>
                                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                                          </div>

                                          <script>
                                              function showAlert() { 
                                              var myText = "Account Created Successfully!";
                                              alert (myText);
                                            }
                                          </script>
                                          <button type="submit" class="btn btn-default" onclick="showAlert()">Submit</button>


                                      </form>
                                  </div>
                              </div>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>

                  </div>
              </div>
            </div>

          
    <!-- ===============================
            External Links
       ============================= -->
    <div id="external-links-wrapper">
      <div class="container">
        <div class="row bottom-images">
          <ul class="list-inline">
            <li>
              <a href="#" target="_blank">
                     <img src="images/nsdc.png" alt="" title="nsdc">
                  </a>
            </li>
            <li>
              <a href="#" target="_blank">
                     <img src="images/ddugky.png" alt="" title="ddugky" style="width: 12em;">
                  </a>
            </li>
            <li>
              <a href="#" target="_blank">
                     <img  src="images/pmkvy.png" alt="" title="pmkvy">
                  </a>
            </li>
            <li>
              <a href="#" target="_blank">
                     <img  src="images/skillindia.png" alt="" title="skill India" style="width: 8em;">
                  </a>
            </li>
            <li>
              <a href="#" target="_blank">
                     <img src="images/msde_logo.png" title="msde">
                  </a>
            </li>
          </ul>
        </div>
      </div>
    </div>





    <!-- =================================
                   footer
       =================================-->
 <div class="row" id="footer-top" style="width: 101.1%;">
          <div class="col-sm-12">
            <ul class="list-inline">
              <li><a href="">Don't know</a></li>
              <li><a href="">What should</a></li>
              <li><a href="">be written</a></li>
              <li><a href="">In this span</a></li>
              <li><a href="">But it looks cool!</a></li>
            </ul>
          </div>
        </div>
      </div>
    <footer id="footer">

       
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p><span> Copyright© 2018, Code Black Team, <a target="_blank" href="#" title="Skill Development Ministry ">&nbsp;&nbsp;Skill Development Ministry </a></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>SEND YOUR FEEDBACK:-&nbsp;&nbsp;#</span></p>
          </div>
        </div>

    </footer>


   

          </body>

          </html>

<?php  
}  
?>  