<?php
include 'Conn.php';
include 'session.php';
$key=md5('india');
function decrypt($string,$key)
{
    $string=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB));
    return $string;
}
function protect($string)
{
    $string=mysql_real_escape_string(trim(strip_tags(addslashes($string))));
    return $string;
}
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
          <li><a href="receipt.php">Receipt</a></li>
          <li><a href="installments.php">Balance Receipt</a></li> 
          <li><a href="tcoll.php">Collection</a></li> 
          <li><a href="batch.php">Batch Reports</a></li>
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
            <!--<li class="active"><a href="https://getbootstrap.com/docs/3.3/examples/dashboard/#">Overview <span class="sr-only">(current)</span></a></li>-->
           <li><a href="enquiry.php">Add Enquiry</a></li>
           <li><a href="followup.php">Follow Up</a></li>
          <li><a href="enquiryreports.php">SMS Blast</a></li>
          <li><a href="enquiryreports.php">Enquiry Reports</a></li>
          </ul>
          <ul class="nav nav-sidebar">
           <li><a href="admited.php">Admitted Students</a></li>
               <li><a href="addadmin.php">Add Admin</a></li>
               <li><a href="addstaff.php">Add Users</a></li>
               <li><a href="#">Admin & User Reports</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          <li><a href="addcourses.php">Add Courses</a></li>
           <li><a href="addbatch.php">Add Batch</a></li>
           <li><a href="salay.php">Add Incentive</a></li>
           <li><a href="certificate.php">Certificate</a></li>
            <li><a href="msg.php">Add Message</a></li>
         <li><a href="msgreports.php">Reports Message</a></li> 
          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Budget 3<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                    <?php
                                    include 'Conn.php';
                                    $sql="select * from syllabus where cat='3' ORDER BY id ASC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            ?>
                                <li>
                                <a href="b1.1.php?varname=<?php echo $row['id'];?>"><?php echo $row['lesno'];?></a>
                                </li>
                                <?php
                            }
                       }
                       
                       ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Course</h1>
          <div class="page-header">
       <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Add Course Mode</h3>
            </div>
            <div class="panel-body">
                 <form id="addform" action="addcoursem.php" method="post">
            <table  class="table table-striped">
               
                <tr>
                  <td>Course Mode:<input type="text" class="form-control" name="txtcoursemode"></td>
                </tr>
                <tr>
                  <td><button class="btn btn-primary" id="submit">Add</button></td>
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
        </div>
 <div class="page-header">
       <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Add Course Name</h3>
            </div>
            <div class="panel-body">
                  <form id="addform" action="addcoursen.php" method="post">
            <table  class="table table-striped">
              
               <tr>
                  <td colspan="2">Course Mode<select class="form-control" name="txtcoursem">
                  <option value disabled selected>Select Course Mode</option>
                  <?php
                  require_once("dbcontroller.php");
                  $db_handle = new DBController();
                  $query ="SELECT * FROM coursesmode where active='1'";
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
                </tr>
                <tr>

                    <td>Course Name:<input type="text" class="form-control"  name="txtcoursename"></td>
                    <td>Course Code:<input type="text" class="form-control"  name="txtcoursecode"></td>
                  </tr>
                  <tr>
                  <td><button class="btn btn-primary" id="submit">Add</button></td>
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
        </div>
       
            <div class="page-header">
       <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Add Course Fees</h3>
            </div>
            <div class="panel-body">
               <form id="addform" action="addcoursefees.php" method="post">
            <table  class="table table-striped">
              
              <tr>
                  <th colspan="2" align="center">Add Course Fees</th>
                </tr>
                <tr>
                 <td>Course Mode<select class="form-control" name="txtcoursem" id="country-list" onChange="getState(this.value);">
                    <option value disabled selected>Select Course Mode</option>
                    <?php
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                    $query ="SELECT * FROM coursesmode where active='1'";
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
           </td>
           <td>Course Name:
             <select name="txtcourses" id="state-list" class="form-control" onChange="getCity(this.value);">
            <option value="">Select Course name</option>
            </select>
           </td>
         </tr>
         <tr>
          <td>Fees<input type="text" class="form-control" name="txtfees"></td>
          <td>Installments Fees<input type="text" class="form-control" name="txtinstallment"></td>
         </tr>
         <tr>
             <td colspan="2">Points:<input type="text" class="form-control" name="txtpoints"></td>
         </tr>
          <tr>
                  <td colspan="2"><button class="btn btn-primary" id="submit">Add</button></td>
                    </form>
                </tr>
                <td colspan="3"> <div class="alert alert-success" role="alert" id="msg">
                <!--<strong><div id="msg"></div></strong> -->
              </div></td>
              </tr>
            </table>
            </div>
             </div>
        </div>
 <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Staff Details</h3>
            </div>
            <div class="panel-body">
            <div  class="ex2">
               <table class="table table-striped">
          	<thead>
              <tr>
		         <th>Sr.No</td>
                <th>Course Mode</td>
                <th>course Name</td>
                 <th>course Code</td>
                <th>Fees</td>
                <th>Installments</td>
                <th>Points</td>
                <th>Delete</td>
            </tr>
          </thead>
          	<tbody>
          	 <tr>
              <?php
                                    include 'Conn.php';
                                    $sql="SELECT * FROM `fees` where active='1' ORDER  BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            $cmsql="select * from coursesmode where id='".$row['Cmode']."'";
                                            $cmresult=$con->query($cmsql);
                                            $cmrow=$cmresult->fetch_assoc();

                                            $cnsql="select * from coursesname where id='".$row['Cname']."'";
                                            $cnresult=$con->query($cnsql);
                                            $cnrow=$cnresult->fetch_assoc();
                                            ?>
                                            <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $cmrow['name'];?></td>
                                            <td><?php echo $cnrow['name'];?></td>
                                             <td><?php echo $cnrow['code'];?></td>
                                             <td><?php echo $row['fees'];?></td>
                                            <td><?php echo $row['installment'];?></td>
                                            <td><?php echo $row['points'];?></td>
                                            <!--<td><a href="delstaff.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                               <td><input type="button" class="btn btn-danger"  onClick="deleteme(<?php echo $row['id'];?>)" name="Delete" value="Delete"></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Do you want Delete!")){
                                             window.location.href='delfees.php?varname=' +delid+'';
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

</body></html>