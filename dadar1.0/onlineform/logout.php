<?php

include 'Includes/session.php';
session_destroy();

	header("location:login.php"); // Is Used To Destroy All Sessions
//Or
//if(isset($_SESSION['login_user']))
//unset($_SESSION['login_user']);  //Is Used To Destroy Specified Session
?>