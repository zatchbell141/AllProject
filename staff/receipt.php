<?php
include 'session.php';
?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/3.3/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>Yash Infotech</title>

    <!-- Bootstrap core CSS -->
    <link href="./Dashboard Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Dashboard Template for Bootstrap_files/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js.download"></script>
<link rel="stylesheet" href="css/scorllbar.css" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index3.php">Yash Infotech</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="index3.php">Dashboard</a></li>
              <li><a href="studentatt.php">Attendence</a></li>
            <li><a href="#">Remarks</a></li>
            <li><a href="#">Profile</a></li>
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <li class="active"><a href="enquiry.php">Add enquiry <span class="sr-only">(current)</span></a></li>
            <li><a href="receipt.php">Fees Receipt</a></li>
            <li><a href="installments.php">Balance Fees</a></li>
            <li><a href="#">My Incentive's</a></li>
            <li><a href="#">Report Hardware Issue's</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#">My Attendance</a></li>
            <li><a href="#">Student Reports</a></li>
            <li><a href="#">Student Feedbacks</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="notes.php">Notes</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Admitted Student's</h1>
          <div class="page-header">
       <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Admitted Student's</h3>
            </div>
            <div class="panel-body">
                <form action="receipt.php" method="post">
                <table  class="table table-striped">
          <tr>
              <td>Order ID:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input placeholder="Firstname" class="form-control" type="text" list="browsers" name="txtaddname">
                  <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select * from studentdt where active=1";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                      $sql="select * from coursesname where id='".$grd['courseName']."'";
                                       $result=$con->query($sql);
                                       $row=$result->fetch_assoc();
                                 ?>
                                 <option value="<?php echo $grd['id'];?>"><?php echo $grd['name'].' '.$grd['fathername'].' '.$grd['lastname']."--".$row['name'];?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
              </div></td>
            </tr>
            <tr>
              <td>
                Receipt Mode:<select name="txtmode" class="form-control" id="mode" onchange="changetextbox1();">
                  <option value="fees">Regular</option>
                   <option value="installment">Installments</option>
                </select>
              </td>
            </tr>
            <!--<tr>
               <td>Admitted By:
             <select name="txthandle" class="form-control">
              <?php
                include 'Conn.php';
                $sql="SELECT * FROM `staff` ORDER  BY StaffId DESC";
                $result=$con->query($sql);
                if($result->num_rows>0)
                {
                 while($row=$result->fetch_assoc())
                {       
                ?>
                <option value="<?php echo $row['StaffId']?>"><?php echo $row['fullname']?></option>
                <?php
                  }
                }
                ?>
             </select>

            </td>
            </tr>-->
            <tr>
              <td><input type = "submit" class="btn btn-primary"  value ="Search" name="txtsrchuser"></td>
              </form>
            </tr>
          </table>
            <?php
          $final="";
         if(isset($_POST['txtsrchuser']))
          {
            include 'Conn.php';
            $name=$_POST['txtaddname'];
             $sql="select * from studentdt where id='".$name."'";
             $result=$con->query($sql);
             $row=$result->fetch_assoc();
             
             $sql="select * from studentdt where id='".$name."'";
             $result=$con->query($sql);
             $row=$result->fetch_assoc();
             
             $mode=$_POST['txtmode'];
             $fees="";
             if($mode=="installment")
             {
                $fname=$row['courseName'];
                $fsql="select installment from fees where Cname='".$fname."'";
                $fresult=$con->query($fsql);
                $frow=$fresult->fetch_assoc();
                $fees=$frow['installment'];
             }
             if($mode=="fees")
             {
              $fname=$row['courseName'];
              $fsql="select fees from fees where Cname='".$fname."'";
              $fresult=$con->query($fsql);
              $frow=$fresult->fetch_assoc();
               $fees=$frow['fees'];
             }
            
             $fname=$row['courseName'];
              $fdsql="select * from coursesname where id='".$fname."'";
              $fdresult=$con->query($fdsql);
              $fdrow=$fdresult->fetch_assoc();
              
           $rsql="SELECT receiptNo,fromno,num FROM `receipt` ORDER BY id DESC";
           $rresult=$con->query($rsql);
           $rrow=$rresult->fetch_assoc();
           $from=$rrow['fromno'];
           
           $fn=$rrow['num'];
           $no=$fn+1;
           $recptno=$rrow['receiptNo'];
           $rn=$recptno+1;

                $fcname=$row['courseName'];
                $fcsql="select name,code from coursesname where id='".$fname."'";
                $fcresult=$con->query($fcsql);
                $fcrow=$fcresult->fetch_assoc();
               
              $mth= $fcrow['code']."-".date('My')."-".$no;
             
             
            $vaild="";
            $grap="";
                $as=$_POST['txthandle']; 
                $ssql="select * from staff where StaffId='".$as."'";
                $sresult=$con->query($ssql);
                $srow=$sresult->fetch_assoc();
                $admitedby=$srow['fullname'];
                 $datedue="";
                 $rptm=$_POST['txtmode'];
                 if($rptm=="fees")
                 {
                     $datedue="00-00-0000";
                 }
                else
                {
                     $date=date('Y-m-d');
                $time = strtotime($date);
                $final = date("d-m-Y", strtotime("+1 month", $time));
                    $datedue=$final;
                  $finalv = date("d-m-Y", strtotime("+6 month", $time));  
                    $vaild=$finalv;
                    $grap="1200";
                 }
          }
         ?>
           <form id="addform" action="addrece.php" method="POST">
       <table  class="table table-striped">
       <input type="hidden" value="<?php echo $row['studentid'];?>" name="txtstudid" Placeholder="Name">
              <input type="hidden" value="<?php echo $row['courseMode'];?>" name="txtcoursemid" Placeholder="Name">
               <input type="hidden" value="<?php echo $row['courseName'];?>" name="txtcourseid" Placeholder="Name">
        <tr>
                 <td>Receipt No:<input type="text"class="form-control" value="<?php echo $rn;?>" readonly name="txtreceno" Placeholder="Name"></td>
                 <td>Date:<input type="text"class="form-control" readonly value="<?php echo date("d-m-Y");?>" name="txtdate" Placeholder="Name"></td>
            
                 <td>Student Name:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" value="<?php echo $row['fullname'];?>" class="form-control" name="txtstudname" Placeholder="Name"></div></td>
                  </tr>
             <tr>
                 <td>Other Details/Course Name:<input type="text" class="form-control" value="<?php echo $fdrow['name'];?>" name="txtcourse" Placeholder="Name"></td>
            
                 <td>Total Fees:<input type="text" value="<?php echo $fees;?>" class="form-control" name="txtfees" Placeholder="Name"></td>
                 <td>Paid Fees:<input type="text" name="txtpaid" class="form-control" Placeholder="Name"></td>
             </tr>
             <tr>
                <td>Payment Type:<select name="payment" id="payment" class="form-control" onchange="changetextbox();">
                  <option name="Cheque">Cheque</option>
                  <option name="Cash">Cash</option>
                </select>
                <td>Cheque No:<input type="text" id="txtcheqno"class="form-control" name="txtcheqno" placeholder="Cheque Number" required></td>
               
                <td>Cheque Date:<input type="date" id="txtchequd"class="form-control" name="txtchequd" placeholder="Paid Fees" required></td>
                <tr>
                <td>Bank:<input type="text" id="txtbank"class="form-control" name="txtbank" placeholder="Bank" required></td>
     
          <td>
             Due Date:<input type="text" id="txtdue" class="form-control"name="txtinstallment" value="<?php echo $datedue;?>" placeholder="Due Date" required>

          </td>
           <td>Form Number:<input type="text"class="form-control"  value="<?php echo $mth;?>"  name="txtformno" Placeholder="Form Number"></td>
           <tr>
           <td colspan="1">Admitted By:<input type="text"  value="<?php echo $_SESSION['staffid'];?>"class="form-control"  name="txtadmit" Placeholder="Name" readonly></td>
           <td colspan="1">Batch Time:
           <select name="batch" class="form-control">
               <option value="08:00-09:30">08:00-09:30</option>
               <option value="09:30-11:00">09:30-11:00</option>
               <option value="11:00-12:30">11:00-12:30</option>
               <option value="12:30-02:00">12:30-02:00</option>
               <option value="02:00-03:30">02:00-03:30</option>
               <option value="03:30-05:00">03:30-05:00</option>
               <option value="05:00-06:30">05:00-06:30</option>
               <option value="06:30-08:00">06:30-08:00</option>
           </select></td>
           <td>Discount:<input type="text" id="dic"class="form-control"  required name="txtdisc" Placeholder="Discount"></td>
      </tr>
      <tr>
          <td>
              Valid Till:<input type="text" name="txtvalid"class="form-control" value="<?php echo $vaild;?>" placeholder="Valid Date">
          </td>
          <td>
             After Valid date Invoice:<input type="text" class="form-control" name="txtglp" value="<?php echo $grap;?>" placeholder="Valid Date">
          </td>
          <td>Please Select Batch Name:<select  class="form-control" name="txtbatch">
                      <?php
                                include 'Conn.php';
                                 $query1="select * from batch where active=1";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                      
                                 ?>
                                 <option value="<?php echo $grd['id'];?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                    </select>
      </tr>
      <tr>
            <tr>
                    <td><button type="button"  id="submit" class="btn btn-warning">Save</button></td>
                </form>
              </tr>
               <tr>
                <td colspan="3"> <div class="alert alert-success" role="alert" id="msg">
                <!--<strong><div id="msg"></div></strong> -->
              </div></td>
              </tr>
       </table>
            </div>
          </div>
 <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Fees Details</h3>
            </div>
            <div class="panel-body">
              <div class="ex3">
               <table class="table table-striped">
          	<thead>
              <tr>
		       <th>Sr.NO</th>
          <th>Account Head</th>
         <th>Form No</th>
        <th>Receipt No</th>
         <th>Admitted By</th>
        <th>Date</th>
        <th>Due Date</th>
        <th>Student Name</th>
      <th>Batch Timing</th>
        <th>Fees</th>
        <th>Discount</th>
        <th>Paid fees</th>
        <th>Balance</th>
        <th>Payment Type</th>
        <th>Cheque no</th>
        <th>Cheque Date</th>
        <th>Bank</th>
         <th>Print</th>
         <th>Edit</th>
              </tr>
          </thead>
          	<tbody>
          		<tr>
          			  <?php
                                    include 'Conn.php';
                                    $sql="select * from receipt where active='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                               $fcname=$row['coursename'];
                                                $fcsql="select name from coursesname where id='".$fcname."'";
                                                $fcresult=$con->query($fcsql);
                                                $fcrow=$fcresult->fetch_assoc();
                                                $course=$fcrow['name'];
                                                if(!$course==null)
                                                {
                                                    $course=$fcrow['name'];
                                                }
                                                else
                                                {
                                                 $course=$row['coursename'];   
                                                }
                                            
                                                $scname=$row['admittedby'];
                                                $scsql="select fullname from staff where staffId='".$scname."'";
                                                $scresult=$con->query($scsql);
                                                $scrow=$scresult->fetch_assoc();
                                            ?>
                                           <tr>
                                                   <td><?php echo $no;?></td>
                                                      <td><?php echo $course;?></td>
                                                     <td><?php echo $row['fromno'];?></td>
                                                <td><?php echo $row['receiptNo'];?></td>
                                                  <td><?php echo $scrow['fullname'];?></td>
                                                 <td><?php echo $row['date'];?></td> 
                                                 <td><?php echo $row['instaldate'];?></td>
                                                  <td><?php echo $row['fullname'];?></td>
                                                  <td><?php echo $row['batch'];?></td>
                                                   
                                                    <td><?php echo $row['fees'];?></td>
                                                     <td><?php echo $row['dis'];?></td>
                                                     <td><?php echo $row['paid'];?></td>
                                                      <td><?php echo $row['balance'];?></td>
                                                        <td><?php echo $row['payment'];?></td>
                                                       <td><?php echo $row['chequeno'];?></td>
                                                        <td><?php echo $row['chequedate'];?></td>
                                                        <td><?php echo $row['bank'];?></td>
                                                         <td><input type="button" class="button1"  onClick="print(<?php echo $row['id'];?>)" name="Print" value="Print"></td>
                                            </tr>
                                            <script language="javascript">
                                             function print(delid)
                                             {
                                             if(confirm("Do you want Print this record....!")){
                                             window.location.href='printfees.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                             
                                             </script>
                                              
                                            <?php
                                            }
                                            }
                                            ?>
 </tr>
          	</tbody>
          </table>
        </div>
            </div>
          </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Dashboard Template for Bootstrap_files/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Dashboard Template for Bootstrap_files/holder.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>
      
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
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
  $(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>
 <script>
function getState(val) {
  $.ajax({
  type: "POST",
  url: "getState.php",
  data:'country_id='+val,
  success: function(data){
    $("#state-list").html(data);
    getCity();
  }
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
    }
    else
    {
            document.getElementById("txtbank").disabled = false;
            document.getElementById("txtcheqno").disabled = false;
            document.getElementById("txtchequd").disabled = false;
    }
}
     function changetextbox1()
  {
    x=document.getElementById("mode").value;
    if(x=="installment")
    {
            document.getElementById("txtdue").disabled = false;
               }
    else
    {
            document.getElementById("txtdue").disabled = true;
 
    }
    
}
</script>
</body></html>