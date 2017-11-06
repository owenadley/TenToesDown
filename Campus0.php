
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
    <link href="https://fonts.googleapis.com/css?family=Chivo|Fira+Sans+Condensed|Hind|Magra|Oswald|Palanquin+Dark|Permanent+Marker|Roboto|Roboto+Condensed|Sintony|Slabo+27px|Titillium+Web|Viga" rel="stylesheet">
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


  <script>
  $(document).ready(function(){
//Handles menu drop down
$('.dropdown-menu').find('form').click(function (e) {
e.stopPropagation();
});
});
</script>





	<br>
	<br>
    <!-- Page Content -->
    <section id="campusmenu">
      <div class="campusmenu"><!--
        <div class="campus-subnav">
              <nav id="campus-menu-nav">
            	<ul >
            		<li id="campus-menu-nav-li" > <a onclick="hidetopmenu()">Events</a>
                  <ul style="z-index:999;">
                    <li id="campus-menu-nav-li"><a href="#">Entrepreneurship</a></li>
                    <li id="campus-menu-nav-li"><a href="#">Art</a></li>
                  </ul>
                </li>
            		<li id="campus-menu-nav-li"><a href="#">Blog</a>
            			<ul style="z-index:999;">
            				<li id="campus-menu-nav-li"><a href="#">Entrepreneurship</a></li>
            				<li id="campus-menu-nav-li"><a href="#">Art</a>
            					<ul style="z-index:999;">
            						<li id="campus-menu-nav-li"><a href="#">Music</a></li>
            						<li id="campus-menu-nav-li"><a href="#">Photography</a></li>
            						<li id="campus-menu-nav-li"><a href="#">Film</a></li>
            						<li id="campus-menu-nav-li"><a href="#">Graphic Arts</a></li>
            					</ul>
            				</li>
            			</ul>
            		</li>
            		<li id="campus-menu-nav-li"><a href="#">Social</a>
            		</li>
            	</ul>
            </nav>
        </div>-->

        <div class="space-break4">&nbsp;<br>&nbsp;</div>
        <!--
        <div id="welcome">WELCOME:<span id="welcomeperson"></span></div>
        <a href="#" onclick="Out();">Sign out</a> !-->
        <!-- The Modal -->

        <div class="campusmenu-body" id="campusmenu-topmenu">
          <div class="row">
            <div class="col-md-8">
              <div class="campusmenu-introbox">
                <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active" id="car2-item1">
                            <div class="carousel-caption">
                              <h3>First slide label</h3>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="item" id="car2-item2">
                            <div class="carousel-caption">
                              <h3>Second slide label</h3>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="item" id="car2-item3">
                            <div class="carousel-caption">
                              <h3>Third slide label</h3>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>
            </div>


            <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


            <div class="col-md-4">
                <!-- SnapWidget -->
                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                <!-- SnapWidget -->
                <iframe src="https://snapwidget.com/embed/344017" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:395px"></iframe>
            </div>

        </div>
      </div>

<!--<img src="../img/icons/entrepreneurs2.svg" alt="" class="img-responsive">
<img src="../img/icons/art2.svg" alt="" class="img-responsive">-->
        <br><br>
        <div class="campusmenu-body-headr-row">
          <div class="headr-row-content">
            <div class="row">
                <div class="col-md-2" style="padding:0px;">
                  <div id="entrdtls-dd" onclick="campus_entrepreneur_details_dd();" class="campusmenu-headrow-entrepreneurs">
                    <p id="headrow-entrepreneurs-p">Entrepreneurs</p>
                  </div>
                  <div id="entrdtls-du" onclick="campus_entrepreneur_details_du();" class="campusmenu-headrow-entrepreneurs">
                    <p id="headrow-entrepreneurs-p">Entrepreneurs</p>
                  </div>
                  <div id="headrow-entrepreneur-detailsid" class="headrow-e-details">
                    &nbsp;<br><p id="headrow-entrepreneur-detailsid-p">Ideas grow here.<br>
Ten Toes Down believes that driven young individuals should be encouraged to gain experience leading in their communities.
By creating opportunities for university aged students to collaborate and promote their work, Ten Toes Down helps foster the next generation of game-changing innovation.</p>
                    <p id="linkartist">Join the Ten Toes Down Entrepreneurship community, gain publicity, create opprotunities.</p>
                    <p><a id="takeme" href="http://www.tentoesdwn.com/entrepreneurship.php">Sign Me Up.</a></p>
                  </div>
                </div>
                <div class="col-md-2" style="padding:0px;">
                  <div id="artdtls-dd" onclick="campus_artist_details_dd();" class="campusmenu-headrow-artists">
                    <p id="headrow-artists-p">Artists</p>
                  </div>
                  <div id="artdtls-du" onclick="campus_artist_details_du();" class="campusmenu-headrow-artists">
                    <p id="headrow-artists-p">Artists</p>
                  </div>

                  <div id="headrow-artist-detailsid" class="headrow-artist-details">
                    &nbsp;<br><p id="headrow-artist-detailsid-p">Vibe with us.<br>
Ten Toes Down aims to promote and connect the best and most promising young artists across Canada.
By creating opportunities for young artists to collaborate and showcase their work, Ten Toes Down will provide a network of potential and a pathway for success.</p>
                    <p id="linkartist">Join the Ten Toes Down Artist community, gain publicity, create opprotunities.</p>
                    <p><a id="takeme" href="http://www.tentoesdwn.com/art-home.php">Take me there.</a></p>
                  </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-2">
                  <div class="campusmenu-headrow-user">
                    <p id="headrow-usr-p"><?php session_start();if (isset($_SESSION['user_name_on'])){ echo "<i class='fa fa-globe' aria-hidden='true'></i>  Welcome, " . $_SESSION['user_name_on'] . "";}?></p>
                  </div>
                </div>
              </div>
          </div>
        </div>








          <!-- HTML for render Google Sign-In button -->
          <!-- HTML for displaying user details -->
          <div class="userContent"></div>



      <div class="campus-featured-songs">
        <div id="featureddesktop">
            <div id="art-featuredsongs">
              <div class="slidecontainer1">
                <div class="myscslider">
                  <div class="art-ftsc"><iframe id="scrld1" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/308795376&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
                  <div class="art-ftsc"><iframe id="scrld2" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/314169554&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>
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
        </div>



    <div class="space-break"><br><br><br><br>&nbsp;<br></div>
    <div class="space-break"><br>&nbsp;<br></div>

        <!-- Featured Work Slider -->
        <div class="campusmenu-body-ftcontent">
            <div class="row">
              <div class="col-md-3">
                <div class="ftcontent-lefttext">
                    <p id="ftcontent-left1">Lorem ipsum dolor sit amet, asdfd fdasfds asd f dsaf ds  f ds a fd as fdsa f djhkdafjkdsakl fdjsakghfd sa fgdsajk aigfeujak a fdksj afkd safgdshja </p>
                    <p id="ftcontent-left2">Lorem ipsum dolor sit amet, asdaf asdfsdaf fd  da  f da  dfs adsafdsafe magna aliqua. Lorem ipsum dolor sit amet</p>
                    <p id="ftcontent-left3">Lorem ipsum dolor sit amet, consect asdfsad fsdafing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet</p>
                </div>
                  
                  
              </div>
              <div class="col-md-6">
                <div class="ft-content-slider">
                    <div class="ftcontent-selectedslide-wrapper">
                      <div class="myfeatworkslider">
                          <div class="ftcontent-selectedslide">BIG TEST1</div>
                          <div class="ftcontent-selectedslide">BIG TEST2</div>
                          <div class="ftcontent-selectedslide">BIG TEST3</div>
                        </div>
                    </div>
                    <div class="ftcontent-slideselector">
                        <div class="myfeatworkslider-nav">
                          <div class="ftcontent-slidethumbnail" style="background-image: url('../img/zargara.JPG')" onclick="changeftcampustext1();">       <p>Test1</p>
                            </div>
                          <div class="ftcontent-slidethumbnail" onclick="changeftcampustext2();"><p>Test2</p></div>
                          <div class="ftcontent-slidethumbnail" onclick="changeftcampustext3();"><p>Test3</p></div>
                        </div>
                        
                    </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="ftcontent-righttext">
                    <p id="ftcontent-right1">Lorem ipsum dolor sit amet, asdfd fdasfds asd f dsaf ds  f ds a fd as fdsa f djhkdafjkdsakl fdjsakghfd sa fgdsajk aigfeujak a fdksj afkd safgdshja </p>
                    <p id="ftcontent-right2">Lorem ipsum dolor sit amet, asdaf asdfsdaf fd  da  f da  dfs adsafdsafe magna aliqua. Lorem ipsum dolor sit amet</p>
                    <p id="ftcontent-right3">Lorem ipsum dolor sit amet, conse ctas sdafing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
        </div>
          
        <div class="space-break"><br><br><br><br>&nbsp;<br></div>
        <div class="space-break"><br>&nbsp;<br></div>

        <!-- 1st Campus Feature - Image feature -->
        <div class="campusmenu-body-ftimage">
            <div class="row">


              <div class="col-md-3 col-md-offset-4" style="padding:0px;"style="posistion:relative;">
                    <div class="ft-image-project">
                            <p id="ft-image-projectname">Absolute Towers</p>
                    </div> 
                    <div class="ftimage-description">
                        <p id="ft-image-author">Albert Yang</p><br>
                        <p id="ft-image-school">Toronto</p>
                        <p id="ft-image-date">April 9, 2017</p>
                        <form action="addTo_post_fav.php" method="POST">
                            <div class="fav-tooltip">
                                <button type="Submit" name="post_id" class="fa fa-heart fa-2x ttd_fav" aria-hidden="true" value="1"></button>
                                <span class="fav-tooltip-text">
                                    <?php 
                                        if (isset($_SESSION['user_id_on'])) {
                                            echo "Favorite this!";
                                        } else {
                                            echo "You must log in to favorite this!";
                                        }
                                    ?>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
           
                  <div class="col-md-4"style="padding:0px;">
                    <div class="featuredimges-slider">
                        <img class="img-responsive active" src="../img/artists/photography/albertyang/1.png">
                        <img class="img-responsive" src="../img/artists/photography/albertyang/2.png">
                        <img class="img-responsive" src="../img/artists/photography/albertyang/3.png">
                    </div>
                  </div>
                  <div class="col-md-1">
                    <button class="ft-image-nextimg-btn" onclick="slideSwitch();"><i class="fa fa-angle-right fa-4x" style="color:grey;" aria-hidden="true"></i></button>
                  </div>
                </div>
		      </div>

        <div class="space-break"><br>&nbsp;<br></div>
        <div class="space-break"><br><br><br><br>&nbsp;<br></div>
        <div class="space-break"><br><br><br><br>&nbsp;<br></div>
        <div class="space-break"><br><br><br><br>&nbsp;<br></div>
          
          
        <!-- 2rd Campus Feature - Video feature -->
        <div class="campusmenu-body-ftvideo">
            <div class="row">
              <div class="col-md-6" style="padding:0px;">
                  <iframe width="100%" height="520" src="https://www.youtube.com/embed/3umEdWZIViY" frameborder="0" allowfullscreen></iframe>
              </div>
                
                <div class="col-md-3" class="feat-description" style="padding:0px;">
                    <div class="feat-description">
                        <div class="ft-video-project">
                            <a id="nohova" href ="article-tss.php?postid=<?php echo $postid; ?>">
                                <p id="ft-video-projectname">Toronto Slang</p>
                            </a>
                        </div>  
                        <div class="ftvideo-description">
                            <p id="ft-image-author">Big Sheng</p>
                            <p id="ft-image-school">Toronto</p>
                            <p id="ft-image-date">May 3, 2017</p>
                            <form action="addTo_post_fav.php" method="POST">
                                <div class="fav-tooltip">
                                    <button type="Submit" name="post_id" class="fa fa-heart fa-2x ttd_fav" aria-hidden="true" value="2"></button>
                                    <span class="fav-tooltip-text">
                                        <?php 
                                            if (isset($_SESSION['user_id_on'])) {
                                                echo "Favorite this!";
                                            } else {
                                                echo "You must log in to favorite this!";
                                            }
                                        ?>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
		      </div>
          </div>
          
        <div class="space-break"><br><br><br><br>&nbsp;<br></div>
        <div class="space-break"><br>&nbsp;<br></div>
          
          <!-- 3rd Campus Feature - Album feature -->
        <div class="campusmenu-body-ftimage">
            
		<?php

            $postid= 3;
            //echo "<script>alert($postid);</script>"

            ?>
            
            
            <div class="row">
                <div class="col-md-3 col-md-offset-4" style="padding:0px;"style="posistion:relative;">
                    <div class="ft-image-project">
                         
                        
                        <a id="nohova" href ="article-sah.php?postid=<?php echo $postid; ?>">
                            <p id="ft-image-projectname" style="color:#574B26;">The Fall Of a Sparrow</p>
                        </a>
                         
                    </div> 
                    <div class="ftimage-description">
                        <p id="ft-image-author">Safe As Houses</p>
                        <p id="ft-image-school">Kitchener-Waterloo</p>
                        <p id="ft-image-date">April 9, 2017</p>
                        <form action="addTo_post_fav.php" method="POST">
                            <div class="fav-tooltip">
                                <button type="Submit" name="post_id" class="fa fa-heart fa-2x ttd_fav" aria-hidden="true" value="1"></button>
                                <span class="fav-tooltip-text">
                                    <?php 
                                        if (isset($_SESSION['user_id_on'])) {
                                            echo "Favorite this!";
                                        } else {
                                            echo "You must log in to favorite this!";
                                        }
                                    ?>
                                </span>
                            </div>
                        </form>
                    </div>
 
              </div>
            
           
              <div class="col-md-4"style="padding:0px;">
                <div class="featuredimge-album">
                    <img class="img-responsive active" src="../img/covers/sah2.png">
                </div>
              </div>
              <div class="col-md-1">

  		      </div>
            </div>
		  </div>
          
        <div class="space-break"><br><br><br><br>&nbsp;<br></div>
        <div class="space-break"><br>&nbsp;<br></div>
          
        <!-- Campus Feature - Events -->
        <div class="campusmenu-body-events">
          <p id="campusmenu-events-title">Events</p>
          <div class="events-container">
            <div class="col-md-3">
                <div class="events-feat1">
                
                </div>
            </div>
            <div class="col-md-3">
                <div class="events-feat2">
                
                </div>
            </div>
            <div class="col-md-3">
                <div class="events-feat3">
                
                </div>
            </div>
            <div class="col-md-3">
                <div class="events-feat4">
                
                </div>
            </div>
          </div>
        </div>
          
        <div class="space-break"><br><br><br><br>&nbsp;<br></div>
        <div class="space-break"><br>&nbsp;<br></div>
          
          

          
          
          
               <div class="space-break"><br>&nbsp;<br></div>
        <div class="campusmenu-body-articles">
          <div class="row" id="article-item-row">
            <div class="col-md-4 itemcenter">
              <div class="example-1 card campusitem">
                  <div class="wrapper3" style="background: url('../img/artists/music/nico-lang/wordofmouth.png') center/cover no-repeat;">
                    <!--<div class="date">
                      <form id="like-post-form" action="post-like.php" method="POST"><input type="hidden" name="post_id" value="post1"></input><input class="like-input" name="submitlike" type="Submit" value="Like!"></input></form>
                    </div>-->
                    <div class="data">
                      <div class="content">
                        <p id="article-author">Kongo</p>
                      <!--<p>Likes:


                      </p>-->
                        <h2 class="title"><a href="article-1.php">Word Of Mouth</a></h2>
                        <p class="text">Kongo gets plugged back in and quickly sets this remix on fire. Take a listen.
        </p>
                        <label for="show-menu" class="menu-button"><span></span></label>
                      </div>
                      <input type="checkbox" id="show-menu" />
                      <ul class="menu-content">
                        <li>
                          <a href="#" class="fa fa-bookmark-o"></a>
                        </li>
                        <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
                        <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              <div class="space-break">&nbsp;</div>

            </div>
            <div class="col-md-4 itemcenter">
              <div class="example-1 card campusitem">
                <div class="wrapper3" style="background: url('../img/c5.jpg') center/cover no-repeat;">
                    <!--<div class="date">
                      <span class="day">1</span>
                      <span class="month">Feb</span>
                      <span class="year">2017</span>
                    </div>-->
                    <div class="data">
                      <div class="content">
                        <span class="author">Ten Toes Down</span>
                        <h1 class="title"><a href="#">Welcome To Ten Toes Down!</a></h1>
                        <p class="text">This is going to be wild.. hang on</p>
                        <label for="show-menu" class="menu-button"><span></span></label>
                      </div>
                      <input type="checkbox" id="show-menu" />
                      <ul class="menu-content">
                        <li>
                          <a href="#" class="fa fa-bookmark-o"></a>
                        </li>
                        <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
                        <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="space-break">&nbsp;</div>
              </div>
            </div>
            <div class="col-md-4 itemcenter">
              <div class="example-1 card campusitem">
                <div class="wrapper3" style="background: url('../img/c5.jpg') center/cover no-repeat;">
                    <!--<div class="date">
                      <span class="day">1</span>
                      <span class="month">Feb</span>
                      <span class="year">2017</span>
                    </div>-->
                    <div class="data">
                      <div class="content">
                        <span class="author">Ten Toes Down</span>
                        <h1 class="title"><a href="#">Welcome To Ten Toes Down!</a></h1>
                        <p class="text">This is going to be wild.. hang on</p>
                        <label for="show-menu" class="menu-button"><span></span></label>
                      </div>
                      <input type="checkbox" id="show-menu" />
                      <ul class="menu-content">
                        <li>
                          <a href="#" class="fa fa-bookmark-o"></a>
                        </li>
                        <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
                        <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="space-break">&nbsp;</div>
              </div>
            </div>
          </div>
        </div>


        <div class="campusmenu-body-ftvideo">

        </div>
      </div>

    </section>
    <div class="space-break">&nbsp;<br></div>
    <br>
    <br>
    <hr>



<div w3-include-html="includes/footer.html"></div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true"></script>
        <script src="../js/index.js" type="text/javascript"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
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
        <script src="../js/new1.js"></script>
        <script>
        function hidetopmenu() {
          document.getElementById("campusmenu-topmenu").style.height = "10px;";
          document.getElementById("topmenu-spacebreak").style.display = "none";
          document.getElementById("showmenubutton").style.display = "block";
        }
        function showtopmenu() {
          document.getElementById("campusmenu-topmenu").style.display = "block";
          document.getElementById("topmenu-spacebreak").style.display = "block";
          document.getElementById("showmenubutton").style.display = "none";
        }
        </script>
    <script>
    $(document).ready(function() {
        var $divView = $('div.view2');
        var innerHeight = $divView.removeClass('view2').height();
        $divView.addClass('view2');

        $('i.slide2').click(function() {
            $('div.view2').animate({
              height: (($divView.height() == 1)? innerHeight  : "300px")
            }, 400);
            return false;
        });
    });
  </script>
  <script>
    function enlargece() {
      document.getElementById('campusmenu-entrepreneurs').style.height = "300px";
      document.getElementById('elarge1').style.display = "none";
      document.getElementById('esmall1').style.display = "inline-block";
    }
    function ensmallce() {
      document.getElementById('campusmenu-entrepreneurs').style.height = "1px";
      document.getElementById('esmall1').style.display = "none";
      document.getElementById('elarge1').style.display = "inline-block";
    }
    function arsmallce() {
      document.getElementById('campusmenu-artists').style.height = "1px";
      document.getElementById('asmall1').style.display = "none";
      document.getElementById('alarge1').style.display = "inline-block";
    }
    function arlargece() {
      document.getElementById('campusmenu-artists').style.height = "300px";
      document.getElementById('alarge1').style.display = "none";
      document.getElementById('asmall1').style.display = "inline-block";
    }
  </script>
  <script type="text/javascript">
	  function slideSwitch() {
		var $active = $('.featuredimges-slider img.active');

		if ( $active.length == 0 ) $active = $('.featuredimges-slider img:last');

		var $next =  $active.next().length ? $active.next()
			: $('.featuredimges-slider img:first');

		$active.addClass('last-active');

		$next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
				$active.removeClass('active last-active');
			});
	}
    function changeftcampustext1() {
      document.getElementById('ftcontent-left1').style.display = "block";
      document.getElementById('ftcontent-left2').style.display = "none";
      document.getElementById('ftcontent-left3').style.display = "none";
      document.getElementById('ftcontent-right1').style.display = "block";
      document.getElementById('ftcontent-right2').style.display = "none";
      document.getElementById('ftcontent-right3').style.display = "none";
    }
    function changeftcampustext2() {
      document.getElementById('ftcontent-left1').style.display = "none";
      document.getElementById('ftcontent-left2').style.display = "block";
      document.getElementById('ftcontent-left3').style.display = "none";
      document.getElementById('ftcontent-right1').style.display = "none";
      document.getElementById('ftcontent-right2').style.display = "block";
      document.getElementById('ftcontent-right3').style.display = "none";
    }
    function changeftcampustext3() {
      document.getElementById('ftcontent-left1').style.display = "none";
      document.getElementById('ftcontent-left2').style.display = "none";
      document.getElementById('ftcontent-left3').style.display = "block";
      document.getElementById('ftcontent-right1').style.display = "none";
      document.getElementById('ftcontent-right2').style.display = "none";
      document.getElementById('ftcontent-right3').style.display = "block";
    }
      
    
  </script>
  <script type="text/javascript" src="slick/slick.min.js"></script>



</html>
