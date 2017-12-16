<?php

	session_start();
	//initialize variables
	$username = "";
	$email = "";
	$password_1 = "";
	$password_2 = "";
	$password =  "";
	$errors  = array();





	//connect to database
	$con = mysqli_connect("localhost", "root", "", "subscriber");
	//check if there are errors in connection
	if (!$con) {
		echo "Database connection error!";
	}

	//If register button is  clicked
	if (isset($_POST['reg_user'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);


		//check if  all fields have values
		if (empty($username)) {
			array_push($errors, "Username should not be blank");
		}
		if (empty($email)) {
			array_push($errors, "Email should not be blank");
		}
		if (empty($password_1)) {
			array_push($errors, "Password should not be blank");
		}
		if ($password_2 != $password_1) {
			array_push($errors, "Please retype password");
		}

		//if there are no errors in the input field
		if (count($errors)==0){
			$password = md5($password_1); //encrypt password
			//prepare query statement
			$query = "INSERT INTO subs(username, email, password)
			VALUES ('$username', '$email', '$password')";
			//perform  query
			mysqli_query($con, $query);
			//set session variables
			$_SESSION['username'] =$username;
			$_SESSION['success'] = "You have sucessfully registered";
			//redirect the user
			header("location: index.php");

		}
		
	}

	//if login button is clicked
	if (isset($_POST['login_user'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		// perform basic  input verification
		if (empty($username)) {
			array_push($errors, "Username should not be blank");
		}
		if (empty($password)) {
			array_push($errors, "Password should not be blank");
		}
		// if there are no  errors in the input  field
		if (count($errors)==0){
			$password = md5($password); //encrpyt password
			//prepare query statement
			$query = "SELECT * FROM subs WHERE username= '$username' 
			AND password= '$password' ";
			//perform query
			$result= mysqli_query($con, $query);
			//check if there is  a record returned by slsect statement
			if (mysqli_num_rows($result)==1) {
				//set session variables
				$_SESSION['username'] =$username;
				$_SESSION['success'] = "You have sucessfully registered";
				//redirect the user
				header("location: index.php");
			} else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	
	}
		//if logout is clicked
		if (isset($_GET['logout'])){
			session_destroy(); //destroy session
			unset($_SESSION['username']); //unset  session variable
			//redirect the user
			header("location: login.php");
		}


?>