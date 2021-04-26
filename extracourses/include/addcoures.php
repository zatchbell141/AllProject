<?php
	include 'Conn.php';
if (isset($_POST['btnsubmit'])) {

	$name=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$gender=$_POST['txtgender'];
	$email=$_POST['email'];
	$courses=$_POST['txtcourses'];


	$sql="select * from coursesreg where fullname='$name' and lastname='$lastname' and email='$email'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  
  if($count==1)
  {
  
    echo '<div id="error_message"> <h3>Error</h3> Sorry already applied..!!
    	<ul>
    		<li>Fullname:'.$name.' '.$lastname.'</li>
    		<li>Course:'.$courses.'</li>
    	</ul>
     </div>';
  }
  else
  {
    $query="INSERT INTO `coursesreg`(`id`, `fullname`, `lastname`, `email`, `gender`, `courses`) VALUES ('','$name','$lastname','$email','$gender','$courses')";
	if($con->query($query)==true)
        {
        	echo '<div id="success_message"> <h3>Applied Successfully.</h3> </div>';
        }
        else{
        	echo '<div id="error_message"> <h3>Error</h3> Sorry there was an error sending your form. </div>';
        }
  }


	
}

?>