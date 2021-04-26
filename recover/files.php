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
                                        <p style="color:red;"><b>You can upload your Notes here for students.Please upload 5 file at the time</b></p>
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
                            	   <form  action="files.php" method="post"  enctype="multipart/form-data">
      <table class="table table-sc-ex table-bordered">
        <tbody>
          <tr>
            <td colspan="2">File Name:<div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtfilename" required></td>
          </tr>
          <tr>
            <td colspan="2">
            Please Upload Files:<div class="nk-int-st"><input type="file" name="ebooks[]" class="form-control input-lg" multiple="multiple"  accept=".pdf" />
          </td>
        </tr>
          <tr>
          
       
          <td>You Are sending this file to this year:<div class="nk-int-st"><select name="txtyrs" class="form-control input-lg" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
              <option value="">Please Select Year</option>
               <option value="FYBCA">FYBCA</option>
                <option value="SYBCA">SYBCA</option>
                <option value="TYBCA">TYBCA</option>
                  <option value="For All">For All</option>
         </select></td>
         <td>
           Please Select sem:<div class="nk-int-st"><select name="txtsem" class="form-control input-lg" id="ddl2">
    
                
         </select>
          </td>
        </tr>
        <tr>
                   <td colspan="2">
                 Please Select Mode:<div class="nk-int-st"><select name="txtmode" class="form-control input-lg">
                <option value="">Please Select Mode</option>
                <option value="Practise">Practise Paper</option>
                <option value="Assignment">Assignment</option>
                <option value="Notes">Notes</option>
                <option value="Books">Books</option>
                <option value="EBooks">EBooks</option>
                <option value="QuestionPaper">Old Question Paper</option>
                <option value="ExamTimeTable">Exam Time Table</option>
                <option value="DailyTimeTable">Daily Time Table</option>
                <option value="CourseStructure">Course Structure</option>
                 <option value="Noties">Noties</option>
         </select>
          </td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="txtdate" value="<?php echo date("Y-m-d")?>" required></td>
          </tr>
        <tr>
          <td colspan="2"><input type="submit" name="import" class="button button1" value="Upload" /></td>
           </form>
         </tr>
         <tr colspan="2"><div id="msg"></div></tr>
         </tbody>
         </table>

         <?php
         if(isset($_POST['import']))
{
    include 'Conn.php';
    //$target="Doc/".basename($_FILES['ebooks']['name']);
    //$image=$_FILES['ebooks']['name'];
    $total = count($_FILES['ebooks']['name']);

    $Name=protect($_POST['txtfilename']);
    //$file=protect($_FILES['ebooks']['name']);
    $year=protect($_POST['txtyrs']);
    $sem=protect($_POST['txtsem']);
     $username=protect("sc@yashinfo.in");
    $mode=protect($_POST['txtmode']);
  $date=protect($_POST['txtdate']);
    //$date=strtotime($date);
    //$date=date('Y-m-d',$date);
   echo $date;
    for( $i=0 ; $i < $total ; $i++ ) {
      $tmpFilePath = $_FILES['ebooks']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "Doc/" . $_FILES['ebooks']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) 
    {
      $sql="insert into files(years,sem,name,file,active,date,mode,username) values('$year','$sem','$Name','$newFilePath','1','$date','$mode','$username')";
             mysqli_query($con,$sql);
            echo $msg="<b>"."Data Uploaded...."."</b>";
            }
            else
            {
               echo $msg="Fail to Upload..";
            }
    
  }
}
}
         ?>
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
							              <th>Mode</th>
							              <th>Years</th>
							              <th>Sem</th>
							              <th>Username</th>
							              <th>Date</th>
							              <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
             
                                    include 'Conn.php';
                                    $sql="select * from files where  active='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            
                                            <td><?php echo $row['name'];?></td>
                                         
                                            <td><a href="//backofficework.yashinfotechedu.in/tech/<?php echo $row['file'];?>"><?php echo $row['file'];?></a></td>
                                            <td><?php echo $row['mode'];?></td>
                                            <td><?php echo $row['years'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                             <td><?php echo $row['username'];?></td>
                                            <td><?php
                                            $date=$row['date'];
                                            $date=strtotime($date);
                                            $date=date('d-m-Y',$date); 
                                            echo $date?></td>
                                            <td><a href="delfiles.php?varname=<?php echo $row['id'];?>">Delete</a></td>
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