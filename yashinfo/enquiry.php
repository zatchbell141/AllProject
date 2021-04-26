<?php
include 'Conn.php';

function protect($string)
{
    $string=mysql_real_escape_string(trim(strip_tags(addslashes($string))));
    return $string;
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
     <li class="active"><a href="#">Enquiry</a>
        <ul>
          <li><a href="enquiry.php">Add Enquiry</a></li>
          <li><a href="updateadmin.php">Follow Up</a></li>
          <li><a href="#">Enquiry Reports</a></li>
        </ul>
      </li>
      <li><a href="#">Student Data</a>
        <ul>
          <li><a href="addstudents.php">Add Records</a></li>
          <li><a href="insertmanully.php">Insert Manually</a></li>
         <li><a href="studenetdatareport.php">Student Data Reports</a></li>
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
         <div class="col-75">
        <div class="container">
        <article>
      
   <form id="addform" action="addenquiry.php" method="post">
         <table>
                                    <tr>
             
                                        <td>Name:<input type="text"  name="txtename" placeholder="Name" required></td>
                                        <td>Address:<input type="text"  name="txtehrs" placeholder="Address" required></td>
                                        <td>Percentage:<input type="text"  name="txtesubject" placeholder="Percentage" required></td>
                                    </tr>
                                    <tr>
                                        <td>Stream:<input type="text" name="txtstream" placeholder="Stream" required></td>
                                        <td>College:<input type="text" name="txtcolg" placeholder="College" required></td>
                                        <td>Phone Number:<input type="text"  name="txtphone" placeholder="Phone Number" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Reference:<input type="text" name="txtref" placeholder="Reference" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><button class="button button4" id="submit">Add</button></td>
                                    </form>
                                    <tr>
                                        <td colspan="4"><div id="msg">
                                    </td>
                                    </tr>
                                </table>
        
      </section>
       </article>
      </div>
    </div>
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
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script>
  $("#submit").click(function() {
  $.post($("#addform").attr("action"),
    $("#addform :input").serializeArray(), function(info){
      $("#msg").html(info);
    });
  clearinput();
});

$("#addform").submit( function(){
  return false;
});

function clearinput(){
  $("#addform :input").each( function() {
    $(this).val('');
  });
}
</script>
</body>
</html>