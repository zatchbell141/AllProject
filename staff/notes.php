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
          <h1 class="page-header">Notes</h1>
          
              <div class="col-md-5">
                <form id="addform" action="addnote.php" method="post">
                <table class="table table-striped ">
              
            <tr>
              <td>To: <select name="txtto" class="form-control">
              <?php
                include 'Conn.php';
                $sql="SELECT * FROM `staff` ORDER  BY StaffId DESC";
                $result=$con->query($sql);
                if($result->num_rows>0)
                {
                 while($row=$result->fetch_assoc())
                {       
                ?>
                <option value="<?php echo $row['StaffId']?>"><?php echo $row['Username']?></option>
                <?php
                  }
                }
                ?>
             </select>
             </td>
           </tr>
           
            <tr>
              <td>Work To be Done:
                <textarea class=" form-control"name="txtmsg" col="3" rows="5"></textarea>
              </td>
            </tr>
            <tr>
                    <td><button type="button"  id="submit" class="btn btn-warning">Send</button></td>
                </form>
              </tr>
            <tr>
                <td colspan="3"> <div class="alert alert-success" role="alert" id="msg">
                <!--<strong><div id="msg"></div></strong> -->
              </div></td>
          
              </tr>
          </table>
              </div>
              <div class="col-md-6">
                <table class="table table-border">
                    <tr>
                      <th>From</th>
                      <th>To</th>
                      
                      <th>Date</th>
                      <th>Task</th>
                      <th>Status</th>
                    </tr>
                    <tr>
                      <?php
                         include 'Conn.php';
                                    $sql="select * from note where active='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                    while($row=$result->fetch_assoc())
                                      {
                                       $sqls="select * from Staff where Staffid='".$row['username']."'";
                                       $results=$con->query($sqls);
                                       $rows=$results->fetch_assoc();

                      ?>
                      <tr>
                         <td><?php echo $row['from']?></td>
                        <td><?php echo $rows['fullname']?></td>
                       
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['works']?></td>
                        <td><?php $status=$row['status'];
                            if($status==0)
                            {
                              echo '<p style="color:red;">Not Completed</p>';
                            }
                            else
                            {
                               echo '<p style="color:green;">Completed</p>';
                            }


                        ?></td>

                      </tr>
                      
                    
                      <?php
                        }
                      }
                      ?>
                    </tr>
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