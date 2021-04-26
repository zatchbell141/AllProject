<?php
    
    if(isset($_POST['btnsubmit']))
    {
         include 'Includes/protect.php';
    $staffid=protect($_POST['txtstaffid']);
    $phone=protect($_POST['txtphno']);
    $fullname=protect($_POST['txtdname']);
    $subject=protect($_POST['txtsubject']);
    $tropic=protect($_POST['txttropic']);
    $date=protect($_POST['txtdate']);
    $st=protect($_POST['starttime']);
    $et=protect($_POST['endtime']);
    $year=protect($_POST['year']);
          $chcksql="SELECT * FROM `salary` where name='$fullname' and subject='$subject' and sessiondate='$date'";
              $chckresult=mysqli_query($con,$chcksql);
              $chckrow=mysqli_fetch_array($chckresult);
              $count=mysqli_num_rows($chckresult);
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
                             <div class="alert alert-danger alert-mg-b-0" role="alert">Staff already in database..!!
                                </div>
                                 </div>
                        </div>
                    </div>
                </div>
                        ';
                
              }
            else
            {

   
    
    /*echo $st."<br>";
    echo $et."<br>";
    echo $date."<br>";
    echo $fullname."<br>";
    echo $tropic."<br>";*/
    //__________________________________TIME________________________________________
    
    
     $dur= date_create($st)->diff(date_create($et))->format('%h:%i');
     $ex=explode(":",$dur);
    /* echo $dur."<br>";*/
    
    
    //________________________________________MIN__________________________________
                        function hoursToMinutes($hours)
                        {
                            if (strstr($hours, ':'))
                            {
                                # Split hours and minutes.
                                $separatedData = explode(':', $hours);

                            $minutesInHours    = $separatedData[0] * 60;
                            $minutesInDecimals = $separatedData[1];

                             $totalMinutes = $minutesInHours + $minutesInDecimals;
                        }
                        else
                        {
                             $totalMinutes = $hours * 60;
                        }

                        return $totalMinutes;
                        }
                        function minutesToHours($minutes)
                            {
                                $hours          = floor($minutes / 60);
                                $decimalMinutes = $minutes - floor($minutes/60) * 60;

                            # Put it together.
                            $hoursMinutes = sprintf("%d:%02.0f", $hours, $decimalMinutes);
                            return $hoursMinutes;
                            }
                //_____________________________________________________________________________
    
                          include 'Conn.php';
                          
                         $ssql="select * from sal where name='sal'";
                         $sresult=$con->query($ssql);
                         $srow=$sresult->fetch_assoc();
                         $tol=$srow['sal'];
                         /*echo $tol."<br>";*/
                         $tol1=$tol/60;
                        
                         
                       $tsisql="select * from subject where id='$subject' and active='1' ORDER BY id DESC";
                       $tsiresult=$con->query($tsisql);
                        $tsirow=$tsiresult->fetch_assoc();
                         $sub=$tsirow['name'];
                        /* echo $sub."<br>";*/
                       
                         
                        $sal=$tol1*hoursToMinutes($dur);
                        $rsal=round($sal);
                        $tot1=hoursToMinutes($dur);
                        
                       
                        
//_____________________________________Insert________________________________________
 /*   echo "StaffID:".$staffid=$_POST['txtstaffid']."<br>";  
    echo "Phone".$phone=$_POST['txtphno']."<br>";
    echo "Fullname".$fullname=$_POST['txtdname']."<br>";
    echo "Subject".$subject=$_POST['txtsubject']."<br>";
    echo "Tropic".$tropic=$_POST['txttropic']."<br>";
    echo "Date".$date=$_POST['txtdate']."<br>";
    echo "Start Tym".$st=$_POST['starttime']."<br>";
    echo "End Tym".$et=$_POST['endtime']."<br>"; 
    echo "Duration".$tot1."<br>";
    echo "Salary".$rsal."<br>";
    echo $sub."<br>";
    echo $year."<br>";*/
    
    $qrl="insert into salary(staffid,name,topic,subjectId,subject,starttime,endtime,duration,
    class,sessiondate,sal,active) values('$staffid','$fullname','$tropic','$subject','$sub','$st','$et',
    '$tot1','$year','$date','$rsal','1')";
                        if($con->query($qrl)==true)
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
    //--------------------------------------------SMS------------------------------
    $phno=$_POST['txtphno'];
   // Authorisation details.
	$username = "atulvishwakarma3095@gmail.com";
	$hash = "81afab145fab8fe78cadb6dc56551614b3bba6a9a632016ec3876551a60147af";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $phno; // A single number or a comma-seperated list of numbers
	
	
	$msg =$fullname."%nToday:$date"."%nTime:$st"."-$et"."%nSubject:$sub"."%nRemuneration:Rs.$rsal";
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
}
?>