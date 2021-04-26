<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'Includes/header.php';?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'Includes/sidebar.php';?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include 'Includes/topmenu.php';?>
        <!-- Topbar -->
        <?php
            $name=$_SESSION['login_id'];
            $sql="select * from addonline where tempuserid='$name'";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();

            $name=$row['name'];
            $middlename=$row['middlename'];
            $lastname=$row['lastname'];
            $fathername=$row['fathername'];
            $email=$row['email'];
            $contact=$row['contact'];
            $Caste=$row['caste'];
            $aadhar=$row['aadhar'];

        ?>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Admin Table</h6>
                </div>
                <div class="table-responsive p-3">
                <form action="personaldetails.php" method="post" autocomplete="off" enctype="multipart/form-data" >
                  <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                    <tr>
          <td><img id="blah" src="#" alt="your image" name="stdphoto"/></td>
          <td><b>Photo:</b><input type="file" onchange="readURL(this);" class="form-control" name="stdphoto" placeholder="Pin Code"  required accept=".jpg,.png"></td>
          <td colspan="2"><b>Course<select name="txtstudcoursename" class="form-control "  required>
          <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
          <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
          <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
          <option value="Bachelor of Computer Applications- R- Direct Second">Bachelor of Computer Applications- R- Direct Second</option>
          </select></b></td>
        </tr>
        <tr>
          <td><b>Course Code<input type="text" class="form-control " name="txtstudcode" placeholder="Course Code" value="044" readonly></b></td>
          <td><b>Admission Status<input type="text" class="form-control " name="txtstudadmission" placeholder="Admission Status" value="In Process" readonly></b></td>
          <td><b>Center Code<input type="text" class="form-control " name="txtcenterno" placeholder="Center Code" value="231" readonly></b></td>
        </tr>
        <tr>
          <th colspan="4"><b style="color:red" align="center">Personal Details</b></th>
        </tr>
       <tr>
        <td>Name:<input type="text" name="txtstdname"  value="<?php echo $name?>"  class="form-control" placeholder="Name"></td>
        <td>Last name:<input type="text" name="txtstlname"  value="<?php echo $lastname?>" class="form-control" placeholder="Last Name"></td>
        <td>Father name:<input type="text" name="txtsfname" value="<?php echo $middlename?>" class="form-control" placeholder="Father Name"></td>
        <td>Mother name:<input type="text" name="txtsmname"  value="<?php echo $fathername?>" class="form-control" placeholder="Mother Name"></td>
       </tr>
       <tr>
          <td>Date of Birth:<input type="date" class="form-control " name="txtstuddob" placeholder="Date of Birth" required></td>
          <td>Gender<select name="txtstudgender"  class="form-control " required>

                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
          </td>
          <td>Email:<input type="text"class="form-control "  name="txtstudemail" value="<?php echo $email;?>"placeholder="Email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></td>
           <td>Contact:<input type="text" class="form-control " name="txtstudcontact" value="<?php echo $contact;?>" placeholder="Contact No" title="Enter 10 digit Phone Number" required pattern="[7-9]{1}[0-9]{9}"></td>              
          </tr>
          <tr>
            <td>Status:<select name="txtstudstatus" class="form-control" required>
                       <option value="Married">Married</option>
                       <option value="Unmarried">Unmarried</option>
                       </select>
            </td>
            <td>Caste:<input type="text" class="form-control" value="<?php echo $Caste;?>" name="txtstudcaste" placeholder="Caste" required></td>
          <td colspan="2">Aadhar Card Number:<input type="text" class="form-control " name="txtstudaadhar" placeholder="Aadhar Card Number" title="Enter your 12 digit aadhar card" value="<?php echo $aadhar?>" required pattern="\d{12}"></td>
          </tr>
          <tr>
            <th colspan="4"><b style="color:red" align="center">Address Details</b></th>
             </tr>
            <tr>
             <td colspan="2">Local Address:<input type="text" class="form-control " name="txtstudlocaladd" placeholder="Local Address" required></td>
              <td>State:<input type="text" class="form-control " name="txtstudstate" placeholder="State" title="Enter Only Characters" required pattern="^[A-Za-z -]+$"></td>
              <td>Pin Code:<input type="text" class="form-control " name="txtstudpin" placeholder="Pin Code" title="Enter Only Characters" required pattern="\d{6}"></td>
            </tr>
          <tr>
            <th colspan="4"><b style="color:red" align="center">Qualification Details</b></th>
         </tr>
         <tr>
            <td>Qualification:<select name="txtstudquli" class="form-control " required>
                 <option value="SSC">SSC</option>
                 <option value="Bachelor of Computer Applications-E-First Year">FYBCA</option>
                 </select>
            </td>
             <td>
                              University/Board:<select class="form-control" name="txtuniversity1">
                                 <?php
                                include 'includes/bcaConn.php';
                                 $query1="select * from coldata";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id']?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                              </select>
                            </td>
            <td>Passing Year:
                                 <select name="year" class="form-control ">
                                  <option value=''>Select Year of Passing</option>
                                  <?php
                                    for ($year = 1991; $year <= 2019; $year++) {
                                      $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                                      echo "<option value=$year $selected>$year</option>";
                                    }
                                  ?>
                                </select>
                                </div></td>
            <td>Percentage:<input type="text" class="form-control " name="txtpercan" placeholder="Percentage" required></td>
            <tr>
                                   <td>Qualification:<select name="txtstudqulihsc" class="form-control " required>
                              <option value="HSC">HSC</option>
                              <option value="MCVC">MCVC</option>
                              <option value="ITI-NCTVT">ITI-NCTVT</option>
                              <option value="Diploma in Computers">Diploma in Computers</option>
                              <option value="Diploma in IT">Diploma in IT</option>
                              <option value="Diploma in E&TC">Diploma in E&TC</option>
                              <option value="Bachelor of Computer Applications- R- Second Year">SYBCA</option>
                              </select></div></td>
                            <td>
                              University/Board:<select class="form-control" name="txtuniversity">
                                 <?php
                                include 'Includes/bcaConn.php';
                                 $query1="select * from coldata";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id']?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                              </select>
                            </td>
                               <td>Passing Year:
                                 <select name="yearhsc" class="form-control ">
                                  <option value=''>Select Year of Passing</option>
                                  <?php
                                    for ($year = 1991; $year <= 2019; $year++) {
                                      $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                                      echo "<option value=$year $selected>$year</option>";
                                    }
                                    ?>
                                </select>
                                </td>
                             
                                <td>Percentage:<input type="text" class="form-control " name="txtperhsc" placeholder="Percentage" required></div></td>
                                </tr>
                                <tr>
                                  <th colspan="4"><b style="color:red" align="center">Upload Documents</b></th>
                                </tr>
                                <tr>
                                  <td>HSC/FYBCA/SYBCA:<input type="file" class="form-control" name="txtphotohsc" placeholder="Pin Code" required  accept=".jpg,.png"></td>
                                  <td>Date Of Brith Certificate:<input type="file" class="form-control" name="txtdobphoto" placeholder="Pin Code" required accept=".jpg,.png"></td>
                                  <td>Aadhar Card:<input type="file" class="form-control" name="txtaadharphoto" placeholder="Pin Code" required accept=".jpg,.png"></td>
                                  <td>Others:<input type="file" class="form-control" name="txtotherphoto" placeholder="Pin Code" accept=".jpg,.png"></td>
                                </tr>
                                <tr>
                              <td colspan="4"><input type ="submit" class="btn btn-outline-primary" value="Submit Personal Details"  name="btnsubmit"></td>
                            </form>
                    </tr>
                    <tr>
                      <td colspan="5"><?php include 'Includes/updateadmindata.php';?></td>
                    </tr>
                  </table>
                </div>
              </div>
              </div>
            </div>
        </div>
        <!---Container Fluid-->
      
      <script>
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
     <?php include 'Includes/footer.php';?>
    
  

 <?php include 'Includes/script.php';?>
</body>

</html>