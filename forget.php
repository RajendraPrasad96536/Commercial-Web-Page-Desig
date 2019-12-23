<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="CSS/forget.css">
</head>
<body>
    <header>
        <nav>
            <div class = "row">
                <img src="IMAGES/Roadeo_A75_01.png" class="logo">
                <ul class ="main-nav" >
                    <li><a href="home.php">Home</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="login.php">Sign In</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
                
            </div>
        </nav>

    <div class="forgetpassword">
        <form action="login.php" method="post">
            <p>Enter Username</p>
            <input type="password" name="fname" placeholder="first name" required>
            <p>Enter E-mail ID</p>
            <input type="password" name="email" placeholder="abc@gmail.com" required>
            <input type="submit" name='login_pas' value="Submit">
        </form>
    </div>
</header>
</body>
</html>