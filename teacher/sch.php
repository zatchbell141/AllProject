<!DOCTYPE html>
<!--
Template Name: Gravity
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->

<html>
<head>
<title>Yash&nbsp;Infotech</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="layout/styles/textbox.css" type="text/css">
<link rel="stylesheet" href="layout/styles/scorllbar.css" type="text/css">
<link rel="stylesheet" type="text/css" href="layout/styles/demo.css" />
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index1.php">Yash&nbsp;Infotech</a></h1>
    </div>
    <div class="fl_right">
      <ul class="inline">
       
         <li><i class="fa fa-envelope-o"></i>admin@bcaedu.in</li>
      </ul>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="index1.php">Home</a></li>
      <!--<li><a class="drop" href="#">Pages</a>
        <ul>
          <li><a href="pages/gallery.html">Gallery</a></li>
          <li><a href="pages/full-width.html">Full Width</a></li>
          <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
          <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
          <li><a href="pages/basic-grid.html">Basic Grid</a></li>
        </ul>
      </li>-->
     <li><a href="#">Uploads</a>
            <ul>
              <li><a  href="#">Pratical Papers</a>
               
              </li>
              <li><a  href="#">Assignments</a>
               
               
              </li>
               <li><a  href="notesem1.php">Notes</a>
               
                
              </li>
        </ul>
      </li>
      <li class="active"><a href="sch.php">Schedules</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
    <!-- ################################################################################################ --> 
  </nav>
</div>    <!-- ################################################################################################ --> 
  </nav>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="slider" class="clear"> 
    <!-- ################################################################################################
    <div class="flexslider basicslider">
      <ul class="slides">
        <li><a href="#"><img class="radius-10" src="images/demo/slides/01.png" alt=""></a></li>
        <li><a href="#"><img class="radius-10" src="images/demo/slides/02.png" alt=""></a></li>
        <li><a href="#"><img class="radius-10" src="images/demo/slides/03.png" alt=""></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body --> 
    <!-- ################################################################################################ 
  <div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body --> 
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Schedules</h1>
     
      <h1>Schedules Completed</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Schedules Date</th>
              <th>Subject</th>
              <th>Time</th>
              <th>Username</th>
              <th>Year</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
             <?php
                                    include 'Conn.php';
                                    $sql="select * from sch where active='1' ORDER BY staffid DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['staffid'];?></td>
                                            <td><?php echo $row['staffname'];?></td>
                                            <td><?php echo $row['schdate'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['schtym'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><a href="deletefiles.php?varname=<?php echo $row['id'];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>    
          </tbody>
        </table>
      </div>
        
    <!-- ################################################################################################ 
    <h2 class="sectiontitle">Today's Schedule</h2>
    <!-- ################################################################################################ 
   <ul class="nospace group">
      <li class="one_half first">
        <article>
          <h6 class="heading"><b><a href="#">FYBCA</a></h6>
          <p>Date:</p>
          <p>Time:</p>
          <p>Subject:</p></b>
          <h6 class="heading"><b><a href="#">TYBCA</a></h6>
          <p>Date:</p>
          <p>Time:</p>
          <p>Subject:</p></p></b>
        </article>
      </li>
      <li class="one_half">
        <article>
          <h6 class="heading"><b><a href="#">SYBCA</a></h6>
           <p>Date:</p>
          <p>Time:</p>
          <p>Subject:</p></b>

        </article>
      </li>

    </ul>

    <!-- ################################################################################################ 
    <br>
       <br>
          <br>
    <h2 class="sectiontitle">Yash Infotech Team</h2>
    <!-- ################################################################################################ 
    <div class="flexslider carousel basiccarousel btmspace-80">
      <ul class="slides">
        <li>
          <figure><img class="radius-10 btmspace-10" src="images/demo/320x185.png" alt="">
            <figcaption><a href="#">Lorem Ipsum Dolor Sit Amet</a></figcaption>
          </figure>
        </li>
        <li>
          <figure><img class="radius-10 btmspace-10" src="images/demo/320x185.png" alt="">
            <figcaption><a href="#">Lorem Ipsum Dolor Sit Amet</a></figcaption>
          </figure>
        </li>
        <li>
          <figure><img class="radius-10 btmspace-10" src="images/demo/320x185.png" alt="">
            <figcaption><a href="#">Lorem Ipsum Dolor Sit Amet</a></figcaption>
          </figure>
        </li>
        
      </ul>
    </div>

    <!-- ################################################################################################ --> 
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Company Details</h6>
      <address class="btmspace-15">
     Yash&nbsp;Infotech<br>
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span>+91 8898450818</li>
        <li><span class="fa fa-envelope-o"></span> admin@bcaedu.in</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Quick Links</h6>
      <ul class="nospace linklist">
        <li><a href="#">Home Page</a></li>
        <li><a href="#">Note Upload</a></li>
        <li><a href="#">Schedules</a></li>
  
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
    <!--<div class="one_quarter">
      <h6 class="title">From The Blog</h6>
      <article>
        <h2 class="nospace"><a href="#">Lorem ipsum dolor</a></h2>
        <time class="smallfont" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.</p>
      </article>
    </div>-->
    <div class="one_quarter">
      <h6 class="title">Any Kind of Issue Let Us Known</h6>
      <form class="btmspace-30" method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
      <!--<ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a class="faicon-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
      </ul>-->
    </div>
    <!-- ################################################################################################ --> 
  </footer>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">bcaedu.in</a></p>
   <!-- <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>-->
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/jquery.flexslider-min.js"></script>
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