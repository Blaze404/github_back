            <!DOCTYPE html>
            <html>
            <head>
              <!-- Bootstrap links -->
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
                <link rel="stylesheet" type="text/css" href="css/index.css">

                  <script src='js/select2.min.js' type='text/javascript'></script>

                    <!-- CSS -->
                    <link href='css/select2.min.css' rel='stylesheet' type='text/css'>

 </head>
 <body>
  <!-- ---------------------------------Main container starts...------------------------------- -->
   <div class="container" id="maincontainer" style="">
     <div class="container" id="" style="width: 90%;margin-left:5%;margin-right:5%;margin-top: 5%;">
        <div class="header"  id="header">
        <div class="row" >
          <div class="col-sm-12 col-md-12 col-lg-12" >
            <img  src="images/ne1.png" alt="NE Logo"  id="ne-logo" />
            <img src="images/Digital_India.png" alt="Digital India" id="Digi_Logo" />
            <img src="images/msde.png" alt="Skill India" id="msde_logo"/>
 <h4 id="logo-text">Government Of India</h4>
         </div>
        </div>
       </div>
      </div>
<!-----------------------------------Navbar starts----------------------------------- -->
      <div class="container" style="width: 100%;">
        <div class="container navbar-container">
         <nav class="navbar navbar-inverse navbar-fixed-top home-navbar" data-spy="scroll" data-target=".navbar">
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
          <ul class="nav navbar-nav navbar-right">
           <li><a href="newLogIn.php" style="color: white;">Update</a></li>
            <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Profile
              <span class="caret"></span></a>
               <ul class="dropdown-menu">
               <li><a href="#" style="color: black;">Login Info</a></li>
               <li><a href="#" style="color: black;">Log Out</a></li>
               <li><a href="#" style="color: black;">Another Login</a></li>
              </ul>
            </li>
          </ul>
        <form class="navbar-form navbar-right" action="search.php" method="post">
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
<!----------------------------------- Navbar endss --------------------------------->
               
                 <!----------------------- Carousal essential---------------------------->
    <div class="row" style="width: 90%;margin-left: 10%;padding: 0%;border: 0%;">
     <div class="col-lg-12 col-md-12 col-sm-12 " style="width: 90%;">
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
    <!----------------------------------- Carousal Ends.. -------------------------->

   <!------------------------------------ Iframe starts... ---------------------------------------->
    <?php include 'iframe_head.html'; ?></br>
     <div class="intrinsic-container intrinsic-container-16x9">
      <iframe id="ifr" src="iframe.php" allowfullscreen></iframe>
       </div>
        </div>
   <!------------------------------------- End iframe..... ---------------------------------------->

   <!------------------------------------- Extra contents for site completion....------------------>

 <!-- <div class="row" id="feedback-row" >
  <div class="col-sm-4 col-md-4" id="brdr1"> 
   <span id="spotlight"><h1>Spotlight</h1>
    <ul>
      <h3>Sector Skill Councils(SSC):</h3>
      <li>A.S.D COUNCIL</li>
      <li style=" margin-bottom: 3%;">H.C.S.S COUNCIL</li>
      <a href="http://www.skilldevelopment.gov.in/ssc.html">View All</a>
    </ul> 
   </span>
   <span id="transparency">
     <h1>Transparency</h1>
 
   <span>
    <a href="https://rtionline.gov.in/"> Right to Information</a>
    <a href="https://data.gov.in/">Open Data</a>
    <a href="https://pgportal.gov.in/cpgoffice/">Public Grievances</a>
   </span>
  </span>
    </div> 
    <div class="col-sm-4 col-md-4" id="brdr2">
      <span id="involve"><h1>Be Involved</h1>
         <h4><i class="fas fa-quote-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let us join this mass movement towards SURAJYA, Realise the hopes and aspirations of people and take India to greater heights!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-quote-right"></i></h4> </span>
     <h4 id="involvebot" style=" margin-bottom: 2vw;"><a href="https://www.mygov.in/mygov-faq/" style="margin-left: 6vw;">My GOV</a></h4>
          <h4 id="involvebot1" ><a href="https://www.india.gov.in/mygov/events/"  style="margin-left: 7vw;">N.P.I</a></h4>
     
    </div>
           <div class="col-sm-4 col-md-4 " id="External-container">
    <span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="feedback-form-page.html" id="contact-us" ><i class="far fa-comment-alt" style=""></i>&nbsp;&nbsp;&nbsp;Feedback and Subscribe!</a><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.html" id="contact-us" ><i class="far fa-comments" style=""></i>&nbsp;&nbsp;&nbsp;Contact Us for Grievances!</a>
    </span><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span id="share-us"><i class="fa fa-share" ></i>&nbsp;&nbsp;&nbsp;Share Us on</span><br>
      <div class="fa-lg">
       <a href="" ><i class="fab fa-facebook-f">&nbsp;&nbsp;&nbsp;facebook</i></a><br>
       <a href="" ><i class="fab fa-twitter ">&nbsp;&nbsp;&nbsp; twitter</i></a><br>
       <a href="" ><i class="fab fa-google-plus-g ">&nbsp;&nbsp; Google</i></a>
      </div>
     <br>
    </div>  
   </div>
  </div>
      -->
  <!------------------------------------------- completed .....---------------------------------------------->
   
  <!------------------------------------------ External Links starts....------------------------------------>
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
  <!------------------------------------------ External Links ends....------------------------------------>

  <!--------------------------------------------Footer starts-------------------------------------------------->
        <div class="row" id="footer-top">
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
        <footer id="footer">   
         <div class="container">
          <div class="row">
           <div class="col-md-12">
            <a href="#header" title="To Top" style="font-size: 20px;">
             <span class="glyphicon glyphicon-chevron-up">&nbsp;GoToTop&nbsp;</span><span class="glyphicon glyphicon-chevron-up"></span>
             
              </a><br><br>
            <p><span> Copyright© 2018, Code Black Team, <a target="_blank" href="#" title="Skill Development Ministry ">&nbsp;&nbsp;Skill Development Ministry 
            </a>
           </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>SEND YOUR FEEDBACK:-&nbsp;&nbsp;#
          </span>
         </p>
        </div>
       </div>
      </footer>
      <!-- ---------------------------footer ends-------------------------------------- -->
      <!-- For smooth scrolling -->
      <script >$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("footer a[href='#header']").on('click', function(event) {
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
})</script>
     </body>
    </html>