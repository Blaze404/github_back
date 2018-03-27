  <meta charset="utf-8">
  <title>JSMaps - Responsive Javascript Maps</title>
  <meta name="description" content="JSMaps - Responsive Javascript Maps - http://jsmaps.io">
  <meta name="author" content="LGLab">

  <!-- Demo scripts -->
  <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet" type="text/css" />

  <style type="text/css">
    html {
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }

    body {
      font-family: 'Droid Sans', sans-serif;
      background:#f2f2f2;
      font-size:14px;
      line-height:21px;
    }

    .container {
      width: 960px;
      margin:20px auto;
    }

    @media only screen and (min-width: 768px) and (max-width: 1000px) {
      .container {
        width: 768px;
      }
    }
    @media only screen and (max-width: 767px) {
      .container {
        width: 420px;
      }
    }
    @media only screen and (max-width: 480px) {
      .container {
        width: 300px;
      }
    }

    a img {
      border:none;
    }

    h1, h2, h3, h4, h5, h6{ 
      font-weight:normal; 
    }
    h1{ 
      font-size:26px; 
      line-height:32px; 
    }
    p, ul{
      margin-bottom:10px;
    }

  </style>
  <!-- End Demo scripts -->

  <!-- Jquery is required, embed on your page if not already - don't embed 2 versions -->
 <!--  <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  
  <link href="jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />
  <script src="jsmaps/jsmaps-libs.js" type="text/javascript"></script>
  <script src="jsmaps/jsmaps-panzoom.js"></script>
  <script src="jsmaps/jsmaps.min.js" type="text/javascript"></script>
  --> <!-- <script >

    <?php include 'maps/india.php'; ?>
  </script> -->
  <!-- End Map scripts -->

</head>

<body>

  <div class="container" style=" position: relative;">

    <!-- Map html - add the below to your page -->
    <div class="jsmaps-wrapper" style="width: 50%; max-height: 40%;" id="india-map"></div>
    <!-- End Map html -->
    <img src="images/map.png" style="position: absolute; bottom: 10px; right: 10px; width:20%;height: 20%;">
  </div>

  <script type="text/javascript">

    $(function() {
      
      $('#india-map').JSMaps({
        map: 'india'
      });

    });
    
  </script>
  
</body>

</html>