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
                      <li style="padding-right:20px;"> <a href="Campus0.php">Campus</a></li>
                       <li style="padding-right:20px;"> <a href="entrepreneurship.php">Entrepreneurs</a></li>
                       <li style="padding-right:20px;"><a href="art-home.php">Artists</a></li>
                       <li style="padding-right:20px;"><a href="about.php">About</a></li>
                       <li id="signin-acc" style="padding-right:20px;"><a onclick="document.getElementById('myLoginBox').style.display = 'inline-block'">
                           Sign In
                         </a>
                       </li>
                       <li class="dropdown" id="signedin-acc">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-right:20px;">
                             <?php
                                     session_start();
                                     echo "" . $_SESSION['user_name_on'] . "";
                              ?>
                              <span class="caret"> </span>
                            </a>
                            <ul class="signedindd dropdown-menu">
                              <li><a href="mydashboard.php">My Dashboard</a></li>
                              <li><form action="sign-out.php" method="POST"><input type="Submit" value="Sign Out"></input></form></li>
                            </ul>
                       </li>
                     </ul>
                      </div>

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


<div class="campusmenu-body">
    <!-- Page Content -->
    <div class-"space-break2"></div>
  <div id="art-homeintro">
    <div class="row">
      <div class="col-sm-5 col-md-4 col-lg-3">
        <div class="art-featuredimages">
          <!-- SnapWidget -->
          <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/9778f402444b5d8ba4e68e84bad18a35.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
      </div>
      <div class="col-sm-7 col-md-8 col-lg-6">
        <div class="art-introtext">
          <p id="ait-1">Vibe with us.</p>
<p id="ait-2">Ten Toes Down aims to promote and connect the best and most promising young artists across Canada.
  By creating opportunities for young artists to collaborate and showcase their work, Ten Toes Down will provide a network of potential and a pathway for success.</p>
        </div>
      </div>
      <div id="arthome-query-sidemenustack">
        <div class="col-lg-3">
          <div class="art-sidemenu">

            <a href="artist-directory.php">
              <div class="art-sidemenu-directory">
                <span id="art-sidemenu-icon"><i style="font-size:65px;" class="fa fa-users" aria-hidden="true"></i></span>
                  <p>Directory</p>
              </div>
            </a>

            <br>

            <a href="artist-forums.php">
              <div class="art-sidemenu-forums">
                <span id="art-sidemenu-icon"><i style="font-size:75px;" class="fa fa-comments-o" aria-hidden="true"></i></span>
                   <p>Forums</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

      <div style="height:20px;">&nbsp;</div>

      <div id="arthome-query-sidemenurow">
        <div class="art-sidemenu2">
          <div class="row">
            <div class="col-sm-6">
              <a href="artist-directory.php">
                <div class="art-sidemenu-directory2">
                  <div class="row">
                    <div class="col-sm-3">
                      <span id="art-sidemenu-icon2"><i style="font-size:75px;" class="fa fa-users" aria-hidden="true"></i></span>
                    </div>
                    <div class="col-sm-9" style="padding:30px;">
                      <p>Directory</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="artist-forums.php">
                <div class="art-sidemenu-forums2">
                  <div class="row">
                    <div class="col-sm-4">
                      <span id="art-sidemenu-icon2"><i style="font-size:75px;" class="fa fa-comments-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="col-sm-8" style="padding:30px;">
                      <p>Forums</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div style="height:20px;">&nbsp;</div>
    </div>
  </div>


      <div style="height:20px;">&nbsp;</div>

      <div id="replaceDiv"></div>

  <div id="featureddesktop">
      <div id="art-featuredsongs">
        <div class="slidecontainer1">
          <div class="myscslider">
            <div class="art-ftsc"><iframe id="scrld1" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/308795376&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld2" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld3" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld4" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld5" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
          </div>
        </div>
      </div>
  </div>
<!--<button onclick="refreshsc();">sddsfdsfs</button>-->
    <div id="featuredmobile">
      <div id="art-featuredsongs">
        <div class="slidecontainer1">
          <div class="myscslidermobile">
            <div class="art-ftsc"><iframe id="scrld1" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/308795376&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld1" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld1" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld1" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
            <div class="art-ftsc"><iframe id="scrld1" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260586148&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
          </div>
        </div>
      </div>
    </div>

      <div style="height:20px;">&nbsp;</div>

<div class="campusmenu-body">
<!--
      <div class="col-md-8" style="display:inline-block;">
        <div class="art-featuredslider">
          <div id="featureddesktop">
              <div id="art-featuredartwork">
                <div class="slidecontainer2">
                  <div class="myscsliderartwork">
                    <div class="art-ftsc2" style="height:380px;">Featured Content</div>
                    <div class="art-ftsc2" style="height:380px;">Featured Content</div>
                    <div class="art-ftsc2" style="height:380px;">Featured Content</div>
                    <div class="art-ftsc2" style="height:380px;">Featured Content</div>
                    <div class="art-ftsc2" style="height:380px;">Featured Content</div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      -->
      </div>
    </div>
</div>
<br><br><br>            <br>&nbsp;<br>

  <br>
  <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8401.272656875253!2d-75.68736578940721!3d45.42241468477398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1486331706386" width="100%;" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
-->






        <!-- /.row -->


        <!-- Our Customers -->

        <!-- /.row -->


        <!-- Footer -->
        <div w3-include-html="includes/footer.html"></div>
            <!-- /.container -->

<br>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/index.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script>$("#ait-1").addClass("load");</script>
    <script>$("#ait-2").addClass("load");</script>
        <script src="../js/new1.js"></script>
</body>

</html>
