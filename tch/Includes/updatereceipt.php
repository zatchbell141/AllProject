<?php
include 'Conn.php';
include 'protect.php';
if(isset($_POST['btnsubmit']))
{

    $id=protect($_POST['txtid']);
    $decp=protect($_POST['txtreason']);

		$sql="update receipt set  `Total`='0', `Balance`='0', `Paid`='0', `Late`='0',decp='$decp' where `id`='$id'";
		if($con->query($sql)==true)
                    {
                        echo '
                         <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                                                    <div class="alert alert-success" role="alert">Your Receipt is Deleted...!!
                                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
                        ';
					                        /* echo '<script>
					    window.location = "http://localhost:81/yashdadar/tmvfees.php";
					</script>';*/
                    
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
?>