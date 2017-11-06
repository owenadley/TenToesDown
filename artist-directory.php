
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TenToesDown is a collective of young canadian artists expressing their life experiences through different media, and showcasing the talent they discover along the way.">
    <meta name="author" content="@owenadley">
    <meta name="keywords"content="TenToesDown Collective Canadian Art Music Photography Video Film Artist Promotion University Student Entertainment Visual Arts Ryerson University RU uOttawa University of Ottawa Concordia University University of Toronto U of T UofT Media Experience Brand Management Business Operations Talent Recruitment Event Planning Editor Student Work">
    <meta name="google-signin-client_id" content="718229412055-grl4d0ad7ham65bt5qoruis8k8tj4pt3.apps.googleusercontent.com">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<link href="../css/myCSS.css" rel="stylesheet" type="text/css">
    <link rel="Stylesheet" type="text/css" href="../css/smoothDivScroll.css" />
    <link rel='shortcut icon' type='image/x-icon' href='../img/favicon.ico' />
    <link rel='mask-icon' href='../img/logo.svg' color='orange'>
    <script src="../js/new1.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link href="../css/hover.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="../js/instafeed.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Chivo|Fira+Sans+Condensed|Hind|Magra|Oswald|Palanquin+Dark|Permanent+Marker|Roboto|Roboto+Condensed|Sintony|Slabo+27px|Titillium+Web|Viga" rel="stylesheet">

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="myNav" role="navigation">
      <div style="padding-left:50px;padding-right:50px;padding-top:5px;padding-bottom:5px;">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">

              <button style="padding-top:30px;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <a href="index.php"><h1 id="head">TenToesDown</h1></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right" id="rightnav">
                <li style="padding-right:20px;"> <a href="events.php">Events</a></li>
                <li style="padding-right:20px;"><a href="artist-directory.php">Directory</a></li> 


               </ul>
                </div>

        </div>
     </nav>
   <?php
           session_start();
           if (isset($_SESSION['user_name_on'])){
             echo "<script type='text/javascript'>document.getElementById('signin-acc').style.display='none';
                           document.getElementById('signedin-acc').style.display='inline-block';</script>";
           }
           if (!isset($_SESSION['user_name_on'])){
             echo "<script type='text/javascript'>document.getElementById('signin-acc').style.display='inline-block';
                                                  document.getElementById('signedin-acc').style.display='none';</script>";
           }
 ?>

   <div id="myLoginBox">
     <div id="overlay-back"></div>
     <div class="mysignin">
       <div class="row">
         <div class="col-md-6" style="padding:0px;">
           <a class="title-a" onclick="showsignin();">
           <div class="loginbox-signin signin-topoptions">
             <p>Login</p>
           </div>
         </a>
         </div>
         <div class="col-md-6" style="padding:0px;">
           <a class="title-a" onclick="showregister();">
           <div class="loginbox-register signin-topoptions">
             <p>Register</p>
           </div>
         </a>
         </div>
       </div>
       <hr>
       <div class="myLoginBox-content">
         <div id="myBox-activelogin">
           <form class="customform" action="sign-in.php" method="POST">
             <p>Username</p>
             <input align="middle" type="text" name="enter_username" class="form-control" id="exampleInputEmail2" placeholder="Username" required><br>
             <p>Password<p>
             <input align="middle" type="password" name="enter_password" class="form-control" id="exampleInputPassword2" placeholder="Password" required><br>
             <button type="Submit" class="btn btn-success btn-block">Sign in</button>
           </form>

         </div>
         <div id="myBox-activeregister">
           <form class="customform" action="register.php" method="POST">
             <p>Username *</p>
             <input align="middle" type="text" name="new_username" class="form-control" id="exampleInputEmail2" placeholder="Username" required><br>
             <p>Email *</p>
             <input align="middle" type="text" name="new_email" class="form-control" id="exampleInputPassword2" placeholder="Email" required><br>
             <p>Password *</p>
             <input align="middle" type="password" name="new_password" class="form-control" id="exampleInputPassword2" placeholder="Password" required><br>
             <p>Confirm Password *</p>
             <input align="middle" type="password" name="new_password1" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" required><br>
             <button type="Submit" class="btn btn-success btn-block">Register</button>
           </form>
         </div>
       </div>
     </div>
   </div>

    <!-- Header Carousel -->
    <br>
    <br>

    <div class="container">
            <!-- Page Header -->

        <!-- /.row -->
    <div class-"space-break2"></div>    <div class-"space-break2"></div>    <div class-"space-break2">&nbsp;</div> <br><br><div class-"space-break2"></div>
        <div class="artistselect">
          <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-4">
              <div class="music">
                <div class="musicgenre" type="button" onclick="showAllArtists();">All</div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <div class="photography">
                <div class="musicgenre" type="button" onclick="filterPhotographyArtists();filterFilmArtists();filterAllArtists();filterGraphicArtists();filterFashionArtists();showMusicArtists();">Music</div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <div class="film">
                <div class="musicgenre" type="button" onclick="filterFilmArtists();filterMusicArtists();filterAllArtists();filterGraphicArtists();filterFashionArtists();showPhotographyArtists();">Photography</div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <div class="music">
                <div class="musicgenre" type="button" onclick="filterPhotographyArtists();filterGraphicArtists();filterAllArtists();filterMusicArtists();filterFashionArtists();showFilmArtists();">Film</div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <div class="music">
                <div class="musicgenre" type="button" onclick="filterPhotographyArtists();filterFilmArtists();filterAllArtists();filterFashionArtists();filterMusicArtists();showGraphicArtists();">Graphic Art</div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <div class="musicgenre" type="button" onclick="filterPhotographyArtists();filterFilmArtists();filterMusicArtists();filterGraphicArtists();filterAllArtists();showFashionArtists();">Fashion</div>
            </div>
          </div>
        </div>
        <hr>

  <!-- DESKTOP LAYOUT -->
  <div id="DesktopLayout">
        <div class="col-sm-6 col-md-4 col-lg-4 graphicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt="TenToesDown Canadian music artist Yung Tuna" class="img-circle img-responsive" src="../img/artists/graphic/olivia.png">
                  <div id="recentwork"><p><a href="artist-oliviab.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Olivia B.</h3></strong>Visual Arts | Toronto, ON<br>safeashousescanada@gmail.com</strong></p>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt="TenToesDown Canadian music artist Yung Tuna" class="img-circle img-responsive" src="../img/artists/music/yungtuna.png">
                  <div id="recentwork"><p><a href="artist-yungtuna.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Yung Tuna</h3></strong>Rap | Toronto, ON<br>safeashousescanada@gmail.com</strong></p>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt="TenToesDown Canadian music artist Safe As Houses" class="img-circle img-responsive" src="../img/artists/music/safeashouses.png">
                  <div id="recentwork"><p><a href="artist-safeashouses.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Safe As Houses</h3></strong>Alternate/ Folk | Waterloo, ON<br>safeashousescanada@gmail.com</strong></p>
            </div>
        </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
              <div id="artist1">
                <div class="arthov">
                  <img alt="TenToesDown Canadian music artist NikoLang" class="img-circle img-responsive" src="../img/artists/music/niko.jpg">
                    <div id="recentwork"><p><a href="artist-nicolang.html">View Artist</a><p></div>
                </div>
                  <p><strong><h3>Niko Lang</h3></strong>Rap | Ottawa, ON<br>tentoesdownco@gmail.com</strong></p>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt="TenToesDown Canadian music artist NightLovell" class="img-circle img-responsive" src="../img/artists/music/nightLovell.jpg" />
                <div id="recentwork"><p><a href="artist-nightlovell.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Night Lovell</h3></strong>Rap | Ottawa, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt ="TenToesDown Canadian music artist Overlapse" class="img-circle img-responsive" src="../img/artists/music/Overlapse.png">
                <div id="recentwork"><p><a href="artist-overlapse.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Overlapse</h3></strong>Alternative R&B | Toronto, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt ="TenToesDown Canadian music artist RBLx" class="img-circle img-responsive" src="../img/artists/music/RBLx.png">
                <div id="recentwork"><p><a href="artist-RBLx.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>RBLx (The Valley)</h3></strong>Rap | Ottawa, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt ="TenToesDown Canadian music artist Lexxicon" class="img-circle img-responsive" src="../img/artists/music/Lexxicon.png">
                <div id="recentwork"><p><a href="artist-lexxicon.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Lexxicon</h3></strong>R&B | Toronto, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt ="TenToesDown Canadian music artist Lofsky" class="img-circle img-responsive" src="../img/artists/music/lofsky.png">
                <div id="recentwork"><p><a href="artist-lofsky.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Lofsky</h3></strong>Rap | Toronto, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt ="TenToesDown Canadian music artist Redcouchboyz" class="img-circle img-responsive" src="../img/artists/music/redcouchboyz.png">
                <div id="recentwork"><p><a href="artist-redcouchboyz.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>REDCOUCHBOYZ</h3></strong>Rap | Ottawa, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt ="TenToesDown Canadian music artist Tauras Zenkevicius" class="img-circle img-responsive" src="../img/artists/music/TaurasZenkevicius.png">
                <div id="recentwork"><p><a href="artist-taurasz.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Tauras Zenkevicius</h3></strong>Indie, Alternative Rock | Mississauga, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 musicartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt="TenToesDown Canadian music artist Niko" class="img-circle img-responsive" src="../img/artists/music/niko-2.png">
                <div id="recentwork"><p><a href="artist-niko.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Niko</h3></strong>Rap | Ottawa, ON<br>nuwh.youngm@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 photographyartist allartist">
              <div id="artist1">
                <div class="arthov">
                  <img alt="TenToesDown Canadian photography artist Emily Dozois" class="img-circle img-responsive" src="../img/artists/photography/emily.jpg">
                    <div id="recentwork"><p><a href="artist-emilyd.html">View Artist</a><p></div>
                </div>
                  <p><strong><h3>Emily Dozois</h3></strong>Ottawa, ON<br>tentoesdownco@gmail.com</strong></p>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filmartist photographyartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt="TenToesDown Canadian photography artist film artist Will Snyderj" class="img-circle img-responsive" src="../img/artists/photography/will.png" />
                <div id="recentwork"><p><a href="artist-willsnyder.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Will Snyder</h3></strong>Ottawa, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 photographyartist allartist">
            <div id="artist1">
              <div class="arthov">
                <img alt ="TenToesDown Canadian photography artist Jackson Adley" class="img-circle img-responsive" src="../img/artists/photography/jackson.png">
                <div id="recentwork"><p><a href="artist-jacksonadley.html">View Artist</a><p></div>
              </div>
                <p><strong><h3>Jackson Adley</h3></strong>Toronto/ Mississauga, ON<br>tentoesdownco@gmail.com</strong></p>
            </div>
          </div>
      </div>

      <!-- MobileLAyouy -->
    <div id="MobileLayout">

      <div class="col-sm-12 col-xs-12 photographyartist filmartist allartist">
        <div class="artmobile1">
           <div class="row">
              <div class="col-sm-4 col-xs-4" style="padding:none;">
                <img src="../img/artists/photography/will-sm.png">
             </div>
             <div class="col-sm-8 col-xs-8">
                <p><span style="font-size:22px;"><strong>Will Snyder</strong></span><br>
                <strong>Film / Photography</strong><br>
                Ottawa, ON<br>
                <a href="artist-willsnyder.html">View Profile..</a></p>
             </div>
           </div>
       </div>
        <div class="clearfix" style="padding:20px;"></div>
      </div>



      <div class="col-sm-12 col-xs-12 musicartist allartist">
        <div class="artmobile1">
           <div class="row">
              <div class="col-xs-4" style="padding:none;">
                <img src="../img/artists/music/lofsky-sm.png">
             </div>
             <div class="col-xs-8">
                <p><span style="font-size:22px;"><strong>Lofsky</strong></span><br>
                <strong>Music - Rap</strong><br>
                Newmarket, ON<br>
                <a href="artist-lofsky.html">View Profile..</a></p>
             </div>
           </div>
       </div>
              <div class="clearfix" style="padding:20px;"></div>
      </div>


       <div class="col-sm-12 col-xs-12 musicartist allartist">
         <div class="artmobile1">

            <div class="row">
               <div class="col-xs-4" style="padding:none;">
                 <img src="../img/artists/music/yungtuna-sm.png">
              </div>
              <div class="col-xs-7">
                 <p><span style="font-size:22px;"><strong>Yung Tuna</strong></span><br>
                 <strong>Music - Rap</strong><br>
                 Toronto, ON<br>
                 <a href="artist-yungtuna.html">View Profile..</a></p>
              </div>
            </div>
        </div>
             <div class="clearfix" style="padding:20px;"></div>
     </div>




     <div class="col-sm-12 col-xs-12 graphicartist allartist">
       <div class="artmobile1">
          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/graphic/olivia-sm.png">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Olivia B.</strong></span><br>
               <strong>Visual Arts</strong><br>
               Toronto, ON<br>
               <a href="artist-oliviab.html">View Profile..</a></p>
            </div>
          </div>
      </div>
           <div class="clearfix" style="padding:20px;"></div>
     </div>



     <div class="col-sm-12 col-xs-12 musicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/music/safeashouses-sm.png">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Safe As Houses</strong></span><br>
               <strong>Music - Alternative/ Folk</strong><br>
               Waterloo, ON<br>
               <a href="artist-safeashouses.html">View Profile..</a></p>
            </div>
          </div>
      </div>
           <div class="clearfix" style="padding:20px;"></div>
     </div>



     <div class="col-sm-12 col-xs-12 graphicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/photography/jackson-sm.png">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Jackson Adley</strong></span><br>
               <strong>Photography</strong><br>
               Toronto, ON<br>
               <a href="artist-jacksonadley.html">View Profile..</a></p>
            </div>
          </div>
      </div>
           <div class="clearfix" style="padding:20px;"></div>
     </div>





     <div class="col-sm-12 col-xs-12 musicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/music/nico-sm.jpg">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Nico Lang</strong></span><br>
               <strong>Music - Rap</strong><br>
               Ottawa, ON<br>
               <a href="artist-nicolang.html">View Profile..</a></p>
            </div>
          </div>
      </div>
           <div class="clearfix" style="padding:20px;"></div>
     </div>

     <div class="col-sm-12 col-xs-12 musicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/music/nightLovell-sm.jpg">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Night Lovell</strong></span><br>
               <strong>Music - Rap</strong><br>
               Ottawa, ON<br>
               <a href="artist-nightlovell.html">View Profile..</a></p>
            </div>
          </div>
      </div>
           <div class="clearfix" style="padding:20px;"></div>
     </div>

     <div class="col-sm-12 col-xs-12 musicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/photography/emily-sm.jpg">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Emily Dozois</strong></span><br>
               <strong>Photography</strong><br>
               Ottawa, ON<br>
               <a href="artist-emilyd.html">View Profile..</a></p>
            </div>
          </div>
      </div>
      <div class="clearfix" style="padding:20px;"></div>
     </div>


     <div class="col-sm-12 col-xs-12 musicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/music/Overlapse-sm.png">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Overlapse</strong></span><br>
               <strong>Music - Alternative/ R&B</strong><br>
               Toronto, ON<br>
               <a href="artist-overlapse.html">View Profile..</a></p>
            </div>
          </div>
      </div>
           <div class="clearfix" style="padding:20px;"></div>
     </div>



     <div class="col-sm-12 col-xs-12 musicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/music/RBLx-sm.png">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>RBLx</strong></span><br>
               <strong>Music - Rap</strong><br>
               Ottawa, ON<br>
               <a href="artist-RBLx.html">View Profile..</a></p>
            </div>
          </div>

      </div>
      <div class="clearfix" style="padding:20px;"></div>
     </div>



     <div class="col-sm-12 col-xs-12 musicartist allartist">
       <div class="artmobile1">

          <div class="row">
             <div class="col-xs-4" style="padding:none;">
               <img src="../img/artists/music/Lexxicon-sm.png">
            </div>
            <div class="col-xs-8">
               <p><span style="font-size:22px;"><strong>Lexxicon</strong></span><br>
               <strong>Music - Hip-Hop / R&B</strong><br>
               Toronto, ON<br>
               <a href="artist-lexxicon.html">View Profile..</a></p>
            </div>
          </div>
      </div>
      <div class="clearfix" style="padding:20px;"></div>
     </div>



<div class="col-sm-12 col-xs-12 musicartist allartist">
  <div class="artmobile1">

     <div class="row">
        <div class="col-xs-4" style="padding:none;">
          <img src="../img/artists/music/redcouchboyz-sm.png">
       </div>
       <div class="col-xs-8">
          <p><span style="font-size:22px;"><strong>RedCouchBoyz</strong></span><br>
          <strong>Music - Rap</strong><br>
          Ottawa, ON<br>
          <a href="artist-redcouchboyz.html">View Profile..</a></p>
       </div>
     </div>
 </div>
  <div class="clearfix" style="padding:20px;"></div>
</div>



 <div class="col-sm-12 col-xs-12 musicartist allartist">
   <div class="artmobile1">

      <div class="row">
         <div class="col-xs-4" style="padding:none;">
           <img src="../img/artists/music/TaurasZenkevicius-sm.png">
        </div>
        <div class="col-xs-8">
           <p><span style="font-size:22px;"><strong>Tauras Zenkevivius</strong></span><br>
           <strong>Music - Alternative Rock</strong><br>
           Mississauga, ON<br>
           <a href="artist-taurasz.html">View Profile..</a></p>
        </div>
      </div>
  </div>
   <div class="clearfix" style="padding:20px;"></div>
 </div>



  <div class="col-sm-12 col-xs-12 musicartist allartist">
    <div class="artmobile1">

       <div class="row">
          <div class="col-xs-4" style="padding:none;">
            <img src="../img/artists/music/niko-2-sm.png">
         </div>
         <div class="col-xs-8">
            <p><span style="font-size:22px;"><strong>Niko/Nuwh Chariffe</strong></span><br>
            <strong>Music - Rap</strong><br>
            Ottawa, ON<br>
            <a href="artist-niko.html">View Profile..</a></p>
         </div>
       </div>

   </div>
    <div class="clearfix" style="padding:20px;"></div>
  </div>







      </div>
  </div>
</div>

  <hr>

      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <strong>Follow Us</strong></br>
                    <br>
                    <ul class="list-inline social-buttons">
                        <li><a href="http://www.twitter.com"><i class="fa fa-2x fa-twitter"></i></a></li>
                        <li><a href="http://www.instagram.com/"><i class="fa fa-2x fa-instagram"></i></a></li>
                        <li><a href="http://www.soundcloud.com/by-us-for-you"<i class="fa fa-2x fa-soundcloud"></a></li>
                        <li><a href="http://www.soundcloud.com/by-us-for-you"<i class="fa fa-2x fa-tumblr"></a></li>
                    </ul>
                    <p>
                    <div style="text-align:left" id="cards">
                        <i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-cc-amex fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-cc-stripe fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                    </div>
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" id="sidewall">
                    <strong>Company</strong></br>
                    <br>
                    <a href="help.html">About</a><br>
                    <a href="contact.html">Contact</a><br>
                    <a href="newsletter.html">Newsletter</a><br>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" id="sidewall">
                    <strong>More Info</strong></br>
                    <br>
                    <a href="help.html">Help</a><br>
                    <a href="terms.html">Terms</a><br>
                    <a href="privacy.html">Privacy</a><br>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12" id="sidewall">
                    <div class="pull-left">
                        Copyright <i class="fa fa-copyright" aria-hidden="true"></i> TTD // TenToesDown 2016<br>
                        Ottawa, Canada<br>
                        <br>
                        Made with <i class="fa fa-heart"></i>.
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->


    <script>
    $('.carousel').carousel({
        interval: 2500 //changes the speed
    })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="../js/jquery.kinetic.min.js" type="text/javascript"></script>
    <script src="../js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="../js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
        <script src="../js/index.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#logoParade").smoothDivScroll({
                autoScrollingMode: "always",
                autoScrollingDirection: "endlessLoopRight",
                autoScrollingStep: 1,
                autoScrollingInterval: 25
            });

            // Logo parade
            $("#logoParade").bind("mouseover", function () {
                $(this).smoothDivScroll("stopAutoScrolling");
            }).bind("mouseout", function () {
                $(this).smoothDivScroll("startAutoScrolling");
            });
        });
    </script>

    <script>
    function showMusicArtists() {
      var appBanners = document.getElementsByClassName('musicartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'inline';
      }
    }
    </script>

    <script>
    function showPhotographyArtists() {
      var appBanners = document.getElementsByClassName('photographyartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'inline-block';
      }
    }
    </script>

    <script>
    function showFilmArtists() {
      var appBanners = document.getElementsByClassName('filmartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'inline-block';
      }
    }
    </script>

    <script>
    function showGraphicArtists() {
      var appBanners = document.getElementsByClassName('graphicartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'inline-block';
      }
    }
    </script>

    <script>
    function showFashionArtists() {
      var appBanners = document.getElementsByClassName('fashionartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'inline-block';
      }
    }
    </script>

    <script>
    function showAllArtists() {
      var appBanners = document.getElementsByClassName('allartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'inline-block';
      }
    }
    </script>








    <script>
    function filterMusicArtists() {
      var appBanners = document.getElementsByClassName('musicartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'none';
      }
    }
    </script>

    <script>
    function filterPhotographyArtists() {
      var appBanners = document.getElementsByClassName('photographyartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'none';
      }
    }
    </script>

    <script>
    function filterFilmArtists() {
      var appBanners = document.getElementsByClassName('filmartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'none';
      }
    }
    </script>
    <script>
    function filterGraphicArtists() {
      var appBanners = document.getElementsByClassName('graphicartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'none';
      }
    }
    </script>
    <script>
    function filterFashionArtists() {
      var appBanners = document.getElementsByClassName('fashionartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'none';
      }
    }
    </script>
    <script>
    function filterAllArtists() {
      var appBanners = document.getElementsByClassName('allartist'), i;

      for (var i = 0; i < appBanners.length; i ++) {
          appBanners[i].style.display = 'none';
      }
    }
    </script>
</body>
</html>
