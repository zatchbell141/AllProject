<?php
    include 'Conn.php';
    $id=$_GET['varname'];
    $sql="select * from addonline where id='$id'";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();
    $name= $row['name'];
    $lastname= $row['lastname'];
    $fathername= $row['fathername'];
    $mothername= $row['mothername'];
    $course= $row['course'];
    $admyrs= $row['admyrs'];
    $stdpic= $row['stdphoto'];
    $fullname=$lastname.' '.$name.' '.$fathername;
    $gender= $row['gender'];
    $address= $row['address'];
    $dob= $row['dob'];
    $contact= $row['contact'];
    $aadhar=$row['aadhar'];
    $email=$row['email'];
    $prn=$row['prn'];
    
  $sql="select id from studentdt where fullname='$fullname' and coursename='$course'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    
    echo "Already Admitted..!!";
   
  }
  else
  {
       $sql="INSERT INTO `studentdt`(`studentid`, `pic`, `fullname`, `coursecode`, `coursename`, `lastname`, `firstname`, `fathername`, `mothername`, `dob`, `gender`, `statusm`, `localaddress`, `permaddress`, `caste`, `state`, `pincode`, `mob`, `email`, `prn`, `trn`, `qualification`, `medium`, `admissionstatus`, `aadhar`, `CenterFormNo`, `admissionyrs`, `feesplan`, `active`) 
    VALUES ('','$stdpic','$fullname','044','$course','$lastname','$name','$fathername','$mothername','$dob','$gender','0','$address','$address','0','0','0','$contact','$email','$prn','0','0','0','0','$aadhar','0','$admyrs','0','1')";
    if($con->query($sql)==true)
    {
        header("location:tyonlineadmission.php");
    }
    else{
           echo '
                        <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                             <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! failed to add.!
                                </div>
                                 </div>
                        </div>
                    </div>
                </div>
                        ';  
    }
  }
?>