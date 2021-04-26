          <?php
          if(isset($_POST['btnsubmit']))
          {
              
          
                include 'Conn.php';
                   include 'protect.php';
                    $name=protect($_POST['txtname']);
                    $Address=protect($_POST['txtaddress']);
                    $per=protect($_POST['txtpercentage']);
                    $Stream=protect($_POST['txtstream']);
                    $college=protect($_POST['txtcollege']);
                    //$phno=protect($_POST['txtphone']);
                    $stream=protect($_POST['txtstream']);
                    $lastname=protect($_POST['txtlastname']);
                    $fathername=protect($_POST['txtfathername']);
                    $email=protect($_POST['txtemail']);
                    $contact=protect($_POST['txtcontact']);
                    $date=date('Y-m-d');
                $fullanme=$name.''.$lastname.''.$fathername;
                    if($name==null)
                    {
                          echo '
                                <div class="alert-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="alert-inner">
                                                    <div class="alert-hd">
                                                         <div class="alert-list">
                                     <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! Please fill the form
                                        </div>
                                         </div>
                                </div>
                            </div>
                        </div>';
                       
                    }
                    else
                    {
                        $query="INSERT INTO `enquiry`(`id`, `name`, `Address`, `per`, `Stream`, `college`, `phno`, `reference`,`admitted`,`date`) VALUES ('','$fullanme','$Address','$per','$Stream','$college','$contact','$email','0','$date')";
                  
                   if($con->query($query)==true)
                    {
                        echo '
                         <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                                                    <div class="alert alert-success" role="alert">Your data successfully added..!!
                                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
                        ';
                        
                         //--------------------------------------------SMS------------------------------
     $phno=$contact;
   // Authorisation details.
	$username = "atulvishwakarma3095@gmail.com";
	$hash = "81afab145fab8fe78cadb6dc56551614b3bba6a9a632016ec3876551a60147af";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $phno; // A single number or a comma-seperated list of numbers
	$msg ="Thank you for Showing Interest in BCA Admission process for Academic Year 2019-20 for more information Vist Site:www.bcaedu.in Contact No:9820996548/9167218889";
	//$msg="Thank You To Attending Computer Lecture In Yash Infotech";
	$message = $msg;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
                        
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
                    </div>
                </div>
                        ';

                    }
                    }
          }  
                
               
?>