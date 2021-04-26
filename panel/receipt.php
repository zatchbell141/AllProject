<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>&nbsp;Yash&nbsp;Infotech</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
       <link href="assets/css/scorllbar.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
 include "session.php";
 ?>
<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Yash&nbsp;Infotech</a>
                </div>
                <!--<div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>-->
				
            </div>
			
        </div>
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                     
                    </li>


                     <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                       
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-user"></i>Staff<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addtechers.php">Add Teachers</a>
                            </li>
                           <li>
                                 <a href="schedules.php">Schedules</a>
                            </li>
                             <li>
                                <a href="attendence.php">Attendence</a>
                            </li>
                           <li>
                                <a href="staffreports.php">Techers Reports</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-qrcode"></i>Student Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addstudents.php">Add Students</a>
                            </li>
                           <li>
                                <a href="importstudent.php">Import Data</a>
                            </li>
                           <li>
                                <a href="studenetdatareport.php">Students Reports</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-user "></i>Enquiry<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="enquiry.php">Add Enquiry</a>
                            </li>
                           <li>
                                <a href="followup.php">Follow Up</a>
                            </li>
                           <li>
                                <a href="enquiryreports.php">Enquiry Reports</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Receipt<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Receipt</a>
                            </li>
                           <li>
                                <a href="receipt.php">Backlog</a>
                            </li>
                           <li>
                                <a href="receipt.php">Convocation</a>
                            </li>
                        </ul>
                    </li>
                       <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Subject<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Add Subjects</a>
                            </li>
                           <li>
                                <a href="receipt.php">Update Subject</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Subject Reports</a>
                            </li>
                        </ul>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                               <a href="receipt.php">All Reports</a>
                            </li>
                            <li>
                               <a href="receipt.php">Techers Reports</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Subject Reports</a>
                            </li>
                           <li>
                                <a href="receipt.php">Enquiry Reports</a>
                            </li>
                            <li>
                               <a href="receipt.php">Receipt Reports</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Backlog Reports</a>
                            </li>
                           <li>
                                <a href="receipt.php">Convocation Reports</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                     <a href="studentq.php"><i class="fa fa-edit "></i>Student Query</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-edit "></i>Logout</a>
                    </li>
                   <!-- <li>
                        <a href="#"><i class="fa fa-edit "></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Elements</a>
                            </li>
                            <li>
                                <a href="#">Free Link</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table "></i>Table Examples</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Last Link </a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-table "></i>Blank Page</a>
                    </li>
                </ul>

            </div>-->
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $_SESSION['login_user']?></h2>
                    </div>
                </div>
                <!-- /. ROW  -->	 
            <hr />
            <h3>Fees Receipt</h3>
            <form action="receipt.php" method="post">
          <table class="table">
            <tr>
              <td>Name:<input type="text" list="browsers" class="form-control" name="txtaddname" Placeholder="Name"></td>
               <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select fullname from studentdt";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['fullname'];?>"><?php echo $grd['fullname']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
             
            </tr>
            <tr>
              <td><input type = "submit" class="btn btn-danger"  value ="submit" name="txtsrchuser"></td>
           
            </tr>
         </table>
          </form>
         <?php
         include 'Conn.php';
          if(isset($_POST['txtsrchuser']))
          {
            
            $name=$_POST['txtaddname'];
            $sql="select * from studentdt where fullname='".$name."'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();
          }

         ?>
            <div class="table-responsive">
                <form id="addform" action="otheradd.php" method="post">
          <table class="table">
            <tr>
              <td colspan="2"> Date:<input type="text" class="form-control"  name="lbdate" value="<?php echo date("d/m/Y");?>" readonly></td>
              
              <td colspan="2"> Receipt No:<input type="text" class="form-control"  name="receipo" value="<?php date_default_timezone_set("Asia/Kolkata"); echo date("Ydmhis");?>" readonly></td>
            
            </tr>
              <tr>
                 <td colspan="4">Receipt Mode:<select class="form-control" class="form-control" name="receiptmode"  width="10px"  required>
                                <option value="">Select Receipt Mode</option>
                                <option value="Others">Other</option>
                                <option value="College">College</option>
                                </select></td>
              </tr>
              <tr>
                <td>PRN:<input type="text" class="form-control" value="<?php echo $row['prn'];?>" name="txtprn" placeholder="PRN" required></td>
                <td>Name:<input type="text" class="form-control" value="<?php echo $row['firstname'];?>" name="txtname" placeholder="Name" required></td>
                <td>Lastname:<input type="text" class="form-control" value="<?php echo $row['lastname'];?>"  name="txtlastname" placeholder="Lastname" required></td>
                <td>Year:<input type="text" class="form-control"  name="year" placeholder="Year" required></td>
              </tr>
              <tr>
                <td>Sem:<input type="text" class="form-control"  name="txtsem" placeholder="Sem" required></td>
                <td>Mode:<input type="text" class="form-control"  name="txtmode" placeholder="Mode" required></td>
                <td>Total Fees:<input type="text" class="form-control"  name="txtfees" placeholder="Fees" required></td>
                <td>Paid Fees:<input type="text" class="form-control"  name="txtpaidfees" placeholder="Paid Fees" required></td>
              </tr>
              <tr>
                <td>Payment Type:<select name="payment" class="form-control" id="payment" onchange="changetextbox();">
                  <option name="Cheque">Cheque</option>
                  <option name="Cash">Cash</option>
                </select>
                <td>Cheque No:<input type="text"class="form-control"  id="txtcheqno" name="txtcheqno" placeholder="Cheque Number" required></td>
                <td>Cheque Date:<input type="date"class="form-control"  id="txtchequd" name="txtchequd" placeholder="Paid Fees" required></td>
                <td>Bank:<input type="text"class="form-control"  id="txtbank" name="txtbank" placeholder="Bank" required></td>
              </tr>
              <tr>
                 <td colspan="4">Mode:<select class="form-control" class="form-control" name="mode"  width="10px"  required>
                                <option value="">Select fees</option>
                                <option value="Late Fees">Late Fees</option>
                                <option value="Normal">Normal</option>
                                </select></td>
              </tr>
            
              <tr>
                <td colspan="4"><button class="btn btn-primary" id="submit">Submit</button></td>
                </form>
              </tr>
              <tr>
                <td colspan="4"><div id="msg"></div></td>
              </tr>
          </table>
      
      
      <div class="ex3">
          <table class="table">
            <tr>
               <th>Receipt No</th>
                <th>Id</th>
                <th>PRN</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Year</th>
                <th>Sem</th>
                <th>Mode</th>
                <th>Date</th>
                <th>Fees</th>
                <th>Paid</th>
                <th>Balance</th>
                 <th>Payment</th>
                <th>Cheque No</th>
                <th>Cheque Date</th>
                <th>Bank</th>
                <th>Payment Mode</th>
                
                 <th>Print</th>
                <th>Delete</th>

            </tr>
            <tr>
              <?php
                                    include 'Conn.php';
                                    $sql="select * from others ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="info">
                                            <td><?php echo $row['receiptNo'];?></td>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><?php echo $row['mode'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['fees'];?></td>
                                            <td><?php echo $row['paid'];?></td>
                                            <td><?php echo $row['balance'];?></td>
                                            <td><?php echo $row['payment'];?></td>
                                            <td><?php echo $row['chequeno'];?></td>
                                            <td><?php echo $row['chequedate'];?></td>
                                            <td><?php echo $row['bank'];?></td>
                                             <td><?php echo $row['paymentmd'];?></td>
                                            <td><a href="other.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                            <td><a href="delothers.php?varname=<?php echo $row['id'];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
            </tr>
          </table>
            </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
  function data()
{
  e=document.getElementById("rmk").value;
  if(e=="Pass")
  {
     document.getElementById("subj").disabled = true;
     document.getElementById("mthd").disabled = true;
     document.getElementById("bfees").disabled = true;
     document.getElementById("mod").disabled = true;
     document.getElementById("blfees").disabled = true;

     document.getElementById("subj").value = "0";
     document.getElementById("mthd").value = "0";
     document.getElementById("bfees").value = "0";
     document.getElementById("mod").value = "0";
     document.getElementById("blfees").value = "0";
  }
  else
  {
     document.getElementById("subj").disabled = false;
     document.getElementById("mthd").disabled = false;
     document.getElementById("bfees").disabled = false;
     document.getElementById("mod").disabled = false;
     document.getElementById("blfees").disabled = false;
  }
}
  function rmak()
  {
    b=document.getElementById("mod").value;
    if(b=="Late fees")
    {
            document.getElementById("blfees").disabled = false;
document.getElementById("blfees").value=" ";
           
    }
    else
    {
        document.getElementById("blfees").disabled = true;
         
           
    }
  }

  function changetextbox()
  {
    y=document.getElementById("payment").value;
   
    if(y=="Cash")
    {
            document.getElementById("txtbank").disabled = true;
            document.getElementById("txtcheqno").disabled = true;
            document.getElementById("txtcheqd").disabled = true;
            document.getElementById("txtbank").value = "0";
            document.getElementById("txtcheqno").value = "0";
            document.getElementById("txtcheqd").value = "0";
    }
    else
    {
        document.getElementById("txtbank").disabled = false;
            document.getElementById("txtcheqno").disabled = false;
            document.getElementById("txtcheqd").disabled = false;

    }
    
}
function bltext()
{
  bl=document.getElementById("blfpayment").value;
  if(bl=="Cash")
  {
             document.getElementById("txtblfbank").disabled = true;
            document.getElementById("txtblfcheqno").disabled = true;
            document.getElementById("txtblfcheqd").disabled = true;
  }
  else
  {
              document.getElementById("txtblfbank").disabled = false;
            document.getElementById("txtblfcheqno").disabled = false;
            document.getElementById("txtblfcheqd").disabled = false;
  }
}
function textboxs()
{
    z=document.getElementById("ppayment").value;
   
    if(z=="Cash")
    {
            document.getElementById("utxtbank").disabled = true;
            document.getElementById("txtchequno").disabled = true;
            document.getElementById("txtchequd").disabled = true;
              document.getElementById("utxtbank").value = "0";
            document.getElementById("txtchequno").value = "0";
            document.getElementById("txtcheqd").value = "0";

    }
    else
    {
        document.getElementById("utxtbank").disabled = false;
            document.getElementById("txtchequno").disabled = false;
            document.getElementById("txtchequd").disabled = false;
    }
  }
    function text()
    {
     x=document.getElementById("payt").value;
    if(x=="Cash")
    {
      document.getElementById("txtub").disabled = true;
            document.getElementById("txtchqno").disabled = true;
            document.getElementById("txtchqd").disabled = true;
             document.getElementById("txtub").value = "0";
            document.getElementById("txtchqno").value = "0";
            document.getElementById("txtchqd").value = "0";
    }
      else
    {
        document.getElementById("txtub").disabled = false;
            document.getElementById("txtchqno").disabled = false;
            document.getElementById("txtchqd").disabled = false;
    }
}
function late()
{
  a=document.getElementById("m").value;
  if(a=="Late Fees")
    {
      document.getElementById("txtlte").disabled = false;        
    }
      else
    {
        document.getElementById("txtlte").disabled = true;         
    }
}

function cflate()
{
  ac=document.getElementById("cfm").value;
  if(ac=="Late Fees")
    {
     
      document.getElementById("txtcnflfs").disabled = false;

            
    }
      else
    {
        
        document.getElementById("txtcnflfs").disabled = true;
        
            
    }
}

function textbl()
  {
     bl=document.getElementById("bpayment").value;
     if(bl=="Cash")
     {
      document.getElementById("txtubbank").disabled = true;
            document.getElementById("txtblucheqno").disabled = true;
            document.getElementById("txtblucheqd").disabled = true;
            
     }
      else
    {
            document.getElementById("txtubbank").disabled = false;
            document.getElementById("txtblucheqno").disabled = false;
            document.getElementById("txtblucheqd").disabled = false;
            document.getElementById("txtcnflfs").disabled = false;

    }
}
</script>

</body>
</html>