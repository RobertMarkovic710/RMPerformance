<html>
<head>
	<title>RMPerformance d.o.o.</title>
	<link rel="stylesheet" type="text/css" href="signup_style.css">
</head>

<body>

<div id="header">
        <div class="topnav">
            <a class="active" href="index.php">R.M. Performance</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contact</a>

        <!--<div class="login-container">
            <form action="files/database_connect.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <button type="submit">Login</button>
            <a class="signUp" href="#contact">Sign Up?</a>
            </form>
        -->
            
    </div>
</div>
</div>

<div id="form">
    <h2>NEW ACCOUNT: </h2>
        <form id="contact-form" action="files/sign_up_form.php" method="POST">

            <input type="text" name="name" placeholder="Your name:"><br>
            <input type="text" name="lastname" placeholder="Your lastname:"><br>
            <input type="text" name="email" placeholder="Your e-mail:"><br>
            <input type="text" name="uid" placeholder="Your username:"><br>
            <input type="text" name="pwd" placeholder="Your password:"><br>

            <input type="submit" name="submit" value="Create account"><br>

        </form>
</div>
        
<div id="footer">
            <p>Copyright (c) 2019</p>
</div> <!--end footer -->

<?php 
    if (isset($_POST['submit'])) {
        include_once 'database_connect.php';

    }
?>

</body>
</html>