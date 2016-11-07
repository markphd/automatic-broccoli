<!DOCTYPE html>
<html lang="en">

<head>

<title>Clubexec - Life. Style. Rewards.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Fitness, Free Gyms, Free Leisure in Dubai, Dubai Discount and Loyalty Card for Health, Fitness, Restaurants, Hotels, Beauty and Leisure. " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--Custom-Theme-files-->
<link href="../css/style.css" rel='stylesheet' type='text/css' />	
<!--/script-->
<script src="../js/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script src="../js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Exo+2:400,300,600' rel='stylesheet' type='text/css'>
<!--light-box-files -->
<script type="text/javascript" >
$(function() {
	$('.gallery a').Chocolat();
});
</script>
<!-- //gallery -->

    <!-- Bootstrap Core CSS -->
  <link href="css/color_schemes/clean.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">

  <!-- Template CSS -->
  <!-- AKA Secondary CSS -->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Your Custom CSS Goes Here!-->
  <link href="css/style.css" rel="stylesheet">

  <!-- Custom Fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
				<span class="menu"></span>
				<div class="top-menu">
				<ul class="cl-effect-16">
					<li><a href="../index.php"><img src="../images/Logo_Grey_with_Slogan.png" alt="Club Exec. Life. Style. Rewards." style="width:175px; height:auto; text-align:left;"></a></li>
					</ul>
				</div>

  
</div>

<!-- Top Menu Items -->
<div class="nav navbar-right top-nav">

      <p> <li class='dropdown'><a href='../deal.php?id=5978' >Sign In</a> </li>

    <!-- <li class='dropdown'><a href='join.php' >Sign Up</a></p></li> -->
    <li class='dropdown'><a href='signup.php' >Sign Up</a></p></li>
  
  <li class="dropdown">
    <a href="signup.php#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>&nbsp;Account    <b class="caret"></b></a>
    <ul class="dropdown-menu">
      
      <!-- <li>
      <a href='login.php'><i class='fa fa-fw fa-wrench'></i> Login</a>
    </li>
    <li>
    <a href='register.php'><i class='fa fa-fw fa-desktop'></i> Register</a>
  </li> -->
  <li>
    <a href='forgot_password.php'><i class='glyphicon glyphicon-wrench'></i>&nbsp;Forgot Password</a>
  </li>
    </ul>
</li>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
</div>

</nav>
  	<div id="home" class="header">
	    <div class="container">
			<!--start-header-->
		    <div class="header-top">
			<div class="inner-top">
			  </div>
	<!--End-top-nav-script-->
			</div>

<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
<form action="http://www.clubexec.net/web/users/join.php" method="POST" id="payment-form">
  <input type="hidden" value="2f1d231fe293d8b100d383552ae917ee" name="csrf">
<!-- Left Column -->
    
		<div class="col-md-12" style="background-color:#ffffff; padding: 0 0 2em 0;">
        <h3 class="tittle">Member Registration</h3>
        </div>
			<div class="contact-form">
                   <h3><span style="color:#E5222B; font-weight:400;">Step 1:</span> Your Membership Details</h3>
		<section style="border:none;">
		<div class="col-md-6 contact-grid" style="margin-bottom:2em;"> 
        <input type="text" id="membershipno" name="membershipno" placeholder="Club Exec Membership Number" >
		</div>
      <div class="col-md-6 contact-grid">
        <input type="text" id="email" name="email" placeholder="Email">
       <div class="clearfix"></div>
     
      <br>
      	 </div>
     </section>
     <div class="clearfix"></div>
     			<div class="send" style="float:right;">
							<input type="submit" value="Next" name="Next" >
						</div>
     </div>
</form>



<!-- footers -->
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<style>
p {
  font-color:white;
}
</style>
<div class="container">
  <div class="col-md-12">
      <!--<br><strong><p align="center" style="color:white">&copy; </p></strong> -->
      


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    // e.src='//www.google-analytics.com/analytics.js';
    // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    // ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>



  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

<!-- Place any per-page javascript here -->

<script>
  function validateJoin(){
		jQuery('#payment-errors').html("");
		jQuery('.has-error').removeClass("has-error");
    var data = jQuery('form[id="payment-form"]').serialize();
    jQuery.ajax({
      url : 'parsers/join_form_validate.php',
      type : 'POST',
      data : data,
      success : function(data){
        if(data == 'success'){
          jQuery('#payment-errors').html("");
          jQuery('#payment-form').submit();
        }else{
          jQuery('#payment-errors').html(data);
        }
      },
      error : function(){alert("Something has gone wrong with the Join Form")},
    });
  }

  jQuery(function($) {
  $('#payment-form').submit(function(event) {
    var $form = $(this);
    // Disable the submit button to prevent repeated clicks
    $form.find('button').prop('disabled', true);
  });
});



</script>

  </body>
</html>
