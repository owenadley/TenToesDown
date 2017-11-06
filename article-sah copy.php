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


<div class="campusmenu-body">
    <!-- Page Content -->
    <div class="space-break"><br><br></div>
    <div class="space-break"><br><br></div>
    <div class="space-break2"></div>
    
            <h1 id="article-title">The Fall Of A Sparrow</h1>
            <ul id="article-info-inline"><li style="float:left;">April 9th 2017</li></ul>
            <img src="../img/covers/sah2.png" class="img-responsive">
   


            <p id="article-artist-text"><img style="display:inline; width:80px;" alt="TenToesDown Canadian music artist SafeAsHouses" class="img-circle img-responsive" src="../img/artists/music/safeashouses-sm.png"><br>Safe As Houses</p>

          </div>
        </div>
        <hr>
         <div class="article-content">
             <p id="article-contentp">
                 Think of a new pack of gum. In need of a refreshment your mouth waters for that one piece to change the boring state it is in. That first burst of flavour. Now this isn't your standard pack of chews. It’s mystery flavour and no matter how many times you taste the vibrant unfamiliarity, you are unable to pin point what it is and yet always find yourself coming back for more. New age indie folk alternative band ‘Safe as Houses’ is that mystery pack that keeps you coming back for more and awakens a new sense and flavour each time. <br><br>

                It’s in that first bite, that first song, that first harmony that makes your mouth water and drizzle. Safe as Houses are a 5 piece indie folk alternative rock band from Kitchener Ontario. The ages range from 18 to 24 and each member brings a distinct feature to the group. By incorporating a wide variety of alternative and classical instruments such as the cello and mandolin, Safe as Houses have strategically marketed themselves to a vast sea of listeners. Their single “We’ll be Dancing” off of their EP The Fall of a Sparrow’, begins with a ‘old-barn-dance-holding-you-sweetheart-close’ melodic violin solo and slowly adds layers of chiming harmonies. In contrast, you can compare that to their other single “Hurricane” off of their 3rd EP Hurricane. This piece takes a deep indie turn and digs their roots deep in the cold black soil that sends shivers from the soles of your feet to the souls of your being. With featuring unexpected rhythms and vocal melodies, Safe as Houses advertises themselves to more of a ‘emotionally-distraught-caught-in-the-rain-with-eyes-closed’ crowd as well as the cheery, happy, dancing crowd listening to ‘We’ll Be Dancing’. <br><br>

                 Listen to ‘Leaves I’ve Thrown’ off of their EP The Fall of a Sparrow. Think of your mystery pack of gum again. Close your eyes and open your mind and see what you flavours you can pick out by just listening. The first one comes in a wave. Intense and aggressive. It’s a intricate acoustic guitar line that starts slow and then builds until all your senses are filled and you are overwhelmed with utter awe and your mouth waters for more. Then the next flavour kicks in. This one is more subtle and creeps up on you. The hallow and haunting vocals come in and give a different and refreshing tune apart from the musicality of the guitar. The blending of the other flavours come in and bleed in to each other perfectly like chocolate and banana. The cello, violin, soft drums and velvety vocals end the array of flavours and leave you content until you put the next strip in to your mouth. <br><br>
            </p>


      </div>
    </div>
    </div>
    <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/289930386&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

    <br><br>

    <div class="article-comments"><p id="article-comments-header">Comments <i class="fa fa-comments-o" aria-hidden="true"></i></p></div>

    <div class="comments-mainbox">

      <div class="comment-livecomments">

		<?php
		  session_start();

      $hostname="107.180.27.156";
      $username="oadley12";
      $password="Roksa412";
      $dbname="tentoesdown";
      $usertable="articlecomments";
      $postid = $_GET['postid'];
          
      // Create connection
      $conn = mysqli_connect($hostname, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          echo "<script>alert('dead!')</script>";
      }

      $get_comments = "SELECT * FROM `ttdpostcomments01` WHERE `postID` = '$postid' LIMIT 0 , 30";
          
      $check_comments = mysqli_query($conn, $get_comments);

  		while ( $row = mysqli_fetch_assoc($check_comments) )  {
  			echo "
          <div class='comment-single'>
            <div class='row'>
              <div class='col-md-3'>
                " . $row['username'] . "
              </div>
              <div class='col-md-9'>
                " . $row['commentValue'] . "
             </div>
           </div>
          </div>
  		";

    }

    echo "
      </div>
      <br><br>
      <form class='customform-comments' action='post-comment.php' method='POST'>
        <input align='middle' type='text' name='enter_new_comment' class='form-control' id='exampleInputEmail2' placeholder='Leave a comment..' required><br>
        <input type='hidden' name='post_id' value='$postid'>
        <button type='Submit' class='btn btn-success btn-block'>Submit</button>
      </form>";
          
        mysqli_close($conn);

		?>
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
