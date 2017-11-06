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
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>

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



    <!-- Page Content -->
    <div class-"space-break"><br><br></div>
    <div class-"space-break"><br><br></div>

<div class="space-break4"></div>
      <div class="mydashboard-bodycontent">
  <?php
		session_start();
		$hostname="107.180.27.156";
		$username="oadley12";
		$password="Roksa412";
		$dbname="tentoesdown";
		$usertable="ttd";


		// Create connection
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
	
		$currentUser = $_SESSION['user_name_on'];
		$currentUserID = $_SESSION['user_id_on'];
	
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		if ($currentUser) {

			$sqlcheck = "SELECT `usrPicture` FROM  `ttd` WHERE  `username` =  '$currentUser' AND  `userID` =  '$currentUserID' LIMIT 0 , 30";
			$run_user = mysqli_query($conn, $sqlcheck);
			$get_server_addr = $_SERVER['REMOTE_ADDR'];
			
			if (mysqli_num_rows($run_user) > 0) {
				
				while ($row = mysqli_fetch_assoc($run_user)) {
					
					$_SESSION['user_img_on'] = $row['usrPicture'];
				}

			} else {

				echo "<script>alert(".$currentid.");</script>";
				
			}
		} else {
			echo "<script>alert('no2');</script>";
		}

           
      
              //  echo "<script>alert(".$currentid.");</script>";
      
			  $geoplugin = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$_SERVER['REMOTE_ADDR'].""));

            echo "<div class='mydashboard-header'>
                    <div class='row'>
                      <div class='col-md-4'>
                        <div class='dashboard-header-wlcmusr' id='dashboard-header-wlcmusr'>
                          <p id='dsh-header-wlcm'>Welcome,</p>
                          <img src='userimages/".$_SESSION['user_img_on']."' class='circleBase type1'></img>
                          <p id='dsh-header-nme'>" . $_SESSION['user_name_on'] . "</p>
                          <p id='dsh-header-loc'><i class='fa fa-globe fa-2x' aria-hidden='true'></i>&nbsp;&nbsp;<span id='hdr-loc'>" .$geoplugin['geoplugin_city']. "</span></p>
                        </div>
                      </div>
                      <div class='col-md-8'>

                      </div>
                    </div>
                  </div>
                  <form action='upload_userimg.php' method='post' enctype='multipart/form-data'>
                      Select image to upload:
                      <input type='file' name='new_userPic' id='fileToUpload'>
                      <input type='submit' value='Upload Image' name='submit'>
                  </form>
                  <br>
                  ";
      
            echo "<div class='mydashboard-bar'>
                    
                  </div>";
                
            $currentAdmin = false;

            $sqlGetAdmin = "SELECT * FROM `ttd` WHERE `userID` = $currentUserID";
            $sqlCheckAdmin = mysqli_query($conn, $sqlGetAdmin); 
            while ($admin = mysqli_fetch_assoc($sqlCheckAdmin)) {

                if ($admin['isAdmin'] > 0) {
                    $currentAdmin = true;
                }
                
            }
          
            if ($currentAdmin == true) {
                echo "<div class='mydashboard-admin-postcreate'>
                        <form action='admin_createpost.php' method='post'>
                            <input name='post_title' type='text'>
                            <input name='post_description' type='text'>
                            <input name='post_img' type='file'>
                            <input type='Submit' name='submit'>
                        </form>
                     </div>";
            }
        
            $sqlGetFav = "SELECT * FROM `usrfavposts` WHERE `user_id` = $currentUserID";
            $sqlCheckFav = mysqli_query($conn, $sqlGetFav);

            while ($fav = mysqli_fetch_assoc($sqlCheckFav)) {
                $sqlFavPost = $fav['post_id'];

                $sqlGetFavInfo = "SELECT * FROM `ttdcampusbatch01` WHERE `post_id` = $sqlFavPost";
                $sqlCheckFavInfo = mysqli_query($conn, $sqlGetFavInfo);
                
                while ($favInfo = mysqli_fetch_assoc($sqlCheckFavInfo)) {

                    echo "<div class='mydashboard-favorites'>
                            <p>".$favInfo['post_title']."</p>
                          </div>";
                }

            }

                    
      
            mysqli_close($conn);
      

			?>

      </div>



<script type="text/javascript">


var bgColorArray = ['https://www.tentoesdwn.com/img/backgrounds/rndm/1.jpg','https://www.tentoesdwn.com/img/backgrounds/rndm/2.jpg','https://www.tentoesdwn.com/img/backgrounds/rndm/3.jpg','https://www.tentoesdwn.com/img/backgrounds/rndm/4.jpg','https://www.tentoesdwn.com/img/backgrounds/rndm/5.jpg','https://www.tentoesdwn.com/img/backgrounds/rndm/6.jpg','https://www.tentoesdwn.com/img/backgrounds/rndm/7.jpg'];


    randomCount = Math.floor(Math.random() * bgColorArray.length);
    $('#dashboard-header-wlcmusr').css('background', 'url(img/backgrounds/rndm/' + randomCount + '.jpg)')

</script>

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

</body>

</html>
