<?php
//header("Location: Campus0.html");
//exit;
//Sample Database Connection Syntax for PHP and MySQL.
//Connect To Database

session_start();
$hostname="107.180.27.156";
$username="oadley12";
$password="Roksa412";
$dbname="tentoesdown";
$usertable="ttd";


// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $enterusername = $_POST['enter_username'];
    $enterpassword = $_POST['enter_password'];

if ($username && $password) {
    
    $enterusername = mysqli_real_escape_string($conn, $enterusername);
    $enterpassword = mysqli_real_escape_string($conn, $enterpassword);

    $sqlcheck = "SELECT * FROM  `ttd` WHERE  `username` =  '$enterusername'AND  `password` =  '$enterpassword'LIMIT 0 , 30";
    $run_user = mysqli_query($conn, $sqlcheck);
    
        
    
    if (mysqli_num_rows($run_user) > 0) {
        
        while ($row = mysqli_fetch_assoc($run_user)) {
            
            $checkUser = $row['username'];
            $checkPass = $row['password'];

            if ($checkUser == $enterusername && $checkPass == $enterpassword) {
                      $_SESSION['user_name_on'] = $enterusername;
                      $_SESSION['user_id_on'] = $row['userID'];
                      $_SESSION['user_img_on'] = $row['usrPicture'];
            }
			
          header("Location:Campus0.php");
            exit;
          //echo ("<script>window.location.replace ('http://www.tentoesdwn.com/Campus0.php');</script>");
        }

    } else {
        $_SESSION['errors'] = array("We can't seem to find thse credentials in our system...");
		//String array_push($_SESSION['errors'], "We can't seem to find those credentials in our system...");
        header("Location:index.php");
        exit;
    }
}

mysqli_close($conn);

?>
