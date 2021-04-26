<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Registration</title>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login_register_style.css" />
		<script src="js/login_register_style.css.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
<?php
include 'classes/Register.php';
$rg = new Register();
if(($_SERVER['REQUEST_METHOD']=='POST')){
   $msg = $rg->administrativeregister($_POST); 
}

?>
    <body style="background:url('img/bg.jpg') repeat;">
        <div class="container">	
			<header>
			  <div class="title">
				<h1><strong>Registration Form</strong> </h1>
				<p><i>Register form for administration</i></p>
			  </div>
			</header>
			<section style="margin-top: 30px;">
			<?php
               if(isset($msg)) { ?>
				<div style="text-align: center;background:#4CAF50;padding: 10px; width: 400px;margin-left: 480px;border-radius: 7px;color:#fff;">
					
                      <?php 	echo '<h4><i>'.$msg.'</i><h4>'; ?>
				</div>
				<?php } ?>
			</section>
			<section class="main">
				<form class="form-1" action="#" method="POST">
					<p class="field">
						<input type="text" name="firstName" placeholder="First Name" required="1">
						<i class="fw-icon-user icon-large"></i>
					</p>
					<p class="field">
						<input type="text" name="lastName" placeholder="Last Name" required="1">
						<i class="fw-icon-user icon-large"></i>
					</p>
					<p class="field">
						<input type="text" name="userName" placeholder="Username" required="1">
						<i class="fa fa-users icon-large"></i>
					</p>
					<p class="field">
						<input type="text" name="email" placeholder="Email" required="1">
						<i class="fa fa-envelope icon-large"></i>
					</p>
					<p class="field">
						<input type="password" name="password" placeholder="Password" required="1">
						<i class="fw-icon-lock icon-large"></i>
					</p>
					<p class="submit" style="margin-top: 70px;">
						<button type="submit" name="submit"><i class="fw-icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</section>
			
			<section class="form-1">
				<a href="index.php"><button>Back to Page <i class="fw-icon-arrow-right icon-large"></i></button></a>
			</section>
			
        </div>
    </body>
</html>