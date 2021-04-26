<?php
include 'Conn.php';

function protect($string)
{
    $string=addslashes($string);
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
     <li class="active"><a href="index2.php">Home</a></li>
     <li><a href="#">Enquiry</a>
        <ul>
          <li><a href="enquiry.php">Add Enquiry</a></li>
           <li><a href="followup.php">Follow Up</a></li>
          <li><a href="enquiryreports.php">Enquiry Reports</a></li>
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
          <li><a href="addusers.php">Add Users</a></li>
          <li><a href="updateusers.php">Update Users</a></li>
          <li><a href="usersreport.php">Users Account Reports</a></li>
        </ul>
      </li>
     <li><a href="#">Subject</a>
        <ul>
          <li><a href="addsubject.php">Add Subject</a></li>
          <li><a href="updatesubject.php">Update Subject</a></li>
        <li><a href="subjectreport.php">Subject Reports</a></li>
        </ul>
      </li>
      <li><a href="#">Receipt</a>
        <ul>
          <li><a href="colg.php">College Receipt</a></li>
          <li><a href="#">Update Receipt</a></li>
          <li><a href="backlog.php">Backlog Receipt</a></li>
          <li><a href="#">Backlog Update</a></li>
          <li><a href="others.php">Others Add</a></li>
          <li><a href="updateothers.php">Others Update</a></li>
          
          <li><a href="installments.php">Installments Others</a></li>
          <li><a href="installmentsupdates.php">Installments Others Update</a></li>
          
        </ul>
      </li>

       <li><a href="#">Staff</a>
        <ul>
          <li><a href="addstaff.php">Add Staff</a></li>
          <li><a href="schedules.php">Schedules</a></li>
          <li><a href="attendence.php">Attendence</a></li>
          <li><a href="staffreports.php">Staff Reports</a></li>
          <li><a href="searchdetails.php">Search Staff Details</a></li>
          
        </ul>
      </li> 
        
         <li><a href="#">Reports</a>
        <ul>
          <li><a href="#">Today Collection</a></li>
          <li><a href="#">College Reports</a></li>
          <li><a href="#">Backlog Reports</a></li>
           <li><a href="staffreports.php">Staff Reports</a></li>
          <li><a href="#">Convocation Reports</a></li>
          <li><a href="subjectreport.php">Subject Reports</a></li>
          <li><a href="usersreport.php">Users Account Reports</a></li>
          <li><a href="studenetdatareport.php">Student Data Reports</a></li>
           <li><a href="#">Admin Account Reports</a></li>
            <li><a href="#">Enquiry Reports</a></li>
             <li><a href="#">Message Reports</a></li>
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
        <table>

            <tr>
              <th>Receipt Type</td>
                 <th>Staff Id</td>
                <th>Name</td>
                <th>Tropic</td>
                <th>Subject</td>
                <th>Class</td>
                <th>Start Time</td>
                <th>End Time</td>
                <th>Duration</td>
                <th>Date</td>
                <th>Salary</td>
                <th>Edit</td>
                <th>Delete</td>
            </tr>
            <tr>
              <?php
                                  if(isset($_POST['submit']))
                                    {
                                    include 'Conn.php';
                                    $name=$_POST['txtname'];
                                    $sql="select * from salary where name like '%$name%' and active='1' ORDER BY sessiondate DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['staffid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['topic'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['class'];?></td>
                                            <td><?php echo $row['starttime'];?></td>
                                            <td><?php echo $row['endtime'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td>
                                            <?php $date= $row['sessiondate'];
                                                    $date=strtotime($date);
                                                    $date=date('d/m/Y',$date); 
                                                    echo $date;
                                                   ?></td>
                                            <td><?php echo $row['sal'];?></td>
                                             <td><a href="updatesaldetails.php?varname=<?php echo $row['id'];?>">Edit</a></td>
                                            <td><a href="delattend.php?varname=<?php echo $row['id'];?>">Delete</a></td>
                                            
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                                  else
                                  {
                                      $sql="select * from salary where active='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['staffid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['topic'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['class'];?></td>
                                            <td><?php echo $row['starttime'];?></td>
                                            <td><?php echo $row['endtime'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td>
                                            <?php $date= $row['sessiondate'];
                                                    $date=strtotime($date);
                                                    $date=date('d/m/Y',$date); 
                                                    echo $date;
                                                   ?></td>
                                            <td><?php echo $row['sal'];?></td>
                                             <td><a href="update.php?varname=<?php echo $row['id'];?>">Edit</a></td>
                                            <td><a href="delattend.php?varname=<?php echo $row['id'];?>">Delete</a></td>
                                            
                                            </tr>
                                            <?php

                                  }
                                }
                              }
                            ?>  

            </tr>
          </table>
        </article>
     
      </section>
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
</body>
</html>