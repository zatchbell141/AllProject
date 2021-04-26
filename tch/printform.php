<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include 'Conn.php';
$id=$_GET['varname'];
$sql="select * from addonline where fullname='$id'";
$result=$con->query($sql);
$row=$result->fetch_assoc();

$feessql="select * from receipt where FullName='$id' order by id desc";
$feesresult=$con->query($feessql);
$feesrow=$feesresult->fetch_assoc();

   	$receiptno=$feesrow['ReceiptNewNo'];
    $imgfeessql="select * from receiptupload where receiptid='$receiptno' order by id desc";
    $imgfeesresult=$con->query($imgfeessql);
    $imgfeesrow=$imgfeesresult->fetch_assoc();
?>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Print Form</title>
	
		<link rel='stylesheet' type='text/css' href='form/form.css' madia="screen"/>
        <!--<link rel='stylesheet' type='text/css' href='css/Invloce1.css' madia="print"/>-->
	<link rel='stylesheet' type='text/css' href='receipt/css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>


</head>

<body>
     <div align="center" id="hiderow" ><h1><input type ="submit"  value ="Print" onclick="window.print()" name="tsubmit"></h1></div>
        <div align="center" id="hiderow" ><a  href="#" >back to BCA </a><br/>
           
        </div>
	<div id="page-wrap">

			<h1 id="header">BCA Online Form</h1>
		
		<div align="left">
            <br/>
              <img id="image" src="images/bcaform.jpg"  width="300" />
		</div>
		<div align="left">
            <br/>
              <img id="image" src="<?php echo $row['stdphoto']?>" height="200"  width="150" />
		</div>
		<div style="clear:both"></div>
		<p style="font-size:120%;">
			<br>
			 <table id="items">
        <tr class="success">
            <th colspan="5" style=" text-align: center;"><b>Center Details</b></th>
        </tr>
        <tr>
             <td><b>Course:<?php echo $row['course'];?></b></td>
            <td><b>Center Code:<?php echo $row['centercode'];?></b></td>
            <td><b>Course Code:<?php echo $row['coursecode'];?></b></td>
            <td colspan="2"><b>Admission Status:<?php echo $row['addmissionstatus'];?></b></td>
            
        </tr>
    </table>
			<table id="items">
				<tr>
					<th colspan="4">Personal Details</th>
				</tr>
				<tr>
					<td colspan="4" style="text-align: center;"><b>Fullname:<?php echo $row['fullname']?></b></td>
				</tr>
				<tr>
					<td><b>Last Name:<?php echo $row['lastname']?></b></td>
					<td><b>Name:<?php echo $row['name']?></b></td>
					<td><b>Father name:<?php echo $row['fathername']?></b></td>
					<td><b>Mother Name:<?php echo $row['mothername']?></b></td>
				</tr>
				<tr>
					<td><b>Gender:<?php echo $row['gender']?></b></td>
					<td><b>Date Of Birth:<?php echo $row['dob']?></b></td>
					<td><b>Contact No:<?php echo $row['contact']?></b></td>
					<td><b>Address:<?php echo $row['address']?></b></td>
					
				</tr>
				<tr>
					<td><b>State:<?php echo $row['state']?></b></td>
					<td><b>Pin Code:<?php echo $row['pin']?></b></td>
					<td><b>Email:<?php echo $row['email']?></b></td>
					<td><b>Aadhar Card Number:<?php echo $row['aadhar']?></b></td>
				</tr>
			</table>
			<table id="items">
				<tr>
					<th colspan="4">Qualification Details</th>
				</tr>
				<?php
					$univer2=$row['univer1'];
					$unv2sql="select * from coldata where id='$univer2'";
					$unv2result=$con->query($unv2sql);
					$unv2row=$unv2result->fetch_assoc();

				?>
				<tr>
            <td><b>Qualification:<?php echo $row['qulic1'];?></b></td>
            <td><b>University:<?php echo $unv2row['name'];?></b></td>
            <td><b>Passing Year:<?php echo $row['year1'];?></b></td>
            <td colspan="2"><b>Percentage:<?php echo $row['per1'];?></b></td>
            
        </tr>
        <?php
        	

			$id=$row['univer2'];
			$uni2sql="select * from coldata where id='$id'";
			$uni2result=$con->query($uni2sql);
			$uni2row=$uni2result->fetch_assoc();
        ?>
         <tr>	
            <td><b>Qualification:<?php echo $row['qulic2'];?></b></td>
            <td><b>University:<?php echo $uni2row['name'];?></b></td>
            <td><b>Passing Year:<?php echo $row['year2'];?></b></td>
            <td><b>Percentage:<?php echo $row['per2'];?></b></td>
        </tr>

			</table>
			<table id="items">
				<tr>
					<th colspan="4">FEES Details</th>
				</tr>
				<tr>
					<td><b>Receipt No:<?php echo $feesrow['ReceiptNewNo'];?></b></td>
					<td><b>Total Fees:<?php echo $feesrow['Total'];?></b></td>
					<td><b>Paid Fees:<?php echo $feesrow['Paid'];?></b></td>
					<td><b>Balance Fees:<?php echo $feesrow['Balance'];?></b></td>
				</tr>
				<tr>
					<td><b>Payment Type:<?php echo $feesrow['PaymentType'];?></b></td>
					<td><b>UTRNO/DD/Cheque Number:<?php echo $feesrow['ChequeNo'];?></b></td>
					<td><b>Chaque/DD/NEFT/MT Date:<?php 
						$date=$feesrow['ChequeDate'];
							    $date=strtotime($date);
							    $date=date('d-m-Y',$date);
							    echo $date

					?></b></td>
					<td><b>Cheque Bank/Remitter Bank:<?php echo $feesrow['Bank'];?></b></td>
					
				</tr>
				<tr>
					<td colspan="4"><b>Beneficiary Bank:<?php echo $feesrow['ben'];?></b></td>
				</tr>
  			  </table>
		</p>
		<br/>
		<br/>
		<br/>
		<br/>
        <br/>
        <br/>
        <br/>
        <br/>
		<div align="right">
			____________________________<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applicant's Signture

			</div>
				<br/>
		<br/>
		<br/>
		<br/>
        <br/>
        <br/>
        <br/>
        <br/>
        	<br/>
		
		<br/>
		<br/>
        <br/>
        <br/>
        <br/>
        <br/>
        	<br/>
		
        <br/>
        <br/>
        <br/>
        <br/>
			<p style="font-size:120%;">
			<table id="items">
				<tr>
					<th colspan="4">FEES Details</th>
				</tr>
				<tr>
					 <td colspan="4"><img src="<?php echo $imgfeesrow['file'];?>" width="1024" height="1000"></td>
				</tr>
  			  </table>
  			</p>

	</div>
	
</body>

</html>