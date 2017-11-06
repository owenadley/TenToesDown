<?php
//header("Location: Campus0.html");
//exit;


//Connect To Database

session_start();
if (isset($_SESSION['user_on'])) {

 
  $hostname="107.180.27.156";
  $username="oadley12";
  $password="Roksa412";
  $dbname="mydash";

  // Create connection
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  //gets all variables for creating a new forum row in the database
 
  $color = $_POST['cor'];
  $user = $_SESSION['userid_on'];
  $date = date("Y-m-d H:i:s");    // If your mysql column is datetime
  $userid = $_SESSION['userid_on'];
    
  if ($color == ("#4986E7")) {
      $color = "#4986E7";
  } else if ($color == ("#5484ED")) {
      $color = "#5484ED";
  } else if ($color == ("#A4BDFC")) {
      $color = "#A4BDFC";
  } else if ($color == ("#46D6DB")) {
      $color = "#46D6DB";
  } else if ($color == ("#7AE7BF")) {
      $color = "#7AE7BF";
  } else if ($color == ("#51B749")) {
      $color = "#51B749";
  } else if ($color == ("#FBD75B")) {
      $color = "#FBD75B";
  } else if ($color == ("#FFB878")) {
      $color = "#FFB878";
  } else if ($color == ("#FF887C")) {
      $color = "#FF887C";
  } else if ($color == ("#DC2127")) {
      $color = "#DC2127";
  } else if ($color == ("#DBADFF")) {
      $color = "#DBADFF";
  } else if ($color == ("#E1E1E1")) {
      $color = "#E1E1E1";
  }
  // creates sql to add the new site to the database
  $sqlnewevent = "SELECT `color` FROM `users` WHERE `id` = '$userid'"; 


  // attempt to add the new forum to the database
  if ($result = mysqli_query($conn, $sqlnewevent)) {
 
      $sqlUpdateColor = "UPDATE `users` SET `color` = '$color' WHERE `id` = '$userid'";
      
      if (mysqli_query($conn, $sqlUpdateColor)) {
          //successful
          header("Location:index.php");
          exit; 
      }
 

  } else {


  	echo ("<script>alert('Were sorry, we cant seem to create your forum right now..');</script>");
      echo mysqli_error($conn);
  }
 
} else {


	echo ("<script>alert('You must be logged in to create a forum!');</script>");
echo mysqli_error($conn);
}

  mysqli_close($conn);

?>
