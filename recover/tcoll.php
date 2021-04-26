<?php session_start();
include 'Conn.php';
$user_check=$_SESSION['login_user'];
if(!isset($user_check))
{
    header("location: index.php");
    mysqli_close($con);
}
?>
<!doctype html>
<html class="no-js" lang="">

<?php include 'head.php' ?>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {padding: 10px 24px;}
</style>
    <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
        <?php include 'header.php'?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php include 'menumbile.php';?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
   <?php include 'menu.php';?>
    <!-- Main Menu area End-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Collection</h2>
                                        <p>Welcome to Yash Infotech <span class="bread-ntd"><?php echo $_SESSION['login_user'];?></span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Main Menu area End-->
     <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                                 <form action="tcoll.php" method="post">
                                   <table>
                                       <tr>
                                        <td><input type="date" name="txtdate"  class="form-control" required>
                                          </td>
                                          <td>
                                     <input type="submit" name="submit" class="button button1" value="Submit">
                                  </td>
                                       </tr>
                                   </table>
                                   </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                 
                 
 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                           
                        </div>
                        <hr>
                        <h1 align='center'>BCA FEES</h1>
                        <hr>
                        <div class="table-responsive">
                            
                            <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Acoount Head</th>
                                        <th>Date</th>
                                        <th>Code</th>
                                        <th>Student Name</th>
                                        <th>Payment Type</th>
                                        <th>Cash Amount</th>
                                        <th>Cheque Amount</th>
                                        <th>NEFT Amount</th>  
                                        <th>MT Amount</th>
                                        <th>TMV Fees</th>
                                        <th>Cheque Number</th>
                                        <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Receipt No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
              if(isset($_POST['submit']))
              {
                                       $dateu=$_POST['txtdate']; 
                                     $dateu=strtotime($dateu);
                                    $dateu=date('Y-m-d',$dateu);
                                    include 'Conn.php';
                                    $sql="select * from receipt where Date='".$dateu."' and active=1 and yash='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                        
                                            ?>
                                            <tr>
                                            <td><?php echo $row['Receipttype'];?></td>
                                            <td><?php 
                                             $Date=$row['Date'];
                                             $Date=strtotime($Date);
                                             $Date=date('m-d-Y',$Date);
                                            echo $Date;
                                           

                                            ?></td>
                                            <td>&nbsp;</td>
                                            <td><?php echo $row['FullName'];?></td>
                                            <td><?php echo $row['PaymentType'];?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cash')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cheque')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                             <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='NEFT')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='MT')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                             <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='TMV Fees')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php echo $row['ChequeNo'];?></td>
                                             <td><?php
                                            $chqd=$row['ChequeDate']; 
                                             $chqd=strtotime($chqd);
                                             $chqd=date('d-m-Y',$chqd);
                                            echo $chqd;
                                            ?></td>
                                            <td><?php echo $row['Bank'];?></td>
                                            <td><?php echo $row['ReceiptNewNo'];?></td>
                                            
                                         
                                          
                                            <!--<td><?php //echo $row['Name'];?></td>
                                            <td><?php //echo $row['Lastame'];?></td>
                                            
                                           
                                           
                                          
                                            <td><?php //echo// $row['Total'];?></td>
                                          
                                            <td><?php// echo //$row['Balance'];?></td>-->
                                           <!-- <td><?php //echo $row['Year'];?></td>
                                            <td><?php //echo $row['Sem'];?></td>
                                            <td><?php //echo $row['StdStatus'];?></td>
                                           
                                            
                                         
                                            <td><?php //echo $row['Late'];?></td>
                                           
                                           
                                            <td><?php //echo $row['Bank'];?></td>
                                            <td><?php //echo $row['Receipttype'];?></td>-->
                                            <?php
              }
                                    }
              }
              else
              {
                                  $date=date("Y-m-d");
                                    include 'Conn.php';
                                    $sql="select * from receipt where Date='".$date."' and active=1 and yash='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                        
                                            ?>
                                            <tr>
                                            <td><?php echo $row['Receipttype'];?></td>
                                            <td><?php 
                                             $Date=$row['Date'];
                                             $Date=strtotime($Date);
                                             $Date=date('d-m-Y',$Date);
                                            echo $Date;
                                            ?></td>
                                            <td><?php echo $row['code'];?></td>
                                            <td><?php echo $row['FullName'];?></td>
                                            <td><?php echo $row['PaymentType'];?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cash')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cheque')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td>
                                            <?php
                                             $Pay=$row['PaymentType'];
                                            if($pay=='NEFT')
                                            {
                                                 echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                 $Pay=$row['PaymentType'];
                                                    if($pay=='MT')
                                                    {
                                                         echo $row['Paid'];
                                                    }
                                                    else
                                                    {
                                                        echo '0';
                                                    }
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                 $Pay=$row['PaymentType'];
                                                    if($pay=='TMV Fees')
                                                    {
                                                         echo $row['Paid'];
                                                    }
                                                    else
                                                    {
                                                        echo '0';
                                                    }
                                            ?>
                                            </td>
                                            <td><?php echo $row['ChequeNo'];?></td>
                                             <td><?php
                                            $chqd=$row['ChequeDate']; 
                                             $chqd=strtotime($chqd);
                                             $chqd=date('d-m-Y',$chqd);
                                            echo $chqd;
                                            ?></td>
                                            <td><?php echo $row['Bank'];?></td>
                                            <td><?php echo $row['ReceiptNewNo'];?></td>
                                            
                                         
                                          
                                            <!--<td><?php //echo $row['Name'];?></td>
                                            <td><?php //echo $row['Lastame'];?></td>
                                            
                                           
                                           
                                          
                                            <td><?php //echo// $row['Total'];?></td>
                                          
                                            <td><?php// echo //$row['Balance'];?></td>-->
                                           <!-- <td><?php //echo $row['Year'];?></td>
                                            <td><?php //echo $row['Sem'];?></td>
                                            <td><?php //echo $row['StdStatus'];?></td>
                                           
                                            
                                         
                                            <td><?php //echo $row['Late'];?></td>
                                           
                                           
                                            <td><?php //echo $row['Bank'];?></td>
                                            <td><?php //echo $row['Receipttype'];?></td>-->
                                          </tr>
                                            <?php

                                          }
                                        }
              }
                                            ?>
            </tr>
            
            <tr>
                <?php
                                      //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $sql="select SUM(Paid) As CashTotal from receipt where Date='".$dateu."' and PaymentType='Cash' and active='1' and yash='1' and active=1";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $csql="select SUM(Paid) As ChequeTotal from receipt where Date='".$dateu."' and PaymentType='Cheque' and active=1 and yash='1'";
                                    $cresult=$con->query($csql);
                                    $crow=$cresult->fetch_assoc();
            ?>
             <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $ncsql="select SUM(Paid) As NEFT from receipt where Date='".$dateu."' and PaymentType='NEFT' and active=1 and yash='1'";
                                    $ncresult=$con->query($ncsql);
                                    $ncrow=$ncresult->fetch_assoc();
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $nMcsql="select SUM(Paid) As MT from receipt where Date='".$dateu."' and PaymentType='MT' and active=1 and yash='1'";
                                    $nMcresult=$con->query($nMcsql);
                                    $nMcrow=$nMcresult->fetch_assoc();
            ?>
             <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $nMcTMVsql="select SUM(Paid) As TMV from receipt where Date='".$dateu."' and PaymentType='TMV Fees' and active=1 and yash='1'";
                                    $nMcTMVresult=$con->query($nMcTMVsql);
                                    $nMcTMVrow=$nMcTMVresult->fetch_assoc();
            ?>
             <?php
             
                                     //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $tsql="select SUM(Paid) As Total from receipt where Date='".$dateu."'and active=1 and yash='1'";
                                    $tresult=$con->query($tsql);
                                    $trow=$tresult->fetch_assoc();
            ?>
             <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
            <td><b style="color:red">Total:
           
             </td> 
             <td><b style="color:red"><?php echo $row['CashTotal'];
            ?></b></td>
            <td> <b style="color:red"><?php echo $crow['ChequeTotal'];?></b>
             </td>
              <td><b style="color:red"><?php echo $ncrow['NEFT'];?></b>
                 </td>
                  <td><b style="color:red"><?php echo $nMcrow['MT'];?></b>
                 </td>
                 </td>
                  <td><b style="color:red"><?php echo $nMcTMVrow['TMV'];?></b>
                 </td>
            </tr>
            <tr>
                 <td><b style="color:red"><?php //echo $ncrow['NEFT'];?></b>
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                <td><b style="color:red">Grand Total:<b style="color:red"></td>
                <td><b style="color:red"><?php echo $trow['Total'];?></b></td>
            </tr>
                                
                               </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Acoount Head</th>
                                        <th>Date</th>
                                        <th>Code</th>
                                        <th>Student Name</th>
                                        <th>Payment Type</th>
                                        <th>Cash Amount</th>
                                        <th>Cheque Amount</th>
                                        <th>NEFT Amount</th>  
                                        <th>MT Amount</th>
                                        <th>TMV Fees</th>
                                        <th>Cheque Number</th>
                                        <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Receipt No</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <br>
                        <hr>
                        <h1 align='center'>TMV FEES</h1>
                        <hr>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Acoount Head</th>
                                        <th>Date</th>
                                        <th>Code</th>
                                        <th>Student Name</th>
                                        <th>Payment Type</th>
                                        <th>Cash Amount</th>
                                        <th>Cheque Amount</th>
                                        <th>NEFT Amount</th>  
                                        <th>MT Amount</th>
                                        <th>TMV Fees</th>
                                        <th>Cheque Number</th>
                                        <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Receipt No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
              if(isset($_POST['submit']))
              {
                                       $dateu=$_POST['txtdate']; 
                                     $dateu=strtotime($dateu);
                                    $dateu=date('Y-m-d',$dateu);
                                    include 'Conn.php';
                                    $sql="select * from receipt where Date='".$dateu."' and active=1 and Receipttype='TMVFEES' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                        
                                            ?>
                                            <tr>
                                            <td><?php echo $row['Receipttype'];?></td>
                                            <td><?php 
                                             $Date=$row['Date'];
                                             $Date=strtotime($Date);
                                             $Date=date('m-d-Y',$Date);
                                            echo $Date;
                                           

                                            ?></td>
                                            <td>&nbsp;</td>
                                            <td><?php echo $row['FullName'];?></td>
                                            <td><?php echo $row['PaymentType'];?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cash')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cheque')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                             <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='NEFT')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='MT')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='TMV Fees')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php echo $row['ChequeNo'];?></td>
                                             <td><?php
                                            $chqd=$row['ChequeDate']; 
                                             $chqd=strtotime($chqd);
                                             $chqd=date('d-m-Y',$chqd);
                                            echo $chqd;
                                            ?></td>
                                            <td><?php echo $row['Bank'];?></td>
                                            <td><?php echo $row['ReceiptNewNo'];?></td>
                                            
                                         
                                          
                                            <!--<td><?php //echo $row['Name'];?></td>
                                            <td><?php //echo $row['Lastame'];?></td>
                                            
                                           
                                           
                                          
                                            <td><?php //echo// $row['Total'];?></td>
                                          
                                            <td><?php// echo //$row['Balance'];?></td>-->
                                           <!-- <td><?php //echo $row['Year'];?></td>
                                            <td><?php //echo $row['Sem'];?></td>
                                            <td><?php //echo $row['StdStatus'];?></td>
                                           
                                            
                                         
                                            <td><?php //echo $row['Late'];?></td>
                                           
                                           
                                            <td><?php //echo $row['Bank'];?></td>
                                            <td><?php //echo $row['Receipttype'];?></td>-->
                                            <?php
              }
                                    }
              }
              else
              {
                                  $date=date("Y-m-d");
                                    include 'Conn.php';
                                    $sql="select * from receipt where Date='".$date."' and active=1 and Receipttype='TMVFEES' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                        
                                            ?>
                                            <tr>
                                            <td><?php echo $row['Receipttype'];?></td>
                                            <td><?php 
                                             $Date=$row['Date'];
                                             $Date=strtotime($Date);
                                             $Date=date('d-m-Y',$Date);
                                            echo $Date;
                                            ?></td>
                                            <td><?php echo $row['code'];?></td>
                                            <td><?php echo $row['FullName'];?></td>
                                            <td><?php echo $row['PaymentType'];?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cash')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td><?php 
                                            $Pay=$row['PaymentType'];
                                            if($Pay=='Cheque')
                                            {
                                                echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?></td>
                                            <td>
                                            <?php
                                             $Pay=$row['PaymentType'];
                                            if($pay=='NEFT')
                                            {
                                                 echo $row['Paid'];
                                            }
                                            else
                                            {
                                                echo '0';
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                 $Pay=$row['PaymentType'];
                                                    if($pay=='MT')
                                                    {
                                                         echo $row['Paid'];
                                                    }
                                                    else
                                                    {
                                                        echo '0';
                                                    }
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                 $Pay=$row['PaymentType'];
                                                    if($pay=='TMV Fees')
                                                    {
                                                         echo $row['Paid'];
                                                    }
                                                    else
                                                    {
                                                        echo '0';
                                                    }
                                            ?>
                                            </td>
                                            <td><?php echo $row['ChequeNo'];?></td>
                                             <td><?php
                                            $chqd=$row['ChequeDate']; 
                                             $chqd=strtotime($chqd);
                                             $chqd=date('d-m-Y',$chqd);
                                            echo $chqd;
                                            ?></td>
                                            <td><?php echo $row['Bank'];?></td>
                                            <td><?php echo $row['ReceiptNewNo'];?></td>
                                            
                                         
                                          
                                            <!--<td><?php //echo $row['Name'];?></td>
                                            <td><?php //echo $row['Lastame'];?></td>
                                            
                                           
                                           
                                          
                                            <td><?php //echo// $row['Total'];?></td>
                                          
                                            <td><?php// echo //$row['Balance'];?></td>-->
                                           <!-- <td><?php //echo $row['Year'];?></td>
                                            <td><?php //echo $row['Sem'];?></td>
                                            <td><?php //echo $row['StdStatus'];?></td>
                                           
                                            
                                         
                                            <td><?php //echo $row['Late'];?></td>
                                           
                                           
                                            <td><?php //echo $row['Bank'];?></td>
                                            <td><?php //echo $row['Receipttype'];?></td>-->
                                          </tr>
                                            <?php

                                          }
                                        }
              }
                                            ?>
            </tr>
            
            <tr>
                <?php
                                      //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $sql="select SUM(Paid) As CashTotal from receipt where Date='".$dateu."' and PaymentType='Cash' and active=1 and Receipttype='TMVFEES'";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $csql="select SUM(Paid) As ChequeTotal from receipt where Date='".$dateu."' and PaymentType='Cheque' and active=1 and Receipttype='TMVFEES'";
                                    $cresult=$con->query($csql);
                                    $crow=$cresult->fetch_assoc();
            ?>
             <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $ncsql="select SUM(Paid) As NEFT from receipt where Date='".$dateu."' and PaymentType='NEFT' and active=1 and Receipttype='TMVFEES'";
                                    $ncresult=$con->query($ncsql);
                                    $ncrow=$ncresult->fetch_assoc();
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $nMcsql="select SUM(Paid) As MT from receipt where Date='".$dateu."' and PaymentType='MT' and active=1 and Receipttype='TMVFEES'";
                                    $nMcresult=$con->query($nMcsql);
                                    $nMcrow=$nMcresult->fetch_assoc();
            ?>
             <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $nMcTMVsql="select SUM(Paid) As TMV from receipt where Date='".$dateu."' and PaymentType='TMV Fees' and active=1 and Receipttype='TMVFEES'";
                                    $nMcTMVresult=$con->query($nMcTMVsql);
                                    $nMcTMVrow=$nMcTMVresult->fetch_assoc();
            ?>
             <?php
             
                                     //$dateu=date("Y-d-m");
                                    include 'Conn.php';
                                    $tsql="select SUM(Paid) As Total from receipt where Date='".$dateu."'and active=1 and Receipttype='TMVFEES'";
                                    $tresult=$con->query($tsql);
                                    $trow=$tresult->fetch_assoc();
            ?>
             <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
            <td><b style="color:red">Total:
           
             </td> 
             <td><b style="color:red"><?php echo $row['CashTotal'];
            ?></b></td>
            <td> <b style="color:red"><?php echo $crow['ChequeTotal'];?></b>
             </td>
              <td><b style="color:red"><?php echo $ncrow['NEFT'];?></b>
                 </td>
                  <td><b style="color:red"><?php echo $nMcrow['MT'];?></b>
                 </td>
                  </td>
                  <td><b style="color:red"><?php echo $nMcTMVrow['TMV'];?></b>
                 </td>
            </tr>
            <tr>
                 <td><b style="color:red"><?php //echo $ncrow['NEFT'];?></b>
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                   <td>&nbsp;
                 </td>
                <td><b style="color:red">Grand Total:<b style="color:red"></td>
                <td><b style="color:red"><?php echo $trow['Total'];?></b></td>
            </tr>
                                
                               </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Acoount Head</th>
                                        <th>Date</th>
                                        <th>Code</th>
                                        <th>Student Name</th>
                                        <th>Payment Type</th>
                                        <th>Cash Amount</th>
                                        <th>Cheque Amount</th>
                                        <th>NEFT Amount</th>  
                                        <th>MT Amount</th>
                                        <th>TMV Fees</th>
                                        <th>Cheque Number</th>
                                        <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Receipt No</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
         <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                                 <form action="exports.php" method="post">
                                       <table>
                                           <tr>
                                   <td><h2><b>Start to Till Date:</b></h2>
                                   </td>
                                   <td><input type = "submit" class="button button1"  value ="Export" name="export"></td>
                                   </tr>
                                   </table>
                                   </form>
                                   <br>
                                   <br>
                                <table class="table table-bordered  table-hover">
                                    <form action="dateexportsrecip.php" method="post">
                                    <tr>
                                        <th colspan="2">Period Wise</th>
                                        </tr>
                                    <tr>
                                    <td>Form:<input type="date" name="form" class="form-control" required></td>
                                    <td>To:<input type="date" name="to" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" name="submit" class="button button1" value="Export"></td>
                                    </tr>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
                

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================     <script src="js/tawk-chat.js"></script>-->
</body>
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script>
  $("#submit").click(function() {
  $.post($("#addform").attr("action"),
    $("#addform :input").serializeArray(), function(info){
      $("#msg").html(info);
    });
  clearinput();
});

$("#addform").submit( function(){
  return false;
});

function clearinput(){
  $("#addform :input").each( function() {
    $(this).val('');
  });
}
</script>
<script>
  function changetextbox()
  {
    y=document.getElementById("payment").value;
    if(y=="Cash")
    {
            document.getElementById("txtbank").disabled = true;
            document.getElementById("txtcheqno").disabled = true;
            document.getElementById("txtchequd").disabled = true;
            document.getElementById("txtrembank").disabled = true;
            document.getElementById("txtbennbank").disabled = true;
            
    }
    else
    {
            document.getElementById("txtbank").disabled = false;
            document.getElementById("txtcheqno").disabled = false;
            document.getElementById("txtchequd").disabled = false;
            document.getElementById("txtrembank").disabled = false;
            document.getElementById("txtbennbank").disabled = false;
    }
}
     function changetextbox1()
  {
    x=document.getElementById("mode").value;
    if(x=="WithoutLateFees")
    {
            document.getElementById("late").disabled = true;
               }
    else
    {
            document.getElementById("late").disabled = false;
 
    }
    
}
</script>
</html>