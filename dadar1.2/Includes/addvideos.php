 <?php
include 'VidConn.php';
if(isset($_POST['import']))
{
 
        $desp=protect($_POST['txtdesp']);
		$duration=protect($_POST['txttime']);
		$cata=protect($_POST['txtcatagy']);
		$date=protect($_POST['txtdate']);
		$uploadby=1;

		$photo = pathinfo($_FILES['txtpic']['name']);
		$ext1 = $photo['extension']; // get the extension of the file
		$newname1 = $desp.".".$ext1; 
		$target1 = 'img/'.$newname1;
		move_uploaded_file( $_FILES['txtpic']['tmp_name'], $target1);

		$vid = pathinfo($_FILES['txtvideos']['name']);
		$ext2 = $vid['extension']; // get the extension of the file
		$newname = $desp.".".$ext2; 
		$target2 = 'videos/'.$newname;
		move_uploaded_file( $_FILES['txtvideos']['tmp_name'], $target2);

		


		$stsql = "INSERT INTO `videos`(`id`, `pic`, `videos`, `catalogid`, `desp`, `duration`, `uploadby`, `uploaddate`, `active`) 
		VALUES ('','$target1','$target2','$cata','$desp','$duration','$uploadby','$date','1')";
   		if($con->query($stsql)==true)
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
                                     <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! Please fill the form
                                        </div>
                                         </div>
                                </div>
                            </div>
                        </div>';
        }

}
?>