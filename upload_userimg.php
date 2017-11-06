<?php
//header("Location: Campus0.html");
//exit;
//Sample Database Connection Syntax for PHP and MySQL.
//Connect To Database

session_start();
if (isset($_SESSION['user_name_on'])) {

  $hostname="107.180.27.156";
  $username="oadley12";
  $password="Roksa412";
  $dbname="tentoesdown";

  // Create connection
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
                            	echo ("<script>window.location='http://www.tentoesdwn.com/artist-forums.php';</script>");
  }

    if(isset($_POST['submit'])) {
          $imgFile = $_FILES['new_userPic']['name'];
          $tmp_dir = $_FILES['new_userPic']['tmp_name'];
          $imgSize = $_FILES['new_userPic']['size'];
        
          $content = file_get_contents($tmp_dir);
        
		  $upload_dir = 'userimages/';
		  $upload_ext = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
        
        
		  
		  // valid image extensions
		  $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

		  // rename uploading image
		   $userpic = $imgFile;
		  
		   // allow valid image file formats
		   if(in_array($upload_ext, $valid_extensions)){   
                // Check file size '5MB'
                if($imgSize < 5000000)    {
                    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
					$sqladd = "UPDATE `ttd` SET `usrPicture` = '$imgFile' WHERE `userID` ='".$_SESSION['user_id_on']."' ";	
        
					if (mysqli_query($conn, $sqladd)) {
						$_SESSION['user_img_on'] = $imgFile;
						echo ("<script>window.location='http://www.tentoesdwn.com/mydashboard.php';</script>");
					  
					} else {

						$_SESSION['errors'] = array($_SESSION['user_id_on']);

							echo ("<script>window.location='http://www.tentoesdwn.com/index.php';</script>");

					}	
				
                } else {
                      	
                }
		   } else {

			}
       
        
        
    } else {
                	echo ("<script>window.location='http://www.tentoesdwn.com/artist-forums.php';</script>");
    }
} else {
                          	echo ("<script>window.location='http://www.tentoesdwn.com/artist-forums.php';</script>");
}
          
mysqli_close($conn);
?>
