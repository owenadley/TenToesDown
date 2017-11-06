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
  $usertable="likes";

  // Create connection
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $postid = $_POST['post_id'];
  $userid = $_SESSION['user_id_on'];
  $post_date = date("Y-m-d H:i:s"); // If your mysql column is datetime


		$sqlcheck = "SELECT * FROM `usrfavposts` WHERE `post_id` = '$postid' AND `user_id` = '$userid' LIMIT 0 , 30";
		$checkpost = mysqli_query($conn, $sqlcheck);
		$check_post = mysqli_fetch_assoc($checkpost);

	    if ($check_post>0) {

            //you have already liked this!
            header("Location:Campus0.php");
            exit;

        } else {
            
            $sqlnewfav = "INSERT INTO `usrfavposts` (`user_id` ,`post_id`, `date`)VALUES ('$userid',  '$postid', '$post_date');";            
            if (mysqli_query($conn, $sqlnewfav)) {
                
                //New like created successfully
                header("Location:Campus0.php");
                exit;
                
            } else {
                
                //error
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                header("Location:Campus0.php");
                exit;

            }  
        }
        
     

  mysqli_close($conn);

  //echo ("<script>window.location.replace ('http://www.tentoesdwn.com/Campus0.php');</script>");

}
?>
