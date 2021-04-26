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
                                        <h2>Upload Files For Students</h2>
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
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                            	   <form  action="videosfiles.php" method="post"  enctype="multipart/form-data">
      <table class="table table-sc-ex table-bordered">
        <tbody>
          <tr>
            <td colspan="2">File Name:<div class="nk-int-st"><input type="text" class="form-control" name="txtdesp" required></td>
          </tr>
          <tr>
            <td>
            Please Upload Video:<div class="nk-int-st"><input type="file" name="txtvideos" class="form-control" multiple="multiple"  accept=".pdf" />
          </td>
          <td>
            Please Upload Thumbnail:<div class="nk-int-st"><input type="file" name="txtpic" class="form-control " multiple="multiple"  accept=".pdf" />
          </td>
        </tr>
          <tr>
          
       
          <td>You Are sending this file to this year:<div class="nk-int-st"><select name="txtcatagy" class="form-control" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
              <option value="">Please Select Year</option>
               <option value="1">FYBCA</option>
                <option value="2">SYBCA</option>
                <option value="3">TYBCA</option>
                  
         </select></td>
         <td>
             Duration:<input type="text" name="txttime" class="form-control" placeholder="Duration">
         </td>
        </tr>
        <tr>
            <td>Lecture Date:<input type="date" name="txtdate" class="form-control" required></td>
          </tr>
        <tr>
          <td colspan="2"><input type="submit" name="import" class="button button1" value="Upload Video" /></td>
           </form>
         </tr>
         <tr colspan="2"><?php include 'addvideos.php';?></tr>
         </tbody>
         </table>

        
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
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                         <th>Sr.No</th>
							              <th>Name</th>
							              <th>File</th>
							              <th>Videos</th>
							              <th>Years</th>
							              <th>Duration</th>
							              <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
             
                                    include 'VidConn.php';
                                    $sql="select * from videos ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            $catid=$row['catalogid'];
                                            $catsql="SELECT * FROM `catagy` where id='$catid'";
                                            $catresult=$con->query($catsql);
                                            $catrow=$catresult->fetch_assoc();
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['desp'];?></td>
                                             <td><img src="<?php echo $row['pic'];?>" width="200px" hieght="100px"></td>
                                             <td><video width="200px" hieght="100px" controls   controlsList="nodownload">
                								  <source src="<?php echo $row['videos'];?>" type="video/mp4" >
                								  <!-- <source src="videos/Laptopbuy.mp4" type="video/ogg"> -->
                								 
                								</video></td>
                                            <td><?php echo $catrow['name'];?></td>
                                           
                                             <td><?php echo $row['duration'];?></td>
                                            <td><?php
                                            $date=$row['uploaddate'];
                                            $date=strtotime($date);
                                            $date=date('d-m-Y',$date); 
                                            echo $date?></td>
                                            
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>
                                
                               </tbody>
                                <tfoot>
                                    <tr>
                                         <th>Sr.No</th>
							              <th>Name</th>
							              <th>File</th>
							              <th>Mode</th>
							              <th>Years</th>
							              <th>Sem</th>
							              <th>Username</th>
							              <th>Date</th>
							              <th>Delete</th>
                                    </tr>
                                </tfoot>
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
        
        <script>
function configureDropDownLists(ddl1, ddl2) {
  var colours = ['SEM I', 'SEM II','For All'];
  var shapes = ['SEM III', 'SEM IV','For All'];
  var names = ['SEM V', 'SEM VI','For All'];
  var all = ['For All'];
  switch (ddl1.value) {
    case 'FYBCA':
      ddl2.options.length = 0;
      for (i = 0; i < colours.length; i++) {
        createOption(ddl2, colours[i], colours[i]);
      }
      break;
    case 'SYBCA':
      ddl2.options.length = 0;
      for (i = 0; i < shapes.length; i++) {
        createOption(ddl2, shapes[i], shapes[i]);
      }
      break;
      case 'For All':
      ddl2.options.length = 0;
      for (i = 0; i < all.length; i++) {
        createOption(ddl2, all[i], all[i]);
      }
      break;
    case 'TYBCA':
      ddl2.options.length = 0;
      for (i = 0; i < names.length; i++) {
        createOption(ddl2, names[i], names[i]);
      }
      break;
    default:
      ddl2.options.length = 0;
      break;
  }

}

function createOption(ddl, text, value) {
  var opt = document.createElement('option');
  opt.value = value;
  opt.text = text;
  ddl.options.add(opt);
}

</script>
</body>
</html>