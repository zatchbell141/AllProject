<?php
	include 'Includes/bcaConn.php';
	include 'Includes/protect.php';
	include 'Includes/pass.php';
	
if(isset($_POST['btnsubmit']))
{
$name=strtoupper(protect($_POST['txtstdname']));
$lastname=strtoupper(protect($_POST['txtstlname']));
$fathername=strtoupper(protect($_POST['txtsfname']));
$mothername=strtoupper(protect($_POST['txtsmname']));
$fullname=strtoupper(protect($lastname." ".$name." ".$fathername." ".$mothername));
$contact=protect($_POST['txtstudcontact']);
$dobd=protect($_POST['txtstuddob']);
$dobd=strtotime($dobd);
$dobd=date('Y-m-d',$dobd);
$gender=strtoupper(protect($_POST['txtstudgender']));
$email=protect($_POST['txtstudemail']);
$statusm=strtoupper(protect($_POST['txtstudstatus']));
$caste=strtoupper(protect($_POST['txtstudcaste']));
$aadhar=protect($_POST['txtstudaadhar']);
$localaddres=strtoupper(protect($_POST['txtstudlocaladd']));
$state=strtoupper(protect($_POST['txtstudstate']));
$pin=protect($_POST['txtstudpin']);
$qulic1=protect($_POST['txtstudquli']);
$qulic2=protect($_POST['txtstudqulihsc']);
$colgun1=protect($_POST['txtuniversity1']);
$colgun2=protect($_POST['txtuniversity']);
$passingy1=protect($_POST['year']);
$passingy2=protect($_POST['yearhsc']);
$per1=protect($_POST['txtpercan']);
$per2=protect($_POST['txtperhsc']);
//$status=protect($_POST['txtstudstatus']);
$coursecode=protect($_POST['txtstudcode']);
$course=protect($_POST['txtstudcoursename']);
$admissionsts=protect($_POST['txtstudadmission']);
$centercode=protect($_POST['txtcenterno']);

$date=date('Y-m-d');

$photo = pathinfo($_FILES['stdphoto']['name']);
$ext1 = $photo['extension']; // get the extension of the file
$newname1 = $fullname.".".$ext1; 
$target1 = 'students/'.$newname1;
move_uploaded_file( $_FILES['stdphoto']['tmp_name'], $target1);

$aadharcard = pathinfo($_FILES['txtaadharphoto']['name']);
$ext2 = $aadharcard['extension']; // get the extension of the file
$newname2 = $fullname."aadharcard.".$ext2; 
$target2 = 'students/'.$newname2;
move_uploaded_file( $_FILES['txtaadharphoto']['tmp_name'], $target2);

$dob = pathinfo($_FILES['txtdobphoto']['name']);
$ext34 = $dob['extension']; // get the extension of the file
$newname34 = $fullname."dob.".$ext34; 
$target34 = 'students/'.$newname34;
move_uploaded_file( $_FILES['txtdobphoto']['tmp_name'], $target34);

$hsc = pathinfo($_FILES['txtphotohsc']['name']);
$ext4 = $hsc['extension']; // get the extension of the file
$newname4 = $fullname."result.".$ext4; 
$target4 = 'students/'.$newname4;
move_uploaded_file( $_FILES['txtphotohsc']['tmp_name'], $target4);


$others = pathinfo($_FILES['txtotherphoto']['name']);
$ext5 = $others['extension']; // get the extension of the file
$newname5 = $fullname."others.".$ext5; 
$target5 = 'students/'.$newname5;
move_uploaded_file( $_FILES['txtotherphoto']['tmp_name'], $target5);
$tempreguserid=$_SESSION['login_id'];
  $sql="select id from addonline where fullname='$fullname' and aadhrcd='$aadhar'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
       echo '
                        <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                             <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! Fail to submit because you already filled..!!
                                </div>
                                 </div>
                        </div>
            
                        ';
  }
  else
  {
//this to store in database $target4;
$sql="INSERT INTO `addonline`(`id`, `stdphoto`, `coursecode`, `course`, `addmissionstatus`, `centercode`, `name`, `lastname`, `middlename`, `fathername`, `mothername`, `dob`, `gender`, `email`, `contact`, `statusm`, `caste`, `aadhar`, `address`, `state`, `pin`, `qulic1`, `qulic2`, `univer1`, `univer2`, `year1`, `year2`, `per1`, `per2`, `hsc`, `dobcertif`, `aadhrcd`, `others`, `active`,`fullname`,`date`,`tempuserid`) 
VALUES('','$target1','$coursecode','$course','$admissionsts','$centercode','$name','$lastname','$fathername','$fathername','$mothername','$dobd','$gender','$email','$contact','$statusm','$caste','$aadhar','$localaddres','$state','$pin','$qulic1','$qulic2','$colgun1','$colgun2','$passingy1','$passingy2','$per1','$per2','$target4','$target34','$target2','$target5','1','$fullname','$date',$tempreguserid)";
if($con->query($sql)==true)
{
     $stsql = "INSERT INTO studentdt(fullname,coursecode,coursename,lastname,firstname,fathername,mothername,dob,gender,statusm,localaddress,permaddress,caste,state,pincode,mob,email,prn,trn,qualification,medium,admissionstatus,aadhar,CenterFormNo,active)
    VALUES ('$fullname','$coursecode','$course','$lastname','$name','$fathername','$mothername','$dobd','$gender','$statusm','$localaddres','$localaddres','$caste','$state','$pin','$contact','$email','0','0','0','ENGLISH','In Process','$aadhar','0',1)";

   if($con->query($stsql)==true)
        {
           echo '<script>
            window.location = "http://tech.bcaedu.in/onlinefrees.php?varname='.$fullname.'";
        </script>';
         
        
        }
        else
        {
            echo "Failed";
        }
    
}
else
{
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
            
                        ';
}
}
}
	if(isset($_POST['btnsignup']))
	{
		
	 	 $name=protect($_POST['txtname']);
	 	 $lastname=protect($_POST['txtlastname']);
	 	 $username=$_POST['txtusername']."@bcaedu.in";
	 	 $passwd=protect(encrypt($_POST['txtpasswd'],$key));
	 	 $email=protect($_POST['txtemail']);
	 	 
	 	 $sql="INSERT INTO `signup`(`id`, `name`, `lastname`, `email`, `username`, `passwd`) VALUES ('','$name','$lastname','$email','$username','$passwd')";
		if($con->query($sql)==true)
		{
		echo '
		                         <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h6><i class="fas fa-check"></i><b>Success..!</b></h6>
                    Username='.$username.'
                    Password='.decrypt($passwd,$key).'
                  </div>
		                        ';
		}
		else
		{
		 echo '
		                        <div class="alert alert-danger alert-dismissible" role="alert">
			                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                      <span aria-hidden="true">&times;</span>
			                    </button>
			                    <h6><i class="fas fa-ban"></i><b> Stop..!</b></h6>
			                    Failed To Update Record.Please check data..!!
			                  </div>
		                        ';
		}
	}
?>