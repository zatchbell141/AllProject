<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'Includes/header.php';?>
</head>

<body>

   <?php include 'Includes/loader.php';?>

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo1.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo1.png" alt=""></span>
                    <span class="brand-title">
                       <!--  <img src="images/logo-text.png" alt=""> --><b style="color: white">YASH INFOTECH</b>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
       <?php include 'Includes/topmenu.php';?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <?php include 'Includes/menu.php';?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <!-- Topbar -->
            <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Today Collection</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Collection</h4>
                                     <form action="tcoll.php" method="post">
                                   <table class="table table-striped table-bordered">
                                       <tr>
                                        <td><input type="date" name="txtdate"  class="form-control" required>
                                          </td>
                                          
                                       </tr>
                                       <tr>
                                        <td>
                                     <input type="submit" name="submit" class="btn btn-outline-primary" value="Submit">
                                  </td>
                                       </tr>
                                   </table>
                                   </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
              <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Collection Details</h4>
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
                                   include 'Includes/Conn.php';
                                    $sql="select * from receipt where Date='$dateu' and active=1 and yash='1' ORDER BY id DESC";
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
                                   include 'Includes/Conn.php';
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
                 if(isset($_POST['submit']))
              {
                include 'Includes/Conn.php';
                                    $sql="select SUM(Paid) As CashTotal from receipt where Date='$dateu' and PaymentType='Cash' and active='1' and yash='1' and active=1";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
              }
                                   
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                if(isset($_POST['submit']))
              {
                                   include 'Includes/Conn.php';
                                    $csql="select SUM(Paid) As ChequeTotal from receipt where Date='$dateu' and PaymentType='Cheque' and active=1 and yash='1'";
                                    $cresult=$con->query($csql);
                                    $crow=$cresult->fetch_assoc();
                                }
            ?>
             <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                 if(isset($_POST['submit']))
              {
                                   include 'Includes/Conn.php';
                                    $ncsql="select SUM(Paid) As NEFT from receipt where Date='$dateu' and PaymentType='NEFT' and active=1 and yash='1'";
                                    $ncresult=$con->query($ncsql);
                                    $ncrow=$ncresult->fetch_assoc();
                                }
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                if(isset($_POST['submit']))
                {
                                   include 'Includes/Conn.php';
                                    $nMcsql="select SUM(Paid) As MT from receipt where Date='$dateu' and PaymentType='MT' and active=1 and yash='1'";
                                    $nMcresult=$con->query($nMcsql);
                                    $nMcrow=$nMcresult->fetch_assoc();
                                }
            ?>
             <?php
             
                                     //$dateu=date("Y-d-m");
                         if(isset($_POST['submit']))
                {
                                   include 'Includes/Conn.php';
                                    $tsql="select SUM(Paid) As Total from receipt where Date='$dateu'and active=1 and yash='1'";
                                    $tresult=$con->query($tsql);
                                    $trow=$tresult->fetch_assoc();
                                }
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
                                   include 'Includes/Conn.php';
                                    $sql="select * from receipt where Date='$dateu' and active=1 and Receipttype='TMVFEES' ORDER BY id DESC";
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
                                   include 'Includes/Conn.php';
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
                                   include 'Includes/Conn.php';
                                    $sql="select SUM(Paid) As CashTotal from receipt where Date='$dateu' and PaymentType='Cash' and active=1 and Receipttype='TMVFEES'";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                   include 'Includes/Conn.php';
                                    $csql="select SUM(Paid) As ChequeTotal from receipt where Date='$dateu' and PaymentType='Cheque' and active=1 and Receipttype='TMVFEES'";
                                    $cresult=$con->query($csql);
                                    $crow=$cresult->fetch_assoc();
            ?>
             <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                   include 'Includes/Conn.php';
                                    $ncsql="select SUM(Paid) As NEFT from receipt where Date='$dateu' and PaymentType='NEFT' and active=1 and Receipttype='TMVFEES'";
                                    $ncresult=$con->query($ncsql);
                                    $ncrow=$ncresult->fetch_assoc();
            ?>
            <?php
              //$dateu=$_POST['txtdate']; 
                                  //$dateu=date("Y-d-m");
                                   include 'Includes/Conn.php';
                                    $nMcsql="select SUM(Paid) As MT from receipt where Date='$dateu' and PaymentType='MT' and active=1 and Receipttype='TMVFEES'";
                                    $nMcresult=$con->query($nMcsql);
                                    $nMcrow=$nMcresult->fetch_assoc();
            ?>
             <?php
             
                                     //$dateu=date("Y-d-m");
                                   include 'Includes/Conn.php';
                                    $tsql="select SUM(Paid) As Total from receipt where Date='$dateu'and active=1 and Receipttype='TMVFEES'";
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
 <!---Container Fluid-->
       <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by AV(Yash Infotech)</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
     </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'Includes/script.php';?>

</body>

</html>