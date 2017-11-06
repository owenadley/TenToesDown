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
  $usertable="article-comments";

  // Create connection
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $comment_postid = $_POST['post_id'];
  $comment_username = $_SESSION['user_name_on'];
  $comment_value = $_POST['enter_new_comment'];
  $comment_date = date("Y-m-d H:i:s"); // If your mysql column is datetime

  
  $sqlcomment = "INSERT INTO  `ttdpostcomments01` (  `username` ,  `commentValue` ,  `commentDate` , `postID`) VALUES ('$comment_username',  '$comment_value',  '$comment_date',  '$comment_postid')";

  if (mysqli_query($conn, $sqlcomment)) {
      
    // New comment created successfully
    // echo "newcommentsubmitted";
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
      
      
  } else {
    echo "<script>alert('nope');</script>";
  }

  } else {
    echo "You must be logged in!";
  }

  mysqli_close($conn);

?>
