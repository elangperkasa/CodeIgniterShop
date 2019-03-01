
<?php include 'head.php';?>

<center>
<div class="container ">
  <form method="post" action="http://localhost/ci/index.php/ceklogin">
 <div class="jumbotron">
   <div class="container">
     <label for="uname"><b>Username</b></label>
     <input type="text" placeholder="Enter Username" name="uname" required><br>

     <label for="psw"><b>Password</b></label>
     <input type="password" placeholder="Enter Password" name="psw" required><br><br>

     <button type="submit">Login</button>
     <label>
       <input type="checkbox" checked="checked" name="remember"> Remember me
     </label>
    <br><br> <span class="psw"><a href="#">Forgot password</a>&nbsp;|&nbsp;<a href="#">Register</a></span>
   </div>


</div>

 </form>
</div><br><br>
</center>

<?php include 'foot.php';?>
