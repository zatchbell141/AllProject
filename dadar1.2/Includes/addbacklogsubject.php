<?php
                              if(isset($_POST['btnsub']))
                              {
                                  $studentid=$_POST['txtstudentid'];
                                  $fullname=$_POST['txtfullname'];
                                  $seat=$_POST['txtseat'];
                                  $prn=$_POST['txtprn'];
                                  $type=$_POST['type'];
                                  $inter;
                                  $exter;
                                  $pract;
                                  $date=$_POST['txtdate'];
                                   if($type=='Internal')
                                    {
                                        $exter="0";
                                        $inter="Internal";
                                    }
                                    if($type=="External")
                                    {
                                        $inter="0";
                                        $exter="External";
                                    }
                                    if($type=='BOT')
                                    {
                                        $inter="Internal";
                                        $exter="External";
                                    }
                                     if($type=='Pratical')
                                    {
                                        $inter="0";
                                        $exter="0";
                                        $pract="Pratical";
                                    }
                               foreach($_POST['check_list'] as $check) {
                                    //echo $check; //echoes the value set in the HTML form for each checked checkbox.
                                                 //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                                                 //in your case, it would echo whatever $row['Report ID'] is equivalent to.
                                        include 'Conn.php';
                                        $subjectnam=$check;
                                        $tsisql="select * from subject where id='$subjectnam' and active='1' ORDER BY id DESC";
                                         $tsiresult=$con->query($tsisql);
                                         $tsirow=$tsiresult->fetch_assoc();
                        
                                         $code=$tsirow['code'];
                                         $subjectname=$tsirow['name'];
                                         $examyrs=$_POST['txtexamyrs'];
                        
                                    $sql="INSERT INTO `backlog`(`id`, `subcode`, `subname`, `fullname`, `studentid`, `seat`, `prn`, `inter`, `exter`,`pract`, `date`,`examyrs`) VALUES ('','$code','$subjectname','$fullname','$studentid','$seat','$prn','$inter','$exter','$pract','$date','$examyrs')";
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
                                       
                               
                                }
                              }
                        
                             ?>