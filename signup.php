<?php 
    //include_once 'files/database_connect.php';
 ?>


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
    </div>
</div>
</div>

<div id="form">
    <h2>NEW ACCOUNT: </h2>
        <form id="contact-form" action="files/sign_up_form.php" method="POST">

            <input type="text" name="firstname" placeholder="Your name:"><br>
            <input type="text" name="lastname" placeholder="Your lastname:"><br>
            <input type="text" name="email" placeholder="Your e-mail:"><br>
            <input type="text" name="username" placeholder="Your username:"><br>
            <input type="text" name="password" placeholder="Your password:"><br>

            <input type="submit" name="submit" value="Create account"><br>

        </form>
</div>
        
<div id="footer">
            <p>Copyright (c) 2019</p>
</div> <!--end footer -->


</body>
</html>