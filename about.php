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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
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
                      <li><form action="sign-out.php" method="POST"><input type="Submit" value="Sign Out"></form></li>
                    </ul>
               </li>
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

	<br>
	<br>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>// TTD</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="../img/ttd-about.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Ten Toes Down is a brand that was created with one thing in mind: To create quality products which advocate a quality lifestyle.
We we're pieced together by the movement of the new generation. A generation lead by music, design and fashion. We focus on delivering quality products, influenced and driven from the lifestyle we live.</p>

				<!--
				<p class="text-muted">
				You’ve been there. You’ve had the drive, the intuition, the idea, the perseverance—but nothing out there has represented you enough to inspire you to wholeheartedly embrace it.
				The truth is, our entire culture—from clothes to music, design, and mainstream art—has all been watered down to the least impressionable, least inspiring, and least igniting version of itself for fear of alienating even a single person within the consumerist void.
				It’s time we create something new—to represent a new generation looking to stand out. When any kind of fashion has the essence of style, it’s wildly apparent; people flock to it; artists imitate it; social leaders wear it and live by it; and those with a sense of purpose know it’s for them.
				That’s why were Ten Toes Down. Standing strong on 10 toes allows us to be the best we can be, and the strongest we can be. We are passionate about, and want each and every member of this community to be standing strong on 10 toes. This is a watershed moment where subculture meets style, and at TTD, we believe this is your moment.
				If you care about what you wear, you have arrived at the right place. At TTD, we view every day as a new opportunity to reach higher than the day before. We motivate ourselves by representing our image the way we want, and not just by how flash-pan trends unfold and fade away. We know that your dedication to yourself and your style is timeless. That’s we we’re passionate and we push to reinvent ourselves, all while standing strong, with Ten Toes Down.
				</p>
				-->

			</div>
        </div>
        <!-- /.row -->


        <!-- Our Customers -->
        <div class="row" id="pics">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
        </div>
        <!-- /.row -->
</div>
        <hr>

        <!-- Footer -->
        <div w3-include-html="includes/footer.html"></div>
            <!-- /.container -->

            <!-- jQuery -->
            <script src="../js/jquery.js"></script>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
            <script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true"></script>
                <script src="../js/index.js" type="text/javascript"></script>
                <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/index.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
