 <?php
if(isset($_POST['import']))
{
    include 'Includes/Conn.php';
    include 'Includes/protect.php';
    $total = count($_FILES['ebooks']['name']);
    $Name=protect($_POST['txtfilename']);
    $year=protect($_POST['txtyrs']);
    $sem=protect($_POST['txtsem']);
    $username=protect("sc@yashinfo.in");
    $mode=protect($_POST['txtmode']);
    $date=protect($_POST['txtdate']);
    for( $i=0 ; $i < $total ; $i++ ) 
    {
      $tmpFilePath = $_FILES['ebooks']['tmp_name'][$i];
      if ($tmpFilePath != "")
      {
        $newFilePath = "files/" . $_FILES['ebooks']['name'][$i];    
                if(move_uploaded_file($tmpFilePath, $newFilePath)) 
                {
                  $sql="insert into files(years,sem,name,file,active,date,mode,username) values('$year','$sem','$Name','$newFilePath','1','$date','$mode','$username')";
                   mysqli_query($con,$sql);
                  echo  '
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
}
         ?>