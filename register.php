<?php 

include 'conn-reg.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Signup</title>

<link rel ="stylesheet " href ="style.css"> 

</head>
<body>

<div class="card">
<h1><center> Register</center></h1>
<form action="conn-reg.php" method="post">
    <?php
if ( isset ($message)) {
        foreach ($message as $message)
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
        </div>
        ';
    }
?>
    <!--first name-->
    
<div class="label">
    <!--last name-->
<input type="text" id="name" name="name" placeholder="Enter your name" required>
<br>
<br>
    <!--email-->
<input type="email" id="email" name="email" placeholder="Enter your email "required>
<br>
<br>
    <!--password-->

<input type="password" id="password" name="password" placeholder="Enter you new password"required>
<br>
<br>
    <!--confirm password-->

<input type="password" id="confirm password" name="cpassword"placeholder="Confirm your new password " required>
<br>
<br>
    <!--submit button-->
<button type="submit" name="sub">Create Account</button>

</div>
  If you already have an account <A HREF = "LOGIN.PHP">LogIn</A>

</form>

</div>

</body>
</html>












