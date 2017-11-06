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
  $forum_username = $_SESSION['user_name_on'];
  $forum_title = $_POST['forum_gettitle'];
  $forum_description = $_POST['forum_getdescription'];
  $forum_date = date("Y-m-d H:i:s"); // If your mysql column is datetime


  // creates sql to add the new forum to the database
  $sqlnewforum = "INSERT INTO  `artist-forums`
					(  `aforum_user` ,  `aforum_date` ,  `aforum_title` ,  `aforum_description` ) VALUES
					('$forum_username',  '$forum_date',  '$forum_title',  '$forum_description')";


  // attempt to add the new forum to the database
  if (mysqli_query($conn, $sqlnewforum)) {
    $forumid = mysqli_insert_id($conn);

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
