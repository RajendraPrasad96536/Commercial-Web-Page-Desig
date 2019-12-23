<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Registration Form
  </title>
  <link rel="stylesheet" type="text/css" href="CSS/registration.css">
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
    </header>
 <h1 class="Header" style="font-size:4vw" ><span>Registration Form</span></h1>
 <div class = "register">
 <form action="registration.php" method="post">
     <label>First Name </label><br>
     <input type="text" name="fname" id="name" placeholder="First Name"><br>
     <label>Last Name </label><br>
     <input type="text" name="lname" id="name" placeholder="Last Name"><br>
     <label>Gender </label><br>
     <div class="radio" >
        <input type="radio" name="g" value="Male" style="margin-right:0"/>Male
        <input type="radio" name="g" value="Female" style="margin-right:0"/>Female
        <input type="radio" name="g" value="Other" style="margin-right:0"/>Other<br>
     </div>
     <label >DOB </label><br>
     <input type="date" id="name" name="dob"><br>
     <label>Address </label><br>
     <div class="form-group">
          <input type="number" 
            class="form-control"  
            id="name" size="30"
            placeholder="Flat No." name = "flatNo"><br>
          <input type="text" 
           class="form-control" 
           id="name" size="30" name = "street"
           placeholder="Street"><br>

           <input type="text" 
               class="form-control" 
               id="name" size="30"
               placeholder="City" name = "city"><br>

          <input type="number" 
             class="form-control" 
             id="name" size="30"
             placeholder="Pin No." name="pin">
          </div>
     <label>Location </label><br>
     <div class="styled-select">
     <select name="Location">
            <option value="" disabled selected>Choose Location</option>
            <option value="Shivneri Fort">Shivneri Fort</option>
            <option value="Aga Khan Palace">Aga Khan Palace</option>
            <option value="Dagdusheth Halwai Ganpati Temple">Dagdusheth Halwai Ganpati Temple</option>
            <option value="Shinde Chhatri">Shinde Chhatri</option>
            <option value="Sinhagad">Sinhagad</option>
            <option value="Parvati Hill">Parvati Hill</option>
            <option value="National Defence Academy">National Defence Academy</option>
            <option value="Bund Garden">Bund Garden</option>
            <option value="National War Museum">National War Museum</option>
            <option value="Shaniwar Wada Palace">Shaniwar Wada Palace</option>
            <option value="Osho Ashram">Osho Ashram</option>
            <option value="Chaturshringi Temple">Chaturshringi Temple</option>
            <option value="Pataleshwar Cave Temple">Pataleshwar Cave Temple</option>
            <option value="Saras Baug">Saras Baug</option>
            <option value="Rajiv Gandhi Zoological Park">Rajiv Gandhi Zoological Park</option>
        </select>
        <br>
      </div>
     <label>Contact </label><br>
     <input type="text" name="contact" id="name" maxlength="25" size="30" title="contact" placeholder="Contact" required/><br>
     <label>E-mail </label><br>
     <input type="email" name="email" id="name" maxlength="25" size="30" title="email" placeholder="E-mail" required/><br>
     <label>Password </label><br>
     <input type="password" name="password_1" id="name" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required/><br>
     <label>ReEnter Password </label><br>
     <input type="password" name="password_2" id="name" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required/><br><br>
    <div class = "login">
      <input type="Submit" name ="reg" value="Submit" maxlength="25" size="30"/>
    </div>

    <div id="message">
      <h3>Password must contain the following:</h3>
      <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
      <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
      <p id="number" class="invalid">A <b>number</b></p>
      <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>
   </form>
 </div>
</body>
</html>