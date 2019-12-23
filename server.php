
<?php
session_start();
// initializing variables
$username = "";
$email = "";
$g = "";
$dob = " ";
$flatNo = " ";
$street = " ";
$city = " ";
$pin = " ";
$Location = " ";
$contact = " ";
$email = " ";
$password_1 = " ";
$password_2 = " ";
$errors = array();
// connect to db
$db = mysqli_connect('localhost','root','','project') or die("could not connect to db");

//register users
//ini_set('memory_limit', '128M');
if(isset($_POST['reg'])){
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$g = mysqli_real_escape_string($db, $_POST['g']);
		$dob = mysqli_real_escape_string($db, $_POST['dob']);
		$flatNo = mysqli_real_escape_string($db, $_POST['flatNo']);
		$street = mysqli_real_escape_string($db, $_POST['street']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$pin = mysqli_real_escape_string($db, $_POST['pin']);
		$Location = mysqli_real_escape_string($db, $_POST['Location']);
		$contact = mysqli_real_escape_string($db, $_POST['contact']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	//form validation
		if(empty($fname)){array_push($errors, "First Name is required");}
		if(empty($email)){array_push($errors, "Email is required ");} 
		if(empty($password_1)){array_push($errors, "Password is required");}
		if($password_1 != $password_2){array_push($errors, "password doesn't match");}

	//check query
		$user_check_query = "SELECT * FROM registration WHERE fname = '$fname' or email = '$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$registration = mysqli_fetch_assoc($result);

		if($registration){
			if($registration['fname']==$fname){array_push($errors, "username alredy exists");}
			if($registration['email']==$email){array_push($errors, "This email is already registered e-mail");}
		}
		//registe the user if no error

		if(count($errors) == 0){
			$password = $password_1;
			$query = "INSERT INTO registration (fname, lname, g, dob, flatNo, street, city, pin, Location, contact, email, password_1, password_2) values ('$fname', '$lname', '$g', '$dob', '$flatNo', '$street', '$city', '$pin', '$Location', '$contact', '$email', '$password_1', '$password_2')";
			mysqli_query($db, $query);
			$_SESSION['fname'] = $fname;
			$_SESSION['success'] = "You are loged in";
			header('location: index.php');
		}
}


//login user
if(isset($_POST['login_user'])){
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	if(empty($fname)){
		array_push($errors, "username is required");
	}
	if(empty($password)){
		array_push($errors, "password is required");
	}

	if(count($errors) == 0){
		$password = $password;
		$query = "SELECT * FROM registration WHERE fname ='$fname' AND password_2 = '$password'";
		$results = mysqli_query($db, $query);
		if(mysqli_num_rows($results)){
			$_SESSION['fname'] = $fname;
			$_SESSION['success'] = "Logged in succesfully!";
			header('location: index.php');
		}else{
			array_push($errors, "wrong combination of password and id please try again !");
			echo "wrong combination of password and id please try again !";
		}
	}
}

//forget password
if(isset($_POST['login_pas'])){
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);

	if(empty($fname)){
		array_push($errors, "username is required");
	}
	if(empty($email)){
		array_push($errors, "email is required");
	}
	
	if(count($errors) == 0){
		$check = "SELECT email FROM registration WHERE email = '$email' "; 
		$results = mysqli_query($db, $check);
		$test = mysqli_num_rows($results);
		if($test >= 0){
			$pass = query("SELECT password_1 FROM registration WHERE fname = '$fname'");
			echo "$pass";
		}else{
			array_push($errors, "record doesn't exists!");
		}
	}
}

?>