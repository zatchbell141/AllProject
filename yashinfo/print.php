<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include 'Conn.php';
$id=$_GET['varname'];

$sql="select * from others where id='".$id."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
?>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Receipt</title>
	
		<link rel='stylesheet' type='text/css' href='css/Invloce.css' madia="screen"/>
        <!--<link rel='stylesheet' type='text/css' href='css/Invloce1.css' madia="print"/>-->
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>
     <div align="center" id="hiderow" ><h1><input type ="submit"  value ="Print" onclick="window.print()" name="tsubmit"></h1></div>
        <div align="center" id="hiderow" ><a  href="others.php" >back to Other</a><br/>
        </div>
        <table>
        	<tr>
        		<th>TILAK MAHARASHTRA VIDYAPEETH-PUNE</th>
        	</tr>
        </table>
    </body>
</html>