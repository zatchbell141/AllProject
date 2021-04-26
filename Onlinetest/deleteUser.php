<?php
 require'Includes/bcaConn.php';
	session_start();
	if(!isset($_SESSION['admin_id'])){
		header("Location: admin.php");
	}
	$user_id=$_GET['user_id'];
	$del_user="DELETE FROM users WHERE user_id='$user_id' ";
	$con->query($del_user);

	$test_user="DELETE FROM test_result WHERE user_id='$user_id' ";
	$con->query($test_user);
	/*mysqli_query($conn,"DELETE FROM test_result_desc WHERE user_id='$user_id' ");*/
	header("Location: searchusers.php");
?>