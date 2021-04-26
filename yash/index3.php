<?php
$key=md5('india');
$salt=md5('india');
function encrypt($string,$key)
{
    $string=rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
    return $string;
}
//function decrypt($string,$key)
//{
//    $string=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB));
//    return $string;
//}
function hashword($string,$salt)
{
    $string=crypt($string,'$1$'.$salt.'$1$');
    return $string;
}

function protect($string)
{
    $string=mysql_real_escape_string(trim(strip_tags(addslashes($string))));
    return $string;
}
?>
<?php
include 'Conn.php';

if(isset($_POST['submit']))
{
   session_start();
  $usernme=$_POST['txtusername'];
  $passwd=$_POST['txtpasswd'];
  $pswd=encrypt($passwd, $key);
  $sql="select id from admin where username='$usernme' and passwd='$pswd'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
  
    $_SESSION['login_user']=$usernme;
    header("location:index.php");
  }
  else
  {
    echo "Invaild username and password";
  }
  
}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="l/css/style.css">

  
</head>

<body>

  <form class="index3.php" method="post">

<div class="form">
  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input type="text" class="input"  name="txtusername" placeholder="Username"/>
  
    <div class="spanColor"></div>
    <input type="password" class="input" name="txtpasswd" placeholder="Password"/>
  </div>
  <button class="submit" name="submit" >Login</button>
</div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="l/js/index.js"></script>




</body>

</html>
