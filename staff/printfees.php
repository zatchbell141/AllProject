<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include 'Conn.php';
include 'session.php';
$id=$_GET['varname'];

$nsql="select * from receipt where id='".$id."'";
$nresult=$con->query($nsql);
$nrow=$nresult->fetch_assoc();



$sql="select * from receipt where id='".$id."' and receiptNo='".$nrow['receiptNo']."'";
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
        <div align="center" id="hiderow" ><a  href="receipt.php" >back to  Fees</a><br/>
           
        </div>
        <?php 
		        $fsql="select SUM(fees) As Total,SUM(paid) As Paid, SUM(balance) As Balance,sum(dis) as dic from receipt where studentid='".$row['studentid']."' and receiptNo='".$nrow['receiptNo']."'";
                $fresult=$con->query($fsql); 
                $frow=$fresult->fetch_assoc();
                  
		      ?>
	<div id="page-wrap">

			<h1 id="header">Receipt</h1>
		
		<div align="left">
		
            <br/>
              <img id="image" src="images/Receipt.JPG"  width="350" />
          
         
	
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

          
			<p style="font-size:120%;">
                <br/>
               
			Name:&nbsp;<?php echo $row['fullname'];?><br>
			Payment type:&nbsp;<?php echo $row['payment'];?><br>
           
			<?php

			$cn=$row['chequeno'];
			$cd=$row['chequedate'];
            $cd=strtotime($cd);
            $cd=date('d-m-Y',$cd);
            
			$cb=$row['bank'];
            $pt=$row['payment'];
				if($pt=="Cash")
				{
					echo "";
				}
				else
				{
					echo "<p  style='font-size:120%;'>Cheque Number:$cn<br>";
					echo "<p  style='font-size:120%;'>Cheque Date:$cd<br>";
			 		echo "<p  style='font-size:120%;'>Bank Name:$cb</p><br> ";
				}

          ?>

            <table id="meta">
                <tr>
                    <td class="meta-head">Receipt:</td>
                    <td><div align="center"><b><?php echo $row['receiptNo'];?></b></div></td>
                </tr>
                 <tr>
                    <td class="meta-head">Batch Name:</td>
                    <td align="center"><div align="center"><b><?php echo $row['fromno'];?></b></div></td>
                </tr>
                 <!--<tr>
                    <td class="meta-head">Batch Time:</td>
                    <td align="center"><div align="center"><b></b></div></td>
                </tr>-->
                <tr>

                    <td class="meta-head">Date:</td>
                    <td align="center"><div align="center"><b><?php 
                        $start=$row['date'];
                         $start=strtotime($start);
                        $start=date('d-m-Y',$start);
                    echo $start; ?></b></div></td>
                </tr>
                <tr>
                    <td class="meta-head">Fees Amount:</td>
                    <td align="center"><div align="center"><b><?php echo $frow['Total'];?></b></div></td>
                </tr>
                   
            </table>
		
		</div>
	
		<table id="items">
		
		 <tr>
		     <th>Sr.No</th>
		      <th>Fees Particulars</th>
		      <th>Amount</th>
		      </tr>
		      <?php 
		        $fcsql="select * from receipt where studentid='".$row['studentid']."'and receiptNo='".$nrow['receiptNo']."'";
                $fcresult=$con->query($fcsql);
                if($fcresult->num_rows>0)
                {
                    $no=0;
                    while($fcrow=$fcresult->fetch_assoc())
                   {
                       $no++;
                        $cnsql="select * from coursesname where id='".$fcrow['coursename']."'";
                                            $cnresult=$con->query($cnsql);
                                            $cnrow=$cnresult->fetch_assoc();
                                            $course=$cnrow['name'];
                                            if(!$course==null)
                                            {
                                                $course=$cnrow['name'];
                                            }
                                            else
                                            {
                                                $course=$row['coursename'];
                                            }
		      ?>
		      	<tr>
		      		<td  align="center"><?php echo $no;?></td>
		      		<td><?php echo $course;?>(<?php echo $fcrow['batch'];?>)</td>
		      		<td  align="center" ><b><?php echo $fcrow['fees'];?></b></td>
		      	</tr>
		          		<?php
                   }
                }
		      	?>
		      	<!--<tr>
		      		<td  align="center"></td>
		      		<td></td>
		      		<td align="center"><b><?php echo $row['dis'];?></b></td>
		      	</tr>-->
		      
		      	<!--<tr>
		      		<td  align="center"><?php echo $no;?></td>
		      		<td>Administrative</td>
		      		<td align="center">&nbsp;</td>
		      	</tr>
		      	<tr>
		      		<td align="center" ><?php echo $no;?></td>
		      		<td></td>
		      		<td align="center">&nbsp;</td>
		      	</tr>-->
		      	  
		  <tr>

		      
		     <td colspan="2"class="blank"align="right">Total</td>
		      <td colspan="2" class="total-line" ><div align="center"><b><?php echo $frow['Total'];?></b></div></td>
		      
		  </tr>
		  <tr>
		      
		      <td colspan="2"class="blank"align="right">Paid Fees</td>
		      <td colspan="2" class="total-line" ><div align="center"><b><?php echo $frow['Paid'];?></b></div></td>
		      
		  </tr>
		   <tr>
              
              <td colspan="2"class="blank"align="right">Balance Fees</td>
              <td colspan="2" class="total-line" ><div align="center"><b><?php echo $frow['Balance']+ $frow['dic'];?></b></div></td>
              
          </tr>
		<tr>
			<td colspan="3">
				 <?php
				 $textfield=$frow['Paid'];
function convert_number_to_words($number) {
   
    $hyphen      = '-';
    $conjunction = '  ';
    $separator   = ' ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'Zero',
        1                   => 'One',
        2                   => 'Two',
        3                   => 'Three',
        4                   => 'Four',
        5                   => 'Five',
        6                   => 'Six',
        7                   => 'Seven',
        8                   => 'Eight',
        9                   => 'Nine',
        10                  => 'Ten',
        11                  => 'Eleven',
        12                  => 'Twelve',
        13                  => 'Thirteen',
        14                  => 'Fourteen',
        15                  => 'Fifteen',
        16                  => 'Sixteen',
        17                  => 'Seventeen',
        18                  => 'Eighteen',
        19                  => 'Nineteen',
        20                  => 'Twenty',
        30                  => 'Thirty',
        40                  => 'Fourty',
        50                  => 'Fifty',
        60                  => 'Sixty',
        70                  => 'Seventy',
        80                  => 'Eighty',
        90                  => 'Ninety',
        100                 => 'Hundred',
        1000                => 'Thousand',
        1000000             => 'Million',
        1000000000          => 'Billion',
        1000000000000       => 'Trillion',
        1000000000000000    => 'Quadrillion',
        1000000000000000000 => 'Quintillion'
    );
   
    if (!is_numeric($number)) {
        return false;
    }
   
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
   
    $string = $fraction = null;
   
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
   
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
   
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
   
    return $string;
}

echo '<b>'.convert_number_to_words($textfield)."&nbsp;Only".'</b>';
?>



			</td>
				</tr>
			<tr>
			<td colspan="3"><b>Your Are Eligible for <?php 
			$id=$row['year'];
			$cmsql="select * from batch where id='".$id."'";
                                            $cmresult=$con->query($cmsql);
                                            $cmrow=$cmresult->fetch_assoc();
                                            echo $cmrow['name'];
			?></b></td>
			</tr>
			<tr>
			<td colspan="3"><b>After This  Date:<?php 
			$vd= $row['vaild'];
			$vd=strtotime($vd);
            $vd=date('d-m-Y',$vd);
            echo $vd;
			?> Your Grace Period Fees Charge:<?php echo $row['points'];?> RS</b></td>
		</tr>
		</table>
		
		<div>
		Receipt will be accepted only when DD/Cheque Cleared.<br/>
        Reg Office: Sir Elly Kadoorie & Jr. College, Mazgaon Mumbai: 400010
		</div>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Authorised Signatory<br/>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                                                $scname=$row['admittedby'];
                                                $scsql="select fullname from staff where staffId='".$scname."'";
                                                $scresult=$con->query($scsql);
                                                $scrow=$scresult->fetch_assoc();
                                                echo $scrow['fullname'];
                                           
                
                
                ?>
			</div>
	</div>
	<div class="fter">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
      

</body>

</html>