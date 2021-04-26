<?php


//$databaseHost = "localhost";
 //$databaseUser = "root";
 //$databasePassword = "";
 //$databaseName = "mags";

     // $con=mysqli_connect($databaseHost ,$databaseUser ,$databasePassword,$databaseName)or die ('Connection Error');
      //mysqli_select_db($con,"mags") or die ('Database Error');
include 'Conn.php';

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
//$ses_sql=mysql_query("select pfNpsNo from regusers where pfNpsNo='$user_check'", $con);
//$row = mysql_fetch_assoc($ses_sql);
//$login_session =$row['pfNpsNo'];

if(!isset($user_check)){
mysql_close($con); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
echo $user_check;
}
?>