<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'Includes/header.php';?>
    </head>
    <body>

        <div id="wrapper">
 		<?php include 'Includes/menu.php';?>
           
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Upload Files</h1>
                        </div>
                        <div class="col-lg-12">
                              <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Upload Files
                                        </div>
                                        <div class="panel-body">
                                              <form  action="uploadfiles.php" method="post"  enctype="multipart/form-data">
                                            <table class="table table-striped">
                                                 <tr>
                                                    <td colspan="2">File Name:<input type="text" class="form-control" name="txtfilename" required></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2">
                                                    Please Upload Files:<input type="file" name="ebooks[]" class="form-control" multiple="multiple"  accept=".pdf" />
                                                  </td>
                                                </tr>
                                                  <td>You Are sending this file to this year:<select name="txtyrs" class="form-control" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
                                                              <option value="">Please Select Year</option>
                                                               <option value="FYBCA">FYBCA</option>
                                                                <option value="SYBCA">SYBCA</option>
                                                                <option value="TYBCA">TYBCA</option>
                                                                  <option value="For All">For All</option>
                                                         </select></td>
                                                         <td>
                                                           Please Select sem:<select name="txtsem" class="form-control" id="ddl2">
                                                    
                                                                
                                                         </select>
                                                          </td>
                                                        </tr>
                                                <tr>
                                                           <td colspan="2">
                                                         Please Select Mode:<select name="txtmode" class="form-control">
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
                                               <input type="hidden" name="txtdate" value="<?php echo date("Y-m-d")?>" required>
                                                 
                                                <tr>
                                                  <td colspan="2"><input type="submit" name="import" class="btn btn-primary" value="Upload" /></td>
                                                   </form>
                                                 </tr>
                                                 <tr colspan="2"><?php include 'Includes/addfiles.php';?></tr>
                                            </table>
                                        </div>
                                </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Upload Details
                                </div>
                                <div class="panel-body">
                                     <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
             
                                    include 'Includes/Conn.php';
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
                            </table>
                        </div>
                                </div>
                            </div>

                        </div>

                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

       <?php include 'Includes/footor.php';?>
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
