<?php
	mysql_connect("localhost","root","");
	mysql_select_db("mags");
	//include 'Conn.php';
	echo $n=$_POST["number"];
	$s = "insert into result(name,prn,seat,code,subject,Mode) values";
	for($i=0;$i<$_POST['numbers'];$i++)
	{
		$s .="('".$_POST['name'][$i]."','".$_POST['prn'][$i]."','".$_POST['seat'][$i]."','".$_POST['code'][$i]."','".$_POST['subj'][$i]."','".$_POST['mode'][$i]."'),";

	}
	$s = rtrim($s,",");
	if(!mysql_query($s))
		echo mysql_error();
	else
		echo "Records Saved <br />";
	header("location:backlog.php");

?>