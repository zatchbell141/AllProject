 <?php
  $fullname=$_GET['varname'];
  $examyrs=$_GET['examyrs'];
  $prn=$_GET['prnno'];
  $seat=$_GET['seat'];
  $sid=$_GET['sid'];  
  $date=$_GET['date'];
  include 'Includes/Conn.php';
  $isql="select count(inter) As Internal from backlog where seat='$seat' and inter='Internal' and date='$date'";
  $iresult=$con->query($isql);
  $irow=$iresult->fetch_assoc();

  $esql="select count(exter) As External from backlog where seat='$seat' and exter='External' and date='$date'";
  $eresult=$con->query($esql);
  $erow=$eresult->fetch_assoc();


    $psql="select count(pract) As Pratical from backlog where seat='$seat' and pract='Pratical' and date='$date'";
  $presult=$con->query($psql);
  $prow=$presult->fetch_assoc();

  $ifsql="select fees from fees where name='Internal'";
  $ifresult=$con->query($ifsql);
  $ifrow=$ifresult->fetch_assoc();


  $efsql="select fees from fees where name='External'";
  $efresult=$con->query($efsql);
  $efrow=$efresult->fetch_assoc();

   $pfsql="select fees from fees where name='Pratical'";
  $pfresult=$con->query($pfsql);
  $pfrow=$pfresult->fetch_assoc();

 $totalinter=$irow['Internal']*$ifrow['fees'];
 $totalexter=$erow['External']*$efrow['fees'];
 $totalpract=$prow['Pratical']*$pfrow['fees'];
 $totalfees=$totalinter+$totalexter+$totalpract;

  $rsql="SELECT ReceiptNewNo FROM `receipt` ORDER BY id DESC";
  $rresult=$con->query($rsql);
  $rrow=$rresult->fetch_assoc();
  $recptno=explode('-', $rrow['ReceiptNewNo']);
  $rn=$recptno[1]+1;
  ?>