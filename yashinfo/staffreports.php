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
      <h1><a href="index2.php">Yash&nbsp;Infotech</span></a></h1>
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
      <li><a href="#">Student Data</a>
        <ul>
          <li><a href="#">Add Records</a></li>
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

       <li class="active"><a href="#">Staff</a>
        <ul>
          <li><a href="addstaff.php">Add Staff</a></li>
          <li><a href="schedules.php">Schedules</a></li>
          <li><a href="attendence.php">Attendence</a></li>
          <li><a href="staffreports.php">Staff Salary Reports</a></li>
          
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
        <h1>Summary Salary</h1>
        <div class="col-75">
        <div class="container">
        <article>
            <table>
            <form action="exporttotal.php" method="post">
              <td>Export Form:<input type="date" name="txtsumform"  required> To:<input type="date" name="txtsumto"  required><input type = "submit" class="button button3"  value ="Export to Excel" name="export"></td>
              </form>
          </table>
          <table>
            <tr>
              <th>Name</th>
              <th>Hours</th>
              <th>Remuneration</th>
              <th>Total Remuneration</th>
            </tr>
            <tr>
               <?php
                                    include 'Conn.php';
                                    $sql="select * from staff";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                      while($row=$result->fetch_assoc())
                                        {
                                          include 'Conn.php';
                                        
                                  $ssql="select SUM(hrs) As Hours,SUM(sal) As Salary from salary where name='".$row['name']."'";
                                  $sresult=$con->query($ssql);
                                  $srow=$sresult->fetch_assoc();
                                  
                                  $tssql="select * from sal ";
                                  $tsresult=$con->query($tssql);
                                  $tsrow=$tsresult->fetch_assoc();
                                  
                                  

                                         ?>
                                         <tr>
                                         <td><?php echo $row['name'];?></td>
                                         <td><?php echo $srow['Hours'];?></td>
                                         <td><?php echo $tsrow['sal'];?></td>
                                         <td><?php echo $srow['Salary'];?></td>
                                       
                                       </tr>
                                        <?php
                                        
                                        }
                                    }
                                  $ttssql="select SUM(hrs) As Hours,SUM(sal) As Salary from salary";
                                  $ttsresult=$con->query($ttssql);
                                  $ttsrow=$ttsresult->fetch_assoc();
                           ?>

            </tr>
         
            <tr>

              <td>Total</td>
              <td><?php echo $ttsrow['Hours'];?></td>
              <td></td>
              <td><?php echo $ttsrow['Salary'];?></td>
            </tr>

          </table>

                                         
        </article>
      </div>
      <br>
    <br>
    <br>
    </div>
  
        <h1>Hours Based Salary</h1>
        <div class="col-75">
        <div class="container">
        <article>
          <form action="staffreports.php" method="post">
          <table>
            <tr>
              <td>Form: <input type="date" name="txtform"  required></td>
              <td>To:<input type="date" name="txtto"  required></td>
            </tr>
            <tr>
              <td colspan="2"><input type = "submit" class="button button3"  value ="submit" name="salshs"></td>
              </form>
            </tr>
          </table>
          
          <table>
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Salary</th>
              <th>Hours</th>
              <th>Date</th>
               <th>Subject</th>
            </tr>
            <tr>
              <?php
              if(isset($_POST['salshs']))
              {
                                    include 'Conn.php';
                                    $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('d/m/Y',$form);
                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('d/m/Y',$to);
                                    $sql="SELECT s.id,s.name,sa.sal,sa.hrs,sa.sessiondate,sa.subject FROM staff s INNER JOIN salary sa on 
                                    s.id=sa.staffid WHERE sa.sessiondate BETWEEN '$form' AND '$to'";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sal'];?></td>
                                            <td><?php echo $row['hrs'];?></td>
                                            <td><?php echo $row['sessiondate'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                          
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>

          <table>
            <tr>

              <th colspan="4"><hr>Grand Total:<hr></th>
              
            </tr>
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Total Salary</th>
              <th>Total Hours</th>
            </tr>
            <tr>
              <?php
                if(isset($_POST['salshs']))
              {
               $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('d/m/Y',$form);
                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('d/m/Y',$to);
                                    include 'Conn.php';
                                    $sql="SELECT s.id,s.name,SUM(sa.sal) As Salary,SUM(hrs) AS Hours FROM staff s INNER JOIN salary sa 
                                    on s.id=sa.staffid  WHERE sa.sessiondate  BETWEEN '$form' AND '$to' GROUP by s.id,s.name ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['Salary'];?></td>
                                            <td><?php echo $row['Hours'];?></td>
                                            
                                          
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>
          <table>
            <tr>
              <form action="exportstaff.php" method="post">
              <td>Export Form:<input type="text" name="formtxt" value="<?php echo $form?>" readonly> To:<input type="text" name="totxt" value="<?php echo $to?>" readonly><input type = "submit" class="button button3"  value ="Export to Excel" name="export"></td>
              </form>
            </tr>
          </table>
        </article>
      </div>
    </div>
    <br>
    <br>

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