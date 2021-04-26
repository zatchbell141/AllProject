<?php
	
	 include 'Includes/bcaConn.php';
	

		if(isset($_GET['varname']))
		{
			$adminid=$_GET['varname'];
			$admsql="select * from admin where id='$adminid'";
	        $admresult=$con->query($admsql);
	        $admrow=$admresult->fetch_assoc();
		}
		
		if(isset($_GET['editadmission']))
		{
	        $admyrsid=$_GET['editadmission'];
			$admyrssql="select * from admissionyrs where id='$admyrsid'";
	        $admyrsresult=$con->query($admyrssql);
	        $admyrsrow=$admyrsresult->fetch_assoc();
	    }

	    if(isset($_GET['editbacklogfees']))
		{
	        $backlogfeesid=$_GET['editbacklogfees'];
			$backlogfeessql="select * from backfees where id='$backlogfeesid'";
	        $backlogfeesresult=$con->query($backlogfeessql);
	        $backlogfeesrow=$backlogfeesresult->fetch_assoc();
	    }
	
?>