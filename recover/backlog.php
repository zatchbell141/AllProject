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
<style>
 .box
  {
       width: 1002px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
  margin-top: 17px;
  height: 1000px;
  }
  .ex4 {
    background-color: white;
     width: 100%;

    height: 223px;

    overflow: auto;
}

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
                                        <h2>Backlog Fees Receipt</h2>
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
     <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        
                            
                                     <form action="backlog.php" method="post" autocomplete="off">
                                    <table class="table table-sc-ex table-bordered">
                                      <tr>
                                        <td>Fullname:<input type="text" list="browsers" name="txtstudent" class="form-control"></td>
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
                                        <td><input type="submit" name="btnsubmit" value="Search" class="button button1"></td>
                                      </tr>
                                    </form>
                                      <?php
                                        if(isset($_POST['btnsubmit']))
                                        {
                                            $name=$_POST['txtstudent'];
                                             $sql="select * from studentdt where fullname='".$name."'";
                                             $result=$con->query($sql);
                                             $row=$result->fetch_assoc();
                                        }
                                      ?>
                                    </table>
                                    <input type="hidden" name="txtstudentid" value="<?php echo $row['studentid']?>">
                                    <table class="table table-sc-ex table-bordered">
                                      <tr>
                                        <td>Date:<div class="nk-int-st"><input type="text" class="form-control" name="txtdate" value="<?php echo date('Y-m-d')?>" readonly></div></td>
                                      
                                        <td>PRN:<div class="nk-int-st"><input type="text" name="txtprn" class="form-control"  value="<?php echo $row['prn']?>" readonly></div></td>
                                         <td>FullName:<div class="nk-int-st"><input type="text" class="form-control" name="txtfullname" value="<?php echo $row['fullname']?>" readonly></div></td>
                                          <td>Seat No:<div class="nk-int-st"><input type="text" class="form-control" name="txtseat" ></div></td>
                                      </tr>
                                       <tr>
                                  <td>
                                    Exam Mode:
                                    <select name="type" class="form-control">
                                <option value="Internal">Internal</option>
                                <option value="External">External</option>
                                <option value="Pratical">Pratical</option>
                                <option value="BOT">Both INT & EXT</option>
                            </select>
                                  </td>
                                   <td>Mode:<select name="paytype"  class="form-control">
                                <option value="Regular">Regular</option>
                                <option value="Late">Late</option>
                            </select>
                            </td>
                               <td colspan="2">
                                   Exam Year:<select name="txtadmyrs" class="form-control">
                                                            <option value="">Select Exam Year </option>
                                                             <?php
                                                            include 'Includes/Conn.php';
                                                             $query1="select * from examyear";
                                                              $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                             foreach($gradenameresult as $grd)
                                                             {
                                                             ?>
                                                             <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                                             <?php
                                                             }
                                                             ?>
                                                        </select>
                               </td>        
                                     
                                    </tr>
                                 </tr>  
                                 
                                    </table>
                                    <div class="ex4">
                                     <?php
                        
                                                            include 'Conn.php';
                                                            $sql="select * from subject where active='1'";
                                                            $result=$con->query($sql);
                                                            if($result->num_rows>0)
                                                            {
                                                                while($row=$result->fetch_assoc())
                                                                {                              
                        
                            ?>
                            
                                
                         <input type="checkbox" class="i-checks" name="check_list[]" value="<?php echo $row['id'];?>"><i></i><?php echo $row['subject'];?><br>
                          
                        <?php
                        
                        }
                        }
                        ?>
                        
                        </div>
                        <table class="table table-bordered  table-hover">
                          <tr>
                              <td><input type="submit" class="button button1" name="btnsub" value="Submit">
                          </tr>
                        </table>
                         <?php
                              if(isset($_POST['btnsub']))
                              {
                                  $studentid=$_POST['txtstudentid'];
                                  $fullname=$_POST['txtfullname'];
                                  $seat=$_POST['txtseat'];
                                  $prn=$_POST['txtprn'];
                                  $type=$_POST['type'];
                                  $inter;
                                  $exter;
                                  $pract;
                                  $date=$_POST['txtdate'];
                                   if($type=='Internal')
                                    {
                                        $exter="0";
                                        $inter="Internal";
                                    }
                                    if($type=="External")
                                    {
                                        $inter="0";
                                        $exter="External";
                                    }
                                    if($type=='BOT')
                                    {
                                        $inter="Internal";
                                        $exter="External";
                                    }
                                     if($type=='Pratical')
                                    {
                                        $inter="0";
                                        $exter="0";
                                        $pract="Pratical";
                                    }
                               foreach($_POST['check_list'] as $check) {
                                    //echo $check; //echoes the value set in the HTML form for each checked checkbox.
                                                 //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                                                 //in your case, it would echo whatever $row['Report ID'] is equivalent to.
                                        include 'Conn.php';
                                        $subjectnam=$check;
                                        $tsisql="select * from subject where id='$subjectnam' and active='1' ORDER BY id DESC";
                                         $tsiresult=$con->query($tsisql);
                                         $tsirow=$tsiresult->fetch_assoc();
                        
                                         $code=$tsirow['code'];
                                         $subjectname=$tsirow['name'];
                                         $examyrs=$_POST['txtexamyrs'];
                        
                                    $sql="INSERT INTO `backlog`(`id`, `subcode`, `subname`, `fullname`, `studentid`, `seat`, `prn`, `inter`, `exter`,`pract`, `date`,`examyrs`) VALUES ('','$code','$subjectname','$fullname','$studentid','$seat','$prn','$inter','$exter','$pract','$date','$examyrs')";
                                    if($con->query($sql)==true)
                                    {
                                    echo "Insert sucessfull..!!";
                                    }
                                    else
                                    {
                                    echo "Failed";
                                    }
                                       
                               
                                }
                              }
                        
                             ?>
                           
                      
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
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-bordered  table-hover">
                               <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>PRN</th>
                                        <th>Seat No</th>
                                        <th>Fullname</th>
                                        <th>Backlog</th>
                                        <th>Subject</th>
                                        <th>External</th>
                                        <th>Internal</th>
                                        <th>Pratical</th>
                                        <th>Pay</th>
                                        <th>Print Receipt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    include 'Conn.php';
                                    $sql="select * from backlog ORDER BY id desc";
                                    $result=$con->query($sql);
                                    $no=0;
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $row['prn']?></td>
                                              <td><?php echo $row['seat']?></td>
                                            <td><?php echo $row['fullname']?></td>
                                          
                                            <td><?php echo $row['subcode']?></td>
                                            <td><?php echo $row['subname']?></td>
                                            <td><?php echo $row['exter']?></td>
                                             <td><?php echo $row['inter']?></td>
                                             <td><?php echo $row['pract']?></td>
                                              <td><a href='backlogfees.php?varname=<?php echo $row['fullname']?>&prnno=<?php echo $row['prn']?>&seat=<?php echo $row['seat']?>&sid=<?php echo $row['studentid']?>&date=<?php echo $row['date']?>&examyrs=<?php echo $row['examyrs']?>'>Pay</a></td>
                                               <td><a href='backlogreceipt.php?varname=<?php echo $row['studentid']?>&seat=<?php echo $row['seat']?>'>Print</a></td>
                                            </tr>
                                            <?php
                                          }
                                        }
                                        ?>
                                </tbody>
                                 <tfoot>
                                    <tr>
                                         <th>Sr.No</th>
                                        <th>PRN</th>
                                        <th>Seat No</th>
                                        <th>Fullname</th>
                                        <th>Backlog</th>
                                        <th>Subject</th>
                                        <th>External</th>
                                        <th>Internal</th>
                                        <th>Pratical</th>
                                        <th>Pay</th>
                                        <th>Print Receipt</th>
                                    </tr>
                                </tfoot>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                   <!-- icheck JS
    ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
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