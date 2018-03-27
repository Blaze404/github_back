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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
                    <script src='../js/select2.min.js' type='text/javascript'></script>
                    <link href='../css/select2.min.css' rel='stylesheet' type='text/css'>
                  <style>
  body{
    width: 100%;
    margin: 0%;
    padding: 0%; 
    background-color: #fffef9;
  }
/***************************iframe start..***************************/
  .intrinsic-container {
    position: relative;
    height: 0;
    overflow: hidden;
  }
      /* 16x9 Aspect Ratio */
  .intrinsic-container-16x9 {
    padding-bottom: 75%;
  } 
        /* 4x3 Aspect Ratio */
  .intrinsic-container-4x3 {
    padding-bottom: 75%;
  }
  .intrinsic-container iframe {
    position: absolute;
    top:2%;
    left:14%;
    width: 80%;
    height: 100%;
  }
     /***************************iframe ends..***************************/      

     /***************************navbar start..***************************/    
  .search{
    width: 40%;
  }
  /*vaertical navbar*/
  .sidenav {
    height: 100%;
    width: 210px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:#2c53a0;
    border: 2px solid #fff;
    border-top-right-radius: 200px;
    border-bottom-right-radius: 200px;
    transition: 0.5s;
    padding-top: 60px;
   animation:sidenav 5s;
   background-color: 
 
}

.sidenav ul ol{
    margin: 5px 0 5px 0;
    padding: 10px 0 10px 0;
}

    @keyframes sidenav {
       0% {
      opacity: 0;
      transform: translateX(-20px);
         }
   50% {
      opacity: 1;
      transform: translateX(0);
   }
    }
    @media(max-width: 460px){
  #mySidenav{
    display: none;
  }
}
/*=========================================================*/
  /*vertical navbar ends*/
   #maincontainer{
    width: 100%;
    margin: 0%;
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 1%;
    min-height: 150px;
    background-color: #fffef9;
 }
  #maincontainer nav{
    background-color: #fffef9;
    border: none;
  }
#myNavbar ul li a :hover{
  text-shadow: 0 0 10px skyblue, 0 0 15px skyblue;
}

  .home-navbar{
   background-color: #2c53a0;
    margin-bottom: 0px;
    padding-bottom: 0px;
    margin-right: 8%; 
  }

#maincontainer ul li a i:hover {
      animation:a 1s;
    }
    @keyframes a {
      0% {
        transform:scale(1);
      }
      90% {
        transform:scale(1.2);
      }
    }

/*stickey container right ends*/

    /************************************ navbar ends..***************************************/

#drpbtns{
  color: #fff;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}




/***************************External links and images at bottom start.***************************/
  #external-links-wrapper {
    width: 100%;
    text-align: center;
    background-color: #eceff1;
  }
  #external-links-wrapper ul li {
    margin-left: 2%;
    margin right: 2%;
  }
      /***************************External links and images at bottom end.***************************/
@media(max-width: 468px){
  #myCarousel{
    display: none;
  }
}
@media(max-width: 1420px){
  #myNavbar ul li i{
    display: none;
  }
  #myNavbar ul li a{
    padding-top: 50px;
  }
 
}
@media(max-width: 1520px){
   #mySidenav{
visibility: hidden;
 }
 #advancedsearch{
  visibility: visible;
 }
}
    /***************************Footer start..***************************/
  #footer-top{
    width: 100vw;
    background-color: darkgrey; 
    text-align: center;
  }
  #footer-top li a{
    margin-top: 20%;
    color: white;
  }
  #footer {
    padding:50px;
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
/***************************Footer ends..***************************/
 </style>
 </head>
 <body>
     <!-- main navbar starts -->
<div class="container" id="maincontainer" >  
<nav class="navbar navbar-inverse navmain" );
">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#" id="mainbrand">
      <img src="images/ne1.png" style="display: inline-block;background-position: initial; width: 120px;">
            <span style="display: inline-block; font-size: 2vw;color: #2c53a0;font-weight: 700">Mininstry of Skill Development <h5>Government Of India</h5></span>
      </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: #2c53a0;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse nav navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"><i class="fas fa-comments" style="font-size: 3em; border: 6px solid #2c53a0; border-radius: 50px;padding: 9px;color: #2c53a0;margin-right: 30px;"></i></a>
          <a href="#" style="padding-top: 0;padding-left: 35px; color: #2c53a0;">Topics</a></li>




         <li><a href="http://www.nationalskillsnetwork.in/sector-skill-councils/"><i class="fas fa-cog" style="font-size: 3em; border: 6px solid #2c53a0; border-radius: 50px;padding: 9px;color: #2c53a0;margin-right: 30px;"></i></a>
          <a href="http://www.nationalskillsnetwork.in/sector-skill-councils/" style="padding-top: 0;padding-left: 10px;color: #2c53a0;">Skill Councils</a></li>


         <li><a href="#"><i class="fas fa-flag" style="font-size: 3em; border: 6px solid #2c53a0; border-radius: 50px;padding: 9px;color:#2c53a0;margin-right: 30px;"></i></a>
          <a href="#" style="padding-top: 0;padding-left: 35px;color: #2c53a0;">My Government</a></li>

<!-- 
         <a href="#"><i class="fas fa-handshake" style="font-size: 3em; border: 6px solid #2c53a0; border-radius: 50px;padding: 9px;color:#2c53a0;margin-right: 30px;"></i></a>
          <a href="#" style="padding-top: 0;padding-left: 35px;color: #2c53a0;">Know India</a></li> -->

        <li class="dropdown">
          <a href="#"><i class="fas fa-handshake" style="font-size: 3em; border: 6px solid #2c53a0; border-radius: 50px;padding: 9px;color:#2c53a0;margin-right: 30px;"></i></a>
          <a href="#" style="padding-top: 0;padding-left: 35px;color: #2c53a0;">Know India</a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
</div>
</div>
</div>

<!-- main navbar ends -->
<!-----------------------------------Button bar----------------------------------- -->
      <div class="container" style="width: 100%; margin-left: 0%;padding: 0% 0% 0% 0%;border: 0;">
         <nav class="navbar navbar-inverse home-navbar" data-spy="scroll" data-target=".navbar" style="width: 100%; border: 0;border-radius: 0px;">
           <div class="navbar-header">
            <button type="button" id="toggle_button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
             <div id="toggle_front">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
             </div>
            </button>
          </div>
     
         <div class="collapse navbar-collapse" id="mainNavBar">
               <ul class="nav navbar-nav" style="color: #fff;">
           <li style="margin: 0px 0px 0px 100px;"><a href="#ifr" style="background-color:#2c53a0; ">Crime</a></li>
           <li style="margin: 0px 0px 0px 30px"><a href="#ifr" style="background-color:#2c53a0; ">Empowerment</a></li>
           <li style="margin: 0px 0px 0px 30px"><a href="#ifr" style="background-color:#2c53a0; ">Production</a></li>
           <li style="margin: 0px 0px 0px 30px"><a href="#ifr" style="background-color:#2c53a0; ">Smart</a></li>
           <li style="margin: 0px 0px 0px 30px"><a href="#ifr" style="background-color:#2c53a0; ">Skilled</a></li>

    </ul>
          <ul class="nav navbar-nav navbar-right">
           <li><a href="newLogIn.php" style="color: white;">Update</a></li>
            <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;margin: 0px 100px 0px 0px;">Profile
              <span class="caret"></span></a>
               <ul class="dropdown-menu">
               <li><a href="#" style="color: black;">Login Info</a></li>
               <li><a href="#" style="color: black;">Log Out</a></li>
               <li><a href="#" style="color: black;">Another Login</a></li>
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
      </nav>
   </div>
<!----------------------------------- Button bar endss --------------------------------->
               
                 <!----------------------- Carousal essential---------------------------->
    <div class="row" style="width: 100%;margin-left: 0%;padding: 0%;border: 0%;">
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
    <!----------------------------------- Carousal Ends.. -------------------------->
    <!-- advanced search -->
  
 <div style="width: 80%; margin-left: 12%;padding: 0% 0% 0% 0%;border: 0; visibility: hidden;">
         <nav class="navbar navbar-inverse" id="advancedsearch" data-spy="scroll" data-target=".navbar" style="width: 95%;border-radius: 5px;background-color:#2c53a0;">
           <div class="navbar-header"><h3 style="margin:10px 30px 0px 30px; color: white;">Advanced search</h3>
            <button type="button" id="toggle_button" class="navbar-toggle" data-toggle="collapse" data-target="#searchBar">
             <div id="toggle_front">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
             </div>
            </button>
          </div>
     
         <div class="collapse navbar-collapse" id="searchBar">
               <ul class="nav navbar-nav" id="drpbtns">
           <li class="dropdown">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin: 6px 0px 0px 10px;">Select Objective
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu">
                      <a class="test" href="#">Crime <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a class="crime" id="murder" href="#ifr">Murder</a></li>
                        <li><a class="crime" id="dacoity" href="#ifr">Dacoity</a></li>
                        <li><a class="crime" id="arson" href="#ifr">Arson</a></li>
                        <li><a class="crime" id="rape" href="#ifr">Rape</a></li>
                        <li><a class="crime" id="dowry" href="#ifr">Dowry</a></li>
                        <li><a class="crime" id="robbery" href="#ifr">Robbery</a></li>
                        <li><a class="crime" id="kidnapping" href="#ifr">Kidnapping</a></li>
                        <li><a class="crime" id="riots" href="#ifr">Riots</a></li>                        
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a class="test" href="#">Agriculture <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a class="agrii" id="drought" href="#ifr">Drought Analysis</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Suicide<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                            <li><a class="agrii" id="state" href="#ifr">Farmers</a></li>
                            <li><a class="agrii" id="state" href="#ifr">Workers</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Season<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a class="agrii" id="production_kharif" href="#ifr">Kharif</a></li>
                            <li><a class="agrii" id="production_rabi" href="#ifr">Rabi</a></li>
                            <li><a class="agrii" id="production_whole" href="#ifr">Full year</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="test" href="#">Unemployment<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#ifr">2nd level dropdown</a></li>
                        <li><a href="#ifr">2nd level dropdown</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#ifr">3rd level dropdown</a></li>
                            <li><a href="#ifr">3rd level dropdown</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="test" href="#ifr">Smart</a></li>
                    <li class="dropdown-submenu"><a class="test" href="#ifr">Skilled</a></li>

                  </ul>
                </div>
       </li><!-- select objective button ^^^^^ -->
           <li class="dropdown">
                     <div style="color: black;">
                          <select id='selUser1' style='width: 140px; padding: 7px 10px 7px 10px;border-radius: 5px;margin:6px 0px 0px 10px; '>
                              <option value='AURANGABAD'>City</option> 
                              <option value='AUTRANGABAD'>Aurangabad</option> 
                              <option value='CHENNAI'>Chennai</option> 
                              <option value='PATNA'>Patna</option> 
                              <option value='ALIGARH'>Aligarh</option> 
                              <option value='HYDERABAD'>Hyderabad</option> 
                              <option value='INDORE'>Indore</option> 
                              <option value='NANDED'>Nanded</option>
                              <option value='FATEHPUR'>Fatehpur</option> 
                            </select>
                             <input type='button' value='Go' id='but_read1'>
                            <br/>
                            <div id='result'></div>
                      </div>
       </li>
           <li class="dropdown">
           
           </li>
        </ul>
        </div>
      </nav>
      </div>
      <script>
    $(document).ready(function(){
          $('.agrii').click(function(e){
            e.preventDefault();
            var agri_id = $(this).attr('id');

            if (agri_id == 'drought'){
              var iframe = document.getElementById('ifr');
              console.log("iframe.php?table=drought_analysis&database=farmers_sih&third=damage");
              iframe.src =  "iframe.php?table=drought_analysis&database=farmers_sih&third=damage";
            }
            else if( agri_id.split("_")[0] == 'production' ){
              var table_name = "farmers_production_" + agri_id.split("_")[1] ;
              var iframe = document.getElementById('ifr');
              iframe.src =  "iframe.php?table=" + table_name + "&database=farmers_sih&third=prevprod";  
            }

          });

             // Initialize select2
            $("#selUser1").select2();
           
            var city = '';

            var id = "murder";

            $('.crime').click(function(e){
              e.preventDefault();
              city = $('#selUser1 option:selected').text().toUpperCase();
              
              id = $(this).attr('id');
            
              var iframe = document.getElementById('ifr');
              iframe.src =  "iframe.php?table=" + id + "&city=" + city + "&database=crime_avg";
                  
            });

            // Read selected option
            $('#but_read1').click(function(){  
                city = $('#selUser option:selected').text().toUpperCase();
              console.log("but read click hua");
                var iframe = document.getElementById('ifr');
              iframe.src =  "iframe.php?table=" + id + "&city=" + city  + "&database=crime_avg" ;
              console.log("iframe.php?table=" + id + "&city=" + city  + "&database=crime_avg" );

            });
          });

</script>
          <!-- advanced search -->
              <!-- vertical navbar -->
              <div id="mySidenav" class="sidenav">
          <a href="#">
                <img src="images/ne1.png" style="width: 120px;margin-left: 25px;"><br>
                <span style=" font-size: 20px;color: #fff; margin-left: 15px;">Advanced Search</span>
                </a>
          <ul>   
               <div>
               <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin: 50px 0px 0px -25px;">Select Objective
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu">
                      <a class="test" href="#">Crime <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a class="crime" id="murder" href="#ifr">Murder</a></li>
                        <li><a class="crime" id="dacoity" href="#ifr">Dacoity</a></li>
                        <li><a class="crime" id="arson" href="#ifr">Arson</a></li>
                        <li><a class="crime" id="rape" href="#ifr">Rape</a></li>
                        <li><a class="crime" id="dowry" href="#ifr">Dowry</a></li>
                        <li><a class="crime" id="robbery" href="#ifr">Robbery</a></li>
                        <li><a class="crime" id="kidnapping" href="#ifr">Kidnapping</a></li>
                        <li><a class="crime" id="riots" href="#ifr">Riots</a></li>                        
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a class="test" href="#">Agriculture <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a class="agri" id="drought" href="#ifr">Drought Analysis</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Suicide<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                            <li><a class="agri" id="state" href="#ifr">Farmers</a></li>
                            <li><a class="agri" id="state" href="#ifr">Workers</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Season<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a class="agri" id="production_kharif" href="#ifr">Kharif</a></li>
                            <li><a class="agri" id="production_rabi" href="#ifr">Rabi</a></li>
                            <li><a class="agri" id="production_whole" href="#ifr">Full year</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="test" href="#">Unemployment<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#ifr">2nd level dropdown</a></li>
                        <li><a href="#ifr">2nd level dropdown</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#ifr">3rd level dropdown</a></li>
                            <li><a href="#ifr">3rd level dropdown</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                     <li><a class="test" href="#ifr">Smart</a></li>
                    <li><a class="test" href="#ifr">Skilled</a></li>

                  </ul>
                </div>

               </div>
                      <div>
                          <select id='selUser' style='width: 140px; padding: 7px 10px 7px 10px;border-radius: 5px;margin:15px 0px 0px -25px; '>
                              <option value='AURANGABAD'>City</option> 
                              <option value='AUTRANGABAD'>Aurangabad</option> 
                              <option value='CHENNAI'>Chennai</option> 
                              <option value='PATNA'>Patna</option> 
                              <option value='ALIGARH'>Aligarh</option> 
                              <option value='HYDERABAD'>Hyderabad</option> 
                              <option value='INDORE'>Indore</option> 
                              <option value='NANDED'>Nanded</option>
                              <option value='FATEHPUR'>Fatehpur</option> 
                               <input type='button' value='Go' id='but_read' style="margin-left: 5px;">
                            </select>
                            <br/>
                            <div id='result'></div>
                      </div>
                </ul>
        </div>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

<script>
    $(document).ready(function(){
          $('.agri').click(function(e){
            e.preventDefault();
            var agri_id = $(this).attr('id');

            if (agri_id == 'drought'){
              var iframe = document.getElementById('ifr');
              console.log("iframe.php?table=drought_analysis&database=farmers_sih&third=damage");
              iframe.src =  "iframe.php?table=drought_analysis&database=farmers_sih&third=damage";
            }
            else if( agri_id.split("_")[0] == 'production' ){
              var table_name = "farmers_production_" + agri_id.split("_")[1] ;
              var iframe = document.getElementById('ifr');
              iframe.src =  "iframe.php?table=" + table_name + "&database=farmers_sih&third=prevprod";  
            }

          });

             // Initialize select2
            $("#selUser").select2();
           
            var city = '';

            var id = "murder";

            $('.crime').click(function(e){
              e.preventDefault();
              city = $('#selUser option:selected').text().toUpperCase();
              
              id = $(this).attr('id');
            
              var iframe = document.getElementById('ifr');
              iframe.src =  "iframe.php?table=" + id + "&city=" + city + "&database=crime_avg";
                  
            });

            // Read selected option
            $('#but_read').click(function(){  
                city = $('#selUser option:selected').text().toUpperCase();
              console.log("but read click hua");
                var iframe = document.getElementById('ifr');
              iframe.src =  "iframe.php?table=" + id + "&city=" + city  + "&database=crime_avg" ;
              console.log("iframe.php?table=" + id + "&city=" + city  + "&database=crime_avg" );

            });
          });

</script>       
<!-- vertical navbar ends -->


   <!------------------------------------ Iframe starts... ---------------------------------------->
     <div class="intrinsic-container intrinsic-container-16x9">
      <iframe id="ifr" src="iframe.php" allowfullscreen style="border:none; "></iframe>
       </div>
   <!------------------------------------- End iframe..... ---------------------------------------->
   
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
       <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footerbar" style="align-self: center;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src=""></a>
    </div>
    <div class="collapse navbar-collapse" id="footerbar">
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
            <a href="#maincontainer" title="To Top" style="font-size: 20px;">
             <span class="glyphicon glyphicon-chevron-up">&nbsp;GoToTop&nbsp;</span><span class="glyphicon glyphicon-chevron-up"></span>
             
              </a><br><br>
            <p><span> Copyright© 2018, Code Black Team, <a target="_blank" href="#" title="Skill Development Ministry ">&nbsp;&nbsp;Skill Development Ministry 
            </a>
         
         </p>
        </div>
       </div>
      </footer>
      <!-- ---------------------------footer ends-------------------------------------- -->
      <!-- For smooth scrolling -->
      <script >$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a[href='#ifr'],footer a[href='#maincontainer']").on('click', function(event) {
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

<script >
myID = document.getElementById("mySidenav");

var myScrollFunc = function() {
  var y = window.scrollY;
  if (y >= 500) {
    myID.className = "sidenav show"
  } else {
    myID.className = "sidenav hide"
  }
};

window.addEventListener("scroll", myScrollFunc);
</script>

<script >
  $(document).ready(function() {
  $("html,body").animate({scrollTop: 10}, 1000); //100ms for example
});
</script>
     </body>
    </html>