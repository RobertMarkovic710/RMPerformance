<!DOCTYPE html>
<html>
<head>
	<title>RMPerformance d.o.o.</title>
	<link rel="stylesheet" type="text/css" href="index_style.css">
</head>

<body>

<div id="header">
        <div class="topnav">
            <a class="active" href="index.php">R.M. Performance</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contact</a>

        <div class="login-container">
            <form action="" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <button type="submit">Login</button>
            <a class="signUp" href="signup.php">Sign Up?</a>
            </form>
            
    </div>
</div>
</div>

<div id ="slider">
	<figure>
		<img src="images/1.jpg">
		<img src="images/2.jpg">
		<img src="images/3.jpg">
		<img src="images/4.jpg">
		<img src="images/5.jpg">
	</figure>
</div>
        
<div id="menu">
    <button class="button" name="button">SET APPOINTMENT</button>
    
</div> <!-- end menu -->

<div id="form">
    <h2>FILL THE FORM: </h2>
        <form id="contact-form" action="" method="post">
            <input type="text" name="name" placeholder="Your name:"><br>
            <input type="text" name="lastname" placeholder="Your lastname:"><br>
            <input type="text" name="email" placeholder="Your e-mail:"><br>
            <input type="submit" name="submit" value="Make appointment"><br>
        </form>
</div>
        
<div id="footer">
            <p>Copyright (c) 2019</p>
</div> <!--end footer -->

<?php 
    
?>

</body>
</html>