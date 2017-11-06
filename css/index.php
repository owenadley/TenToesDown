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
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
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

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-color:#FFEBE3;"></div>
                <div class="carousel-caption">
                  <div class="carousel-caption-box">
                      <p>Welcome to Ten Toes Down! We’ve created a unique and interactive platform that provides young people across Canada the opportunity to explore large communities of vibrant Artists, Entrepreneurs, and Campus Clubs. On our Website you’ll find articles, videos, music playlists, photo galleries, and events showcasing showcasing the lives of young people just like you.</p>
                  </div>

                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('../img/ttd2017.jpg');background-size:100%, 100%;background-position:fill;background-repeat:no-repeat;"></div>
            </div>

			      <div class="item">
                <div class="fill" style="background-image:url('../designs/Stickers/BoxLogo-3.png');background-size:100%, 100%;background-position:fill;background-repeat:no-repeat;"></div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
  </header>

  <section id="b1-overview-id">
		<div class="b1-overview">
			<div class="b1-overview-note">
				<h1>Promoting and enhancing student life while creating opprotunities for young Canadians</h1>
			</div>
			<hr class="fade-2">
			<div class="row pad-md">
				<div class="col-md-4 col-sm-4 col-xs-12">
          <div class="b-icon">
					     <a href="entrepreneurship.html"><img src="../img/icons/entrepreneurs.svg" alt="" class="img-responsive"></a>
               <h3><strong>Entrepreneurs</strong></h3>
          </div>
          <div class="b-icon-description">
            <p>We provide a place for entrepreneurs to promote and share their ideas with like minded ambitious students</p>
          </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
          <div class="b-icon">
				      <a href="Campus0.html"><img src="../img/icons/students.svg" alt="" class="img-responsive"></a>
              <h3><strong>Students</strong></h3>
          </div>
          <div class="b-icon-description">
            <p>Welcome to the best place to find out what’s going on in your community, on your campus, and in your city for people just like you</p>
          </div>
        </div>
				<div class="col-md-4 col-sm-4 col-xs-12">
          <div class="b-icon">
				      <a href="art-home.html"><img src="../img/icons/art.svg" alt="" class="img-responsive"></a>
              <h3>Artists</h3>
          </div>
          <div class="b-icon-description">
            <p>Ten Toes Down seeks to provide young artist with a unique channel through which they can promote their work</p>
          </div>
				</div>
			</div>
		</div>
	</section>


  <section id="img-break">
    <div class="imagebreak">
      <h3 class="entercampus"><a href="Campus0.php">Enter TenToesDown Campus <i class="fa fa-sign-in" aria-hidden="true"></i></a></h3>
    </div>
  </section>

	<section id="DesktopDisplay">
      <div class="b2-entreandart">
    		<div class="row">
    			<div class="col-md-6 col-lg-6 b2-entre">
    				<h2 class="h2-2">Entrepreneurs</h2>
            <hr class="newhr">
            <div class="b2-description">
              <p>Ideas grow here.
Ten Toes Down believes that driven young individuals should be encouraged to gain experience leading in their communities.
By creating opportunities for university aged students to collaborate and promote their work, Ten Toes Down helps foster the next generation of game-changing innovation.</p>
            </div>
            <div class="b2-e-button">
              Entrepreneurship Center
            </div>
    			</div>
    			<div class="col-md-6 col-lg-6 b2-arts">
    				<h2 class="h2-2">Artists</h2>
            <hr class="newhr">
            <div class="b2-description">
              <p>Vibe with us.
Ten Toes Down aims to promote and connect the best and most promising young artists across Canada.
By creating opportunities for young artists to collaborate and showcase their work, Ten Toes Down will provide a network of potential and a pathway for success.</p>
            </div>
            <div class="b2-e-button">
              Artists Center
            </div>
    			</div>
    		</div>
    </div>
	</section>
<!--
  <section id="img-break">
    <div class="imagebreak">
      <h3 class="entercampus"><a href="Campus0.html">Enter TenToesDown Campus <i class="fa fa-sign-in" aria-hidden="true"></i></a></h3>
    </div>
  </section>
-->
  <section>
    <div class="b3-join">
      <div class="b3-join-contents">
        <div class="b3-join-title">
          <h2 class="h2-3"><strong>Get connected today! </strong></h2>
          <hr class="fade-2">
        </div>

        <div class="row" style="padding-bottom:20px;">
          <div class="col-sm-3 col-md-3">
            <div class="b3-join-media">
              <img src="../img/logo2.png">
              <p>@tentoesdownco</p>
            </div>
          </div>

          <div class="col-md-9 col-md-9">
            <div class="b3-join-contact-text">
              <p>Create a personal username and start exploring to stay in-the-know about things happening in your community. Want to have your work promoted? Have an idea you want to develop? Send us an email and we’ll start networking you with the right people.</p><br><br><br>
            </div>
          </div>
        </div>

        <div class="b3-join-contact-boxes">
          <div class="row">
            <div class="col-md-6">
              <div class="">
                <div id="b3-m-dd" class="b3-join-cntct-msg" onclick="b3_join_msg_dropdown();">
                  <h2>Leave A Message</h2>
                </div>
                <div id="b3-m-du" class="b3-join-cntct-msg" onclick="b3_join_msg_dropup();">
                  <h2>Leave A Message</h2>
                </div>
              </div>

              <div class="b3_msg_dropdown" id="b3msgdd">
              	<div class="createforum">
                  <form action="http://www.SnapHost.com/captcha/send.aspx" id="ContactUsCaptchaWebForm" method="post" onsubmit="return ValidateForm(this);">
                    <input name="skip_WhereToSend" type="hidden" value="tentoesdownco@gmail.com" />
                    <input name="skip_SnapHostID" type="hidden" value="3RT9W322QTDL" />
                    <input name="skip_WhereToReturn" type="hidden" value="http://www.tentoesdwn.com/index.php" />
                    <input name="skip_Subject" type="hidden" value="Contact Us Form" />
                    <input name="skip_ShowUsersIp" type="hidden" value="1" />
                    <input name="skip_SendCopyToUser" type="hidden" value="1" />
                    <script type="text/javascript">
                      function ValidateForm(frm) {
                         if (frm.Name.value == "") {alert('Name is required.');frm.Name.focus();return false;}
                         if (frm.FromEmailAddress.value == "") {alert('Email address is required.');frm.FromEmailAddress.focus();return false;}
                         if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.FromEmailAddress.focus();return false;}
                         if (frm.Comments.value == "") {alert('Please enter comments or questions.');frm.Comments.focus();return false;}
                         if (frm.skip_CaptchaCode.value == "") {alert('Enter web form code.');frm.skip_CaptchaCode.focus();return false;}
                         return true; }
                         function ReloadCaptchaImage(captchaImageId) {
                         var obj = document.getElementById(captchaImageId);
                         var src = obj.src;
                         var date = new Date();
                         var pos = src.indexOf('&rad=');
                         if (pos >= 0) { src = src.substr(0, pos); }
                         obj.src = src + '&rad=' + date.getTime();
                         return false;
                      }
                    </script>

                   <form name="sentMessage" id="contactForm" novalidate>
                     <div class="control-group form-group b3-msg-inputs">
                       <div class="controls">
                         <input class="b3-msg" placeholder="Your Name..."name="Name" type="text" maxlength="60"  /><br><br>
                         <input class="b3-msg" placeholder="Your Email..."name="FromEmailAddress" type="text" maxlength="60"  /><br><br>
                         <textarea class="b3-msg" placeholder="Your Message..."name="Comments" type="text" maxlength="60" style="height:50px;"></textarea><br><br>
                         <div class="row b3-msg-antirobot">
                           <div class="col-md-6">
                             <input class="b3-msg" placeholder="Anti-Robot code..."name="skip_CaptchaCode" style="width:100%;" type="" /><br><br>
                           </div>
                           <div class="col-md-6">
                             <a href="http://www.snaphost.com/captcha/ReadyForms/ContactUsForm.aspx"><img id="CaptchaImage" alt="Contact Us form" title="HTML code for Contact Us form"
                                     src="http://www.SnapHost.com/captcha/CaptchaImage.aspx?id=3RT9W322QTDL&ImgType=2" /></a>
                                     <br />
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');"><span style="font-size:12px;color:black">reload code</span></a>
                           </div>
                        </div>

                                 <br><br>
                                 <button name="skip_Submit" type="submit" value="Submit" class="b3-e-button">Send!</button>
                   <!-- Please check our ProCaptcha service which is ad-free:
                           http://www.SnapHost.com/captcha/ProCaptchaOverview.aspx --><br>
                           <a href="http://www.snaphost.com/captcha/CaptchaCode.aspx" alt="web forms" style="display:none;" title="web forms">
                           web forms</a>

  	                  </div>
                    </div>
                  </form>
               </div>
             </div>
           </div>
            <div class="col-md-6">
              <div class="">
                <div id="b3-r-dd" class="b3-join-cntct-reg" onclick="b3_join_j_dropdown();">
                  <h2>Join TenToesDown</h2>
                </div>
                <div id="b3-r-du" class="b3-join-cntct-reg" onclick="b3_join_j_dropup();">
                  <h2>Join TenToesDown</h2>
                </div>
              </div>

              <div class="b3_reg_dropdown" id="b3regdd">
              	<div class="createforum">
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
       </div>
     </div>
   </div>




      <br><br>

</section>

<style>

</style>


  <hr>
  <div w3-include-html="includes/footer.html"></div>
      <!-- /.container -->
    <!-- /.container -->
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->


    <script>
    $('.carousel').carousel({
        interval: 9500 //changes the speed
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
                autoScrollingInterval: 50
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
    $("#oncampusbut").click(function() {
    $('html,body').animate({
        scrollTop: $("#oncampus").offset().top},
        'slow');
});
  </script>
  <script>
  $("#offcampusbut").click(function() {
  $('html,body').animate({
      scrollTop: $("#offcampus").offset().top},
      'slow');
});
</script>

<script>
$(window).load(function() {
  // Animate loader off screen
  $(".se-pre-con").fadeOut("slow");;
});
</script>
<script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true"></script>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  var user_name = profile.getName();
  document.getElementById("welcomeperson").innerHTML = user_name;

}
</script>
<iframe style="position: absolute; width: 1px; height: 1px; left: -9999px;" id="ssIFrame_google" sandbox="allow-scripts allow-same-origin" src="https://accounts.google.com/o/oauth2/iframe#origin=http%3A%2F%2Ftentoesdwn.com&amp;rpcToken=533870398.6357845"></iframe>
