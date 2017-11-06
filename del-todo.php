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
  $dbname="mydash";

  // Create connection
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
 

 

  $todoid = $_POST['todo_id'];
  $sqlcheck = "DELETE FROM `todos` WHERE `id` = '$todoid'";

  if (mysqli_query($conn, $sqlcheck)) {
    echo "Record deleted successfully";
      echo ("<script>window.location.replace ('http://www.tentoesdwn.com/PSite/index.php');</script>");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
      echo ("<script>window.location.replace ('http://www.tentoesdwn.com/artist-forums.php');</script>");
}




  mysqli_close($conn);
} else {

  echo ("<script>window.location.replace ('http://www.tentoesdwn.com/artist-forums.php');</script>");

}

?>
