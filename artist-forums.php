<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TenToesDown is a collective of young canadian artists expressing their life experiences through different media, and showcasing the talent they discover along the way.">
    <meta name="author" content="@owenadley">
    <meta name="keywords"content="TenToesDown Collective Canadian Art Music Photography Video Film Artist Promotion University Student Entertainment Visual Arts Ryerson University RU uOttawa University of Ottawa Concordia University University of Toronto U of T UofT Media Experience Brand Management Business Operations Talent Recruitment Event Planning Editor Student Work Forums">
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
    <link href="https://fonts.googleapis.com/css?family=Chivo|Fira+Sans+Condensed|Magra|Montserrat|PT+Sans+Narrow|Palanquin+Dark|Slabo+27px|Titillium+Web" rel="stylesheet">
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



    <div class="forum-header">
	     <h1>Artist Forums</h1>
		     <p>Start up an artist discussion!</p>
    </div>


  <div class-"space-break"><br></div>
  <div class="afs-container">
    <div class="afs-createforum">
      <div class="dropdownbuttons">
        <div id="af-dd" class="afs-createforum-ddbtn" onclick="createforumdropdown();">
          <h2>Create a Forum!</h2>
        </div>
        <div id="af-du" class="afs-createforum-ddbtn" onclick="createforumdropup();">
          <h2>Create a Forum!</h2>
        </div>
      </div>
      <div class="forumdropdown" id="frumdd">
      	<div class="createforum">
      		<form class="forumcreateform" action="create-new-forum-a.php" method="POST">
            <div class="new-forum-title">
        			<input id="afs-titleinput" type="text" align="middle" name="forum_gettitle" placeholder="Forum Title" required>
            </div>
            <div class="new-forum-description">
        			<input id="afs-descriptioninput" type="text" align="middle" name="forum_getdescription" placeholder="Forum Description" required>
            </div>
            <div class="new-forum-submit">
      			     <button id="createforumbut" type="Submit" class="btn btn-success btn-block">Post!</button>
            </div>
      		</form>
      	</div>
      </div>
    </div>

    <br><hr>
    <div class="afs-currentforums">

      <h2>Latest</h2>
      <div class-"space-break"><br></div>

      <div class="comments-mainbox">
        <div class="comment-livecomments">

      		<?php
      		// this script reads all the current forums from the database, and displays them according to date created.
      		  session_start();

      		$hostname="107.180.27.156";
      		$username="oadley12";
      		$password="Roksa412";
      		$dbname="tentoesdown";

      		// Create connection
      		$conn = mysqli_connect($hostname, $username, $password, $dbname);

      		// Check connection
      		if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                echo "<script>alert('dead!')</script>";
      		}

      		$get_a_forums = "SELECT * FROM  `artist-forums` WHERE  `aforum_id` ORDER BY  `aforum_date` DESC LIMIT 0 , 30";

      		$check_a_forums = mysqli_query($conn, $get_a_forums);

        		while ( $row = mysqli_fetch_assoc($check_a_forums) )  {

        			echo "
						<div class='commentwrapper'>
							<div class='comment-single'>
								<a href='artist-forum.php?id=". $row['aforum_id'] ."'>
									<div class='row'>
										<div class='col-md-4'>
											<div class='afs-livecomments-forumtitle'>
											" . $row['aforum_title'] . "
											</div>
										</div>
										<div class='col-md-6'>
											" . $row['aforum_description'] . "
										</div>

								    <div class='col-md-2'>

					               ". ($_SESSION['user_name_on'] == $row['aforum_user'] ?

              					"
              						<form class='del-usr-comment' action='del-usr-comment.php' method='POST'>
                            <input type='hidden' name='forum_post_id' value='". $row['aforum_id'] ."'></input>
              							<button id='usr-delcomment-btn' name='submitdelcomment' type='Submit'><i class='fa fa-times fa-2x' aria-hidden='true'></i></button>
              						</form>
              					"
					              :
					              "")

					              ."
                    </div>
                  </div>
                </a>
							</div>
						</div>
					";
          }

  		mysqli_close($conn);

  		?>
        </div>

        <br><br>
      </div>
    </div>
  </div>



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
