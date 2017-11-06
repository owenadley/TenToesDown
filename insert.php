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
$newusername = $_POST['new_username'];
$newpassword = $_POST['new_password'];

$sqlcheck = "SELECT * FROM  `ttd` WHERE  `username` =  '$username'AND  `password` =  '$password'LIMIT 0 , 30";
$numrows = mysql_num_rows($sqlcheck);
//while loop
  while ($row = mysql_fetch_assoc($sqlcheck))
  {
    $dbusername = $row['username'];
    $dbpassword = $row['password'];
  }
  else
      die("incorrect username/password!");
}
else
  echo "user does not exist!";
}
else
    die("please enter a username and password!");



}
$sql = "INSERT INTO $usertable (username, password)
VALUES ('$newusername', '$newpassword')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo ("<script>window.location.replace ('http://www.tentoesdwn.com/Campus0.html');</script>");
mysqli_close($conn);

?>
