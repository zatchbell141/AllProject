<?php
include "session.php";
include 'Conn.php';
$msg="";
$output = '';
if(isset($_POST["import"]))
{
   $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {

    $output .= "<tr>";
    $coursecode = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $coursename = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $lastname = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $firstname = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $fathername = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $mothername = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $dob = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $dob=strtotime($dob);
    $dob=date('d/m/Y',$dob);
    $gender = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $statusm = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $localaddress = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $permaddress = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
    $caste = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(11, $row)->getValue());
    $state = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
    $pincode = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
    $mob = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(14, $row)->getValue());
    $email = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
    $prn = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
    $trn = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(17, $row)->getValue());
    $qualification = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
    $medium = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
    $admissionstatus = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(20 ,$row)->getValue());
    $aadhar = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(21 ,$row)->getValue());
    $mode="program learning";
    $fullname=$lastname." ".$firstname." ".$fathername;
   $query = "INSERT INTO studentdt(fullname,coursecode,coursename,lastname,firstname,fathername,mothername,dob,gender,statusm,localaddress,permaddress,
    caste,state,pincode,mob,email,prn,trn,qualification,medium,admissionstatus,aadhar)
    VALUES ('$fullname','$coursecode','$coursename','$lastname','$firstname','$fathername','$mothername','$dob','$gender','$statusm','$localaddress',
      '$permaddress','$caste','$state','$pincode','$mob','$email','$prn','$trn','$qualification','$medium','$admissionstatus','$aadhar')";
   mysqli_query($con, $query);
    $output .= '<td>'.$coursecode.'</td>';
    $output .= '<td>'.$coursename.'</td>';
    $output .= '<td>'.$lastname.'</td>';
    $output .= '<td>'.$firstname.'</td>';
    $output .= '<td>'.$mothername.'</td>';

    $output .= '<td>'.$dob.'</td>';
    $output .= '<td>'.$gender.'</td>';
    $output .= '<td>'.$statusm.'</td>';
    $output .= '<td>'.$localaddress.'</td>';
    $output .= '<td>'.$permaddress.'</td>';

    $output .= '<td>'.$caste.'</td>';
    $output .= '<td>'.$state.'</td>';
    $output .= '<td>'.$statusm.'</td>';
    $output .= '<td>'.$pincode.'</td>';
    $output .= '<td>'.$mob.'</td>';

    $output .= '<td>'.$email.'</td>';
    $output .= '<td>'.$prn.'</td>';
    $output .= '<td>'.$trn.'</td>';
    $output .= '<td>'.$qualification.'</td>';
    $output .= '<td>'.$medium.'</td>';
    $output .= '<td>'.$aadhar.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';
 }
else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }

?>
<!DOCTYPE html>
<!--
Template Name: Workit
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Yash&nbsp;Infotech</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css">
<link rel="stylesheet" href="layout/styles/textbox.css" type="text/css">
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery-innerfade.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
       width: 1002px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
  margin-top: 17px;
  height: 1000px;
  }
  .ex3 {
    background-color: white;
     width: 972px;

    height: 400px;
    overflow: auto;
}
  </style>
   <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  
  </style>
</head>

<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index2.php">Yash&nbsp;Infotech</a></h1>
      <h2>Admin<br>
      Bcaedu.in</h2>
    </div>
    <!--<form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" placeholder="Search Our Website&hellip;">
        <input type="submit" id="sf_submit" value="submit">
      </fieldset>
    </form>-->
  </header>
</div>
<div class="wrapper row2">
  <nav id="topnav">
    <ul class="clear">
     <li><a href="index2.php">Home</a></li>
      <li  class="active"><a href="#">Student Data</a>
        <ul>
          <li><a href="addstudents.php">Add Records</a></li>
          <li><a href="#">Insert Manually</a></li>
          <li><a href="#">Student Data Reports</a></li>
        </ul>
      </li>     
      <li><a href="#">Admin</a>
        <ul>
          <li><a href="addadmin.php">Add Admin</a></li>
          <li><a href="updateadmin.php">Update Admin</a></li>
          <li><a href="#">Admin Account Reports</a></li>
        </ul>
      </li>
       <li><a href="#">Users</a>
        <ul>
          <li><a href="#">Add Users</a></li>
          <li><a href="#">Update Users</a></li>
          <li><a href="#">Users Account Reports</a></li>
        </ul>
      </li>
     <li><a href="#">Subject</a>
        <ul>
          <li><a href="addsubject.php">Add Subject</a></li>
          <li><a href="updatesubject.php">Update Subject</a></li>
        <li><a href="subjectreport.php">Subject Reports</a></li>
        </ul>
      </li>
      <li><a href="#">Bills</a>
        <ul>
          <li><a href="#">College Receipt</a></li>
          <li><a href="#">Update Receipt</a></li>
          <li><a href="#">Backlog Receipt</a></li>
          <li><a href="#">Update Receipt</a></li>
        </ul>
      </li>

       <li><a href="#">Staff</a>
        <ul>
          <li><a href="addstaff.php">Add Staff</a></li>
          <li><a href="schedules.php">Schedules</a></li>
          <li><a href="attendence.php">Attendence</a></li>
          <li><a href="staffreports.php">Staff Reports</a></li>
          
        </ul>
      </li> 
         <li><a href="#">Reports</a>
        <ul>
          <li><a href="#">College Reports</a></li>
          <li><a href="#">Backlog Reports</a></li>
          <li><a href="#">Staff Reports</a></li>
          <li><a href="#">Convocation Reports</a></li>
        </ul>
      </li>  
      <li><a href="logout.php">Logout</a></li>
    </ul>
   
  </nav>
</div>
<!-- content -->
<div class="wrapper row3">
  <div id="container" class="clear"> 
    <!-- content body --> 
    <!-- ########################################################################################## --> 
    <!-- ########################################################################################## -->
    <div id="homepage"> 
      <!-- ########################################################################################## --> 
      <!-- Shout 
      <section id="shout">
        <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat in fringilla massa &bdquo;</p>
      </section>
      <!-- / Shout --> 
      <!-- ########################################################################################## --> 
      <!-- Latest 
      <section id="latest">-->
       <article>
        <h1>Import Data In Student Database</h1>
        <div class="col-75">
        <div class="container">
        <article>
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />
   <div class="ex3">
   <?php
   echo $output;
   ?>
 </div>
  </div>
        </article>
      </div>
    </div>
      </section>
      <!-- / Latest --> 
      <!-- ########################################################################################## --> 
      <!-- Services -->
     <!-- <section id="services" class="clear">
        <article class="one_quarter">
          <h2><a href="#">Vivamuslibero Auguer</a></h2>
          <img src="images/demo/48x48.gif" alt="">
          <p>Inteligula congue id elis donec sce sagittis intes id laoreet aenean leo sem massawisi condisse leo sem ac. Tincidunt nibh quis dui fauctor et.</p>
        </article>
        <article class="one_quarter">
          <h2><a href="#">Vivamuslibero Auguer</a></h2>
          <img src="images/demo/48x48.gif" alt="">
          <p>Inteligula congue id elis donec sce sagittis intes id laoreet aenean leo sem massawisi condisse leo sem ac. Tincidunt nibh quis dui fauctor et.</p>
        </article>
        <article class="one_quarter">
          <h2><a href="#">Vivamuslibero Auguer</a></h2>
          <img src="images/demo/48x48.gif" alt="">
          <p>Inteligula congue id elis donec sce sagittis intes id laoreet aenean leo sem massawisi condisse leo sem ac. Tincidunt nibh quis dui fauctor et.</p>
        </article>
        <article class="one_quarter">
          <h2><a href="#">Vivamuslibero Auguer</a></h2>
          <img src="images/demo/48x48.gif" alt="">
          <p>Inteligula congue id elis donec sce sagittis intes id laoreet aenean leo sem massawisi condisse leo sem ac. Tincidunt nibh quis dui fauctor et.</p>
        </article>
      </section>-->
      <!-- / Services --> 
      <!-- ########################################################################################## --> 
      <!-- Info -->
      <!--<section id="info" class="clear">
        <article class="two_quarter">
          <h2>Lorem ipsum dolor sit amet consectetur</h2>
          <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>.</p>
          <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href="http://www.os-templates.com/">free website templates</a>.</p>
          <p class="more"><a href="#">Read More &raquo;</a></p>
        </article>
        <article class="two_quarter">
          <h2>Lorem ipsum dolor sit amet consectetur</h2>
          <img class="imgl" src="images/demo/150x150.gif" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque. Quisque non luctus sem. Nullam non magna vel nisi posuere bibendum vitae sed dui. Nulla at lorem tortor, non rhoncus odio. Nunc sit amet interdum orci.</p>
          <p class="more"><a href="#">Read More &raquo;</a></p>
        </article>
      </section>-->
      <!-- / Info --> 
      <!-- ########################################################################################## --> 
    </div>
    <!-- ########################################################################################## --> 
    <!-- ########################################################################################## --> 
    <!-- / content body --> 
  </div>
</div>
<!-- Footer -->
<div class="wrapper row4">
  <div id="footer" class="clear"> 
    <!-- Section One --> 
    <section class="one_quarter first">
      <!--<h2 class="title">Contact Details</h2>
      <address>
     Yash&nbsp;Infotech<br>
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <p>Tel: xxxxx xxxxxxxxxx<br>
        Fax: xxxxx xxxxxxxxxx<br>
        Email: <a href="#">yashinfotech2013@gmail.com</a></p>
    </section>-->
    <!-- Section Two 
    <section class="one_quarter">
      <h2 class="title">Quick Links</h2>
      <nav>
        <ul>
          <li class="first"><a href="#">Lorem ipsum dolor sit</a></li>
          <li><a href="#">Amet consectetur</a></li>
          <li><a href="#">Praesent vel sem id</a></li>
          <li><a href="#">Curabitur hendrerit est</a></li>
          <li><a href="#">Aliquam eget erat nec sapien</a></li>
        </ul>
      </nav>
    </section>-->
    <!-- Section Three 
    <section class="one_quarter">
      <h2 class="title">From The Blog</h2>
      <article>
        <header>
          <h2>Blog Post Title</h2>
          <time datetime="2000-04-06">Friday, 6<sup>th</sup> April 2000</time>
        </header>
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.</p>
        <p><a href="#">Read More &raquo;</a></p>
      </article>
    </section>
    <!-- Section Four 
    <section class="one_quarter">
      <h2 class="title">Grab Our Newsletter</h2>
      <form method="post" action="#">
        <fieldset>
          <legend>Contact Form:</legend>
          <label for="nl_name">Name:</label>
          <input type="text" name="nl_name" id="nl_name" value="" placeholder="Name">
          <label for="nl_email">Email:</label>
          <input type="text" name="nl_email" id="nl_email" value="" placeholder="Email Address">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </section>
    <!-- / Section 
  </div>
</div>
<!-- Copyright 
<div class="wrapper row5">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </footer>-->
</div>
</div>
</div>
</body>
</html>