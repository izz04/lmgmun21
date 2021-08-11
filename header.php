<!doctype html>
<html>
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>About LMGMUN</title>
        <style>
        .logo{
            height:30px;
            
            align-self:center;
        }
#myVideo {
    background-color: rgba(0,0,0,0.5);
    min-width: 100%;
    min-height: 100%;
    position: fixed;
    overflow-y: hidden;
}
 #myVideo .overlay {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 2;
    background: bl;
    opacity: 0.5;
    overflow-y: hidden;
}
    </style>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <!--  
    Favicons
    =============================================
    -->

    <link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <link href="assets/css/extraaboutstyles.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-2.css">
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div id="bm"> </div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">LMGMUN<span><img src="Untitled-1.svg" class="logo"></span></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="aboutlmgmun.php" data-toggle="dropdown">About</a>
               <ul class="dropdown-menu"  role="menu">
                      <li><a href="aboutlmgmun.php">LMGMUN</a></li>
                      <li><a href="aboutschool.php">School</a></li>
                      <li style="display: none"><a href="aboutthesecretariat.php">The Secretariat</a></li>
                      <li><a href="aboutconferenceschedule.php">Conference Resources</a></li>
                    </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">COMMITTEES</a>
               <ul class="dropdown-menu"  role="menu">
                      <li><a href="c-sochum/sochum.html" target="_blank">UNGA</a></li>
                      <li><a href="c-hrc/hrc.html" target="_blank">UNHRC</a></li>
                      <li><a href="c-unep/unep.html" target="_blank">UNEP</a></li>
                      <li><a href="c-unsc/unsc.html" target="_blank">UNSC</a></li>
                      <li><a href="c-copuos/copuos.html" target="_blank">COPUOS</a></li>
                      <li><a href="c-scc/scc.html" target="_blank">SCC</a></li>
                      <li><a href="c-jcc/jcc.html" target="_blank">JCC</a></li>
                    </ul>
              </li>
              <li><a href="internationalpress.html">International Press</a>
              </li>
              <li><a href="register.html">Register</a>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="media.html" data-toggle="dropdown">Media</a>
                    <ul class="dropdown-menu"  role="menu">
                      <li><a class="section-scroll" href="media.html">Gallery</a></li>
                      <li><a class="section-scroll" href="media.html">Videos</a></li>
                    </ul>
              </li>
              <li><a href="contactus.html">Contact Us</a>
              </li>
              </ul>
          </div>
        </div>
      </nav>
        
      <section class="home-section  home-fade bg-dark-60 agency-page-header" id="home" data-background="assets/images/about_bg.jpg">
      <video autoplay muted loop id="myVideo">
  <source src="video1.mp4" type="video/mp4">
</video>
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1"></div>
           
            <div class="headcon"><?php echo $about_title; ?>
          </div>
         </div>
        </div>
      </section>