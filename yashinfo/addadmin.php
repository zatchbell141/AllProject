<?php
include 'Conn.php';
include 'session.php';
$key=md5('india');
$salt=md5('india');
function encrypt($string,$key)
{
    $string=rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
    return $string;
}
function decrypt($string,$key)
{
    $string=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB));
    return $string;
}
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
      <li class="active"><a href="#">Admin</a>
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
     <li><a href="#">Receipt</a>
        <ul>
          <li><a href="#">College Receipt</a></li>
          <li><a href="#">Update Receipt</a></li>
          <li><a href="#">Backlog Receipt</a></li>
          <li><a href="#">Update Receipt</a></li>
          <li><a href="#">Others Add</a></li>
          <li><a href="#">Others Update</a></li>
          <li><a href="#">Others Receipt</a></li>
          <li><a href="#">Others Update Receipt</a></li>
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
        <h1>Add Admin</h1>
         <div class="col-75">
        <div class="container">
        <article>
           <form id="addform" action="add.php" method="post">
               <table>
                                <tbody>
                                    <tr>
                   
                    <td colspan="2">Name:<input type="text"  name="txtname" placeholder="Name" required></td>
                    <td colspan="2">Lastname:<input type="text" name="txtlastname" placeholder="Lastname" required></td>
                  </tr>
                    <tr colspan="2">
                    <td>Username:<input type="text" name="txtusername" placeholder="Username" required></td>
                    <td colspan="2">Password:<input type="password"  name="txtpasswd" placeholder="Password" required></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                        Email: <input type="text" name="txtemail" placeholder="Lastname" required>
                    </td>
                   <td colspan="3">Contact:<input type="text"  name="txtcontact" placeholder="Contact" required></td>        
                    </tr>
                    <tr>
                      <td colspan="5"><button class="button button4" id="submit">Add</button></td>
                    </form>
                    </tr>
                    <tr>
                      <td colspan="5"><div id="msg"></div></td>
                    </tr>
                   </tbody>
                </table>
            
        </article>
      </div>
    </div>

      </section>
      <div class="col-75">
        <div class="container">
        <article>
          <table>
            <tr>
              <th>Id</td>
                <th>Name</td>
                <th>Lastname</td>
                <th>Username</td>
                <th>Password</td>
                <th>Email</td>
                <th>Contact</td>
                <th>Delete</td>
            </tr>
            <tr>
              <?php
                                    include 'Conn.php';
                                    $sql="select * from admin";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td><?php echo decrypt($row['passwd'],$key);?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            <td><a href="deladmin.php?varname=<?php echo $row['id'];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
            </tr>
          </table>
        </article>
      </div>
    </div>
      </section>
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