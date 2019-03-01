<?php
if($this->session->userdata('ceklogin')){
     $login="ok";
}else{
  //  redirect('http://localhost/ci/index.php/login');
    $login="";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Traval Co</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .bg-cover {
background-size:100% 100%;
  color: white;
  position: relative;
  z-index: -2;
   background-image: url('../images/head.png')
}


  </style>
</head>
<body>

<div class="jumbotron bg-cover">
  <div class="container text-center">
    <h1>Traval</h1>
    <p>Your Adventures Platform</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img src="../images/traval.png" alt="WIN" style="width:25px;height:25px;"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url(); ?>index.php/">Home</a></li>
        <li ><a href="<?php echo base_url(); ?>index.php/">Trip</a></li>
        <li ><a href="<?php echo base_url(); ?>index.php/">Journal</a></li>
        <li ><a href="<?php echo base_url(); ?>index.php/">Video</a></li>
        <li ><a href="<?php echo base_url(); ?>index.php/">Special Events</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/contactus">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if ($login=="ok") { ?>
        <li><a href="<?php echo base_url(); ?>index.php/logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>

      <?php }else{   ?>
          <li><a href="<?php echo base_url(); ?>index.php/user"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <?php }    ?>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
