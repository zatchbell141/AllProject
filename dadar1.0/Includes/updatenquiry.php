          <?php
          if(isset($_POST['btnsubmit']))
          {
              
          
                include 'Conn.php';
                   include 'protect.php';
                    
                    $Address=protect($_POST['txtaddress']);
                    $per=protect($_POST['txtpercentage']);
                    $Stream=protect($_POST['txtstream']);
                    $college=protect($_POST['txtcollege']);
                    //$phno=protect($_POST['txtphone']);
                    $stream=protect($_POST['txtstream']);
                    $id=protect($_POST['txtid']);
                    $email=protect($_POST['txtemail']);
                    $contact=protect($_POST['txtcontact']);
                    $date=date('Y-m-d');
                    $fullanme=protect($_POST['txtname']);
                    $query="update `enquiry` set  `name`='$fullanme', `Address`='$Address', `per`='$per', `Stream`='$Stream', `college`='$college', `phno`='$contact', `reference`='$email',`admitted`='0' where id='$id'";
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
                                                    <div class="alert alert-success" role="alert">Your data successfully Updated..!!
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
                    }
          
                
               
?>