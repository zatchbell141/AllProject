 <?php
                      include 'Includes/Conn.php';
                      //include 'Includes/pass.php';
                      if(isset($_POST['btnlogin']))
                      {
                         session_start();
                        $usernme=$_POST['txtusername'];
                        $passwd=$_POST['txtpasswd'];
                        $pswd=md5($passwd);
                        $sql="select * from users where username='$usernme' and passwd='$pswd'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        $count=mysqli_num_rows($result);
                        if($count==1)
                        {
                        
                          $_SESSION['login_username']=$usernme;
                          $_SESSION['login_fullname']=$row['fullname'];
                          $_SESSION['login_id']=$row['id'];
                          header("location:home.php");
                        }
                        else
                        {
                          echo "Invaild username and password";
                        }
                        
                      }

                      ?>