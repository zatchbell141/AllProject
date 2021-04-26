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
    <link rel="stylesheet" href="css/scorllbar.css" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js.download"></script>

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
          <h1 class="page-header">Enquiry</h1>
          <div class="page-header">
            <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Add Enquiry</h3>
            </div>
            <div class="panel-body">
              <form action="enquiry.php" method="POST">
               <table class="table table-striped">
            <tr>
              <td>Search For Student ID:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input placeholder="Firstname" class="form-control" type="text" list="browsers" name="txtstudentsch">
                  <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select * from enquiry where active=1";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                      $sql="select * from coursesname where id='".$grd['courseName']."'";
                                       $result=$con->query($sql);
                                       $row=$result->fetch_assoc();
                                 ?>
                                 <option value="<?php echo $grd['studentid'];?>"><?php echo $grd['name'].' '.$grd['fathername'].' '.$grd['lastname']."--".$row['name'];?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
              </div></td>
            </tr>
            <tr>
              <td><input type="submit" class="btn btn-primary" name="btnSecrh" value="Search"></td>
                </form>
            </tr>
          </table>
            <?php
            $name="";
            $lastname="";
            $fathername="";
            $contact="";
            $address="";
            if(isset($_POST['btnSecrh']))
            {
              $name=$_POST['txtstudentsch'];
              $sql="select * from enquiry where studentid='".$name."'";
              $result=$con->query($sql);
              $row=$result->fetch_assoc(); 
              $name=$row['name'];
              $lastname=$row['lastname'];
              $fathername=$row['fathername'];
              $contact=$row['contact'];
              $address=$row['address'];
              $stdid=$row['studentid'];
            }
            else
            {
                 $name="";
            $lastname="";
            $fathername="";
            $contact="";
            $address="";
             $sql="select * from enquiry where active='1' ORDER BY id DESC";
              $result=$con->query($sql);
              $row=$result->fetch_assoc();
              $stdid=$row['id'];
            }

          ?>
           <form id="addform" name="form1" action="addenquiry.php" method="POST">
          <table class="table table-striped">
            <input type="hidden" name="txtstdid" value='<?php echo $stdid;?>' required>
            <tr>
              <td>Name:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="txtname" placeholder="Firstname" value="<?php echo $name?>" class="form-control" type="text"></div></td>
              <td>Fathername:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="txtfathername" placeholder="Fathername" value="<?php echo $fathername?>" class="form-control" type="text"></div></td>
               <td>Lastname:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="txtlastname" placeholder="Lastname" value="<?php echo $lastname?>" class="form-control" type="text"></div></td>
            </tr>
            <tr>
              <td>Contact:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input name="txtcontact" placeholder="Contact Number" value="<?php echo $contact?>" class="form-control" type="text"></div></td>
              <td>Address:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input name="txtaddress" placeholder="Address" value="<?php echo $address?>" class="form-control" type="text"></div></td>
               <td>Handle By:<input name="txthandle" placeholder="Handle By" value="<?php echo  $_SESSION['staffid'];?>" class="form-control" type="text" readonly></div></td>

            </tr>
            <tr>
               <td>Date:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
              <input name="txtdate" placeholder="Date" value="<?php echo date("d-m-Y")?>" class="form-control" type="text"></div></td>
                <td>Course Mode:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <select class="form-control" id="country-list" name="txtcoursem" onChange="getState(this.value);">
              <option value disabled selected>Select Course Mode</option>
              <?php
              require_once("dbcontroller.php");
              $db_handle = new DBController();
              $query ="SELECT * FROM coursesmode";
              $results = $db_handle->runQuery($query);
              ?>
              <?php
              foreach($results as $country) {
              ?>
              <option value="<?php echo $country["id"]; ?>"><?php echo $country["name"]; ?></option>
              <?php
              }
              ?>
              </select>             
            </div></td>
             <td>Course Name:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <select  class="form-control" name="txtcourses" id="state-list"  onChange="getCity(this.value);" required>
            <option value="">Select Course Name</option>
            </select>         
            </div></td>
            </tr>
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
        
     
                <div class="ex3">
               <table class="table table-striped">
          	<thead>
              <tr>
                <th>Sr.No</td>
                <th>ID</td>
                <th>Date</td>
                <th>Name</td>
                <th>Fathername</td> 
                <th>Lastname</td> 
                 <th>Address</td>
                <th>Contact</td>
                <th>CourseMode</td>
                <th>CourseName</td>
                <th>Handle By</td>
                <th>Edit</th>
                <th>Admitted</th>
            </tr>
           
          </thead>
          	<tbody>
          		<tr>
          			  <?php
                                    include 'Conn.php';
                                    $sql="select * from enquiry where active='1' and admit='0' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                             $cnsql="select * from coursesname where id='".$row['courseName']."'";
                                            $cnresult=$con->query($cnsql);
                                            $cnrow=$cnresult->fetch_assoc();

                                            $nsql="select * from staff where StaffId='".$row['handleby']."'";
                                            $nresult=$con->query($nsql);
                                            $nrow=$nresult->fetch_assoc();

                                             $cmsql="select * from coursesmode where id='".$row['courseMode']."'";
                                            $cmresult=$con->query($cmsql);
                                            $cmrow=$cmresult->fetch_assoc();

                                            ?>
                                            <tr>
                                            <td><?php echo $no;//$row['id'];?></td>
                                             <td><?php echo $row['studentid'];?></td>
                                             <td><?php   $date=$row['date'];
                   $date=strtotime($date);
                    $date=date('d-m-Y',$date);echo $date ?></td>
                                            <td><?php echo $row['name'];?></td>
                                             <td><?php echo $row['fathername'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            
                                             <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                             <td><?php echo $cmrow['name'];?></td>
                                            <td><?php echo $cnrow['name'];?></td>
                                            <td><?php echo $nrow['fullname'];?></td>
                                            
                                            <!--<td><a href="delstaff.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                           
                                           <td><input type="button" class="btn btn-info"  onClick="deleteme(<?php echo $row['id'];?>)" name="Delete" value="Edit"></td>
                                            <td><input type="button" class="btn btn-info"  onClick="admit(<?php echo $row['id'];?>)" name="Delete" value="Admitted"></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Do you want Edit this record....!")){
                                             window.location.href='editenquiry.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                              function follwup(delid)
                                             {
                                             if(confirm("Do you wamt to send message....!")){
                                             window.location.href='sms.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                              function admit(delid)
                                             {
                                             if(confirm("Do you want to Admit this student....!")){
                                             window.location.href='addadmint.php?varname=' +delid+'';
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

</body></html>