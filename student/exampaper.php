
   <?php
include 'Conn.php';
include 'ssession.php';
$msg=0;
if(isset($_POST['submit'])){
  $msg=$_POST['txtmsg'];
  $date=date('d/m/Y');
 
  $username=$_SESSION['admin_user'];
 
  date_default_timezone_set("Asia/Calcutta");
  $time=date("h:i:s");
  $query="insert into query(usernm,date,time,quest) values('$username','$date','$time','$msg')";
                    mysqli_query($con,$query); 
                    $msg=1;

}


?>
<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Yash&nbsp;Infotech</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!--<div class="fl_left">
      <ul class="nospace">
        <li><a href="index.html"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div>

    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_half first">
      <h1 class="logoname"><a href="index2.php"><span>Yash</span>Infotech</a></h1>
    </div>
    <div class="one_half">
      <ul class="nospace clear">
        <li class="one_half first">
          <div class="block clear"><span><strong class="block">Username:</strong><?php echo $_SESSION['admin_user'];?></span> </div>
        </li>
       <li class="one_half">
         <div class="block clear"><span><strong class="block"> PRN:</strong> <?php echo $_SESSION['prn'];?></span> </div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
   <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
     <li class="active"><a href="index2.php">Home</a></li>
     <!-- <li><a class="drop" href="#">Pages</a>
        <ul>-->
          <li><a href="std-syllabus.php">Syllabus</a></li>
          <li><a href="course-structure.php">Coures Structure</a></li>
          
        <!--</ul>
      </li>-->
      <li><a class="drop" href="#">Assignment</a>
        <ul>
          <!--<li><a href="#">FYBCA</a></li>-->
          <li><a class="drop" href="#">FYBCA</a>
            <ul>
              <li><a href="1st-sem-assigmnt.php">SEM 1</a></li>
            <li><a href="2nd-sem-assigmnt.php">SEM 2</a></li>
             
            </ul>
          </li>
        <li><a class="drop" href="#">SYBCA</a>
            <ul>
            <li><a href="3rd-sem-assigmnt.php">SEM 3</a></li>
              <li><a href="4th-sem-asigmnt.php">SEM 4</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">TYBCA</a>
            <ul>
           <li><a href="5th-sem-assigmnt.php">SEM 5</a></li>
              <li><a href="6th-sem-assigmnt.php">SEM 6</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a class="drop" href="#">E-Book</a>
        <ul>
          <!--<li><a href="#">FYBCA</a></li>-->
          <li><a class="drop" href="#">FYBCA</a>
            <ul>
              <li><a href="1st-sem-ebk.php">SEM 1</a></li>
              <li><a href="2nd-sem-ebk.php">SEM 2</a></li>
             
            </ul>
          </li>
        <li><a class="drop" href="#">SYBCA</a>
            <ul>
              <li><a href="3rd-sem-ebk.php">SEM 3</a></li>
              <li><a href="4th-sem-ebk.php">SEM 4</a></li>
             
            </ul>
          </li>
          <li><a class="drop" href="#">TYBCA</a>
            <ul>
              <li><a href="5th-sem-ebk.php">SEM 5</a></li>
              <li><a href="6th-sem-ebk.php">SEM 6</a></li>
             
            </ul>
          </li>
        </ul>
      </li>
     <li><a href='std-examtime.php'> Time-Table</a></li>
      <li><a  href="#">E-Learning</a>
      <ul>
          <!--<li><a href="#">FYBCA</a></li>-->
          <li><a href="software.php">Softwares</a></li>
          <li><a href="exampaper.php">Exam Paper</a></li>
         <!-- <li><a class="drop" href="#">FYBCA</a>
            <ul>
              
            <li><a href="#">Underconstruction</a></li>
             
            </ul>-->

        </ul>
         </li> 

       <li><a href='slogout.php'>Logout</a></li>
    
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ 
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ 
    <article>
      <p>Aenean ac nisl vitae lobortis</p>
      <h3 class="heading">Ultricies fusce sed ligula</h3>
      <p>Sem suscipit mollis praesent volutpat placerat nisl suspendisse</p>
      <footer><a class="btn" href="#">Potenti nunc nec urna</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <h2>Exam Papers</h2>
      
                 <table>
                  <tr>
                    <th>Year</th>
                    <th>Question Paper</th>
                  </tr>
                  <tr>
                    <td>May 2018</td>
                    <td></td>
                  </tr>
                  <table>
      <br>
      <br>
      <br>
      <br>
      <br>
      
</main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h1 class="logoname"><span>Yash</span>Infotech</h1>
      <p class="btmspace-30">When time never waits you should ask why you are waiting for the right time. If time never waits then there is no wrong time to begin doing right things.</p>
      <!--<ul class="faico clear">
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>-->
    </div>
    <div class="one_third">
      <h6 class="heading">Forms</h6>
      <ul class="nospace linklist">
        <li><b><a  href="//localhost:81/tech/Doc/Convocation Form.pdf" >Convocation Form</a></b></li>
        <li><b><a  href="//localhost:81/tech/Doc/Correction in Sub, PRN, Name, Center1.pdf" >Correction in Sub, PRN, Name, Center1</a></b></li>
        <li><b><a  href="//localhost:81/tech/Doc/migration form.pdf" >Migration form</a></b></li>
        <li><b><a  href="//localhost:81/tech/Doc/Revaluation Form_25092014.pdf" >Revaluation Form</a></b></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Student Query</h6>
      <p class="nospace btmspace-15">If you have any query regrading to faculties and subjects.</p>
   
      <form method="post" action="index.php">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" name="txtname" value="<?php echo $_SESSION['admin_user']; ?>" readonly placeholder="Name">
          <input class="btmspace-15" type="text" name="txtmsg" placeholder="Message">
          <button type="submit" name="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="bcaedu.in">bcaedu.in</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>