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
      <div class="col-md-8">
        <div class="art-introtext">
          Ideas grow here.
 Ten Toes Down believes that driven young individuals should be encouraged to gain experience leading in their communities.
 By creating opportunities for university aged students to collaborate and promote their work, Ten Toes Down helps foster the next generation of game-changing innovation.
        </div>
      </div>
      <div class="col-md-4">
        <div class="art-featuredimages">
          <!-- SnapWidget -->

<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/896084542ae95e1883d1755312c8bdb4.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 80%; border: 0; overflow: hidden;"></iframe>     </div>
    </div>
  </div>
</div>

      <hr>
          <div class="space-break">&nbsp;</div>
<div class="campusmenu-body">
    <div class="art-featuredw">
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
      </div>
      <div class="col-md-4" style="display:inline-block;">
        <div class="art-forums">

        <p><i style="font-size:75px;" class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 60px;padding-bottom:20px;">Forums</span></p>
        <p><span style="font-size: 20px;">Coming Soon!</span></p>

        </div><br>

      </div>
    </div>
</div>



        <!-- Our Customers -->

        <!-- /.row -->

        <hr>
        <!-- Footer -->
        <div w3-include-html="includes/footer.html"></div>
            <!-- /.container -->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/index.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

</body>

</html>
