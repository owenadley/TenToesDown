<?php
//header("Location: Campus0.html");
//exit;

//Connect To Database

session_start();
if (isset($_SESSION['user_name_on'])) {


  $hostname="107.180.27.156";
  $username="oadley12";
  $password="Roksa412";
  $dbname="tentoesdown";
  $usertable="article-comments";

  // Create connection
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  //gets all variables for creating a new forum row in the database

  $post_title = $_POST['post_title'];
  $post_description = $_POST['post_description'];
  $post_date = date("Y-m-d H:i:s"); // If your mysql column is datetime


  // creates sql to add the new forum to the database
  $sqlnewforum = "INSERT INTO  `ttd-campus-batch01`
					(  `post_title` ,  `post_description` ,  `post_date`) VALUES
					('$post_title',  '$post_description',  '$post_date')";


  // attempt to add the new forum to the database
  if (mysqli_query($conn, $sqlnewforum)) {
    $postid = mysqli_insert_id($conn);

  	echo ("<script>window.location='http://www.tentoesdwn.com/artist-forums.php';</script>");




  } else {

  	echo ("<script>window.history.back();</script>");
  	echo ("<script>alert('Were sorry, we can't seem to create your forum right now..');</script>");

  }

} else {

	echo ("<script>window.history.back();</script>");
	echo ("<script>alert('You must be logged in to create a forum!');</script>");

}

  mysqli_close($conn);
  goback();
?>
