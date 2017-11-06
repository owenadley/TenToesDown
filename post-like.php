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
  
  $checkForTable = "SHOW TABLES LIKE 'usr-fav-posts'";
  $tableExists = mysqli_num_rows($checkForTable) > 0;
  
	if ($tableExists) {
		$sqlcheck = "SELECT * FROM `usr-fav-posts` WHERE  `post_id` =  '$postid' AND `user_id` = '$userid' LIMIT 0 , 30";
		$checkpost = mysqli_query($conn, $sqlcheck);
		$check_post = mysqli_fetch_row($checkpost);

	    if ($check_post>0) {

          echo "<script>alert('" . $postid . " you already have liked this');</script>";

        } else {
            
            $sqlnewfav = "INSERT INTO  `tentoesdown`.`likes` (`postid` ,`postlikes`)VALUES ('$postid',  '1');";            
            if (mysqli_query($conn, $sqlnewfav)) {
                echo "New like created successfully"; 
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }  
        }
        
     } else {
        
        $sqlnewtable_fav = "CREATE TABLE user_favorites_".$postid." (
          user_id INT NOT NULL,
          post_id INT NOT NULL,
          PRIMARY KEY (user_id, post_id),
          FOREIGN KEY user_id REFERENCES ttd (user_id),
          FOREIGN KEY post_id REFERENCES movies (post_id)";
        
        if (mysqli_query($conn, $sqlnewtable_fav)) {
            echo "New table created";
        } else {
            echo "Failed to create the new table";
        }
     }

  mysqli_close($conn);

  echo ("<script>window.location.replace ('http://www.tentoesdwn.com/Campus0.php');</script>");

}

?>
