          <?php
          if(isset($_POST['btnsubmit']))
          {
              
          
                include 'Includes/Conn.php';
                   include 'Includes/protect.php';
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