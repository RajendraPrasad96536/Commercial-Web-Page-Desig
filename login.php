<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="CSS/login.css">
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

    <div class="loginbox">
    <img src="IMAGES/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="login.php" method="post">
            <p>Username</p>
            <input type="text" name="fname" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name='login_user' value="Login">
            <p>Don't have account ? <a href="registration.php"><b>Register</b></a></p>
            <p>Forget Password ? <a href="forget.php"><b>Click Here</b></a></p>
        </form>
    </div>
</header>
</body>
</html>