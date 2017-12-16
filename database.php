<?php

	session_start();


	//Initialize variables
	$first_name = "";
	$last_name = "";
	$gender = "";
	$email = "";
	$date_of_birth ="";
	$country  = ""; 
	$id =  0;
	$edit_state = false;






	// Connect to database
	// Declare a variable that will be your connectiom
	$con = mysqli_connect("localhost", "root", "", "subscriber");
	//this function has four aguments (localhost, username for the database, password, name of your database)
	

	if (!$con) {
		echo "Connection to  database unsuccessful!";
	}
		

	//Create record
	// check first if he/she clicked the submit button
	if (isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$date_of_birth  = $_POST ['date_of_birth'];
		$country = $_POST['country'];
		


		$query = "INSERT INTO members (first_name, last_name, gender, email, date_of_birth, country)  VALUES  ('$first_name', '$last_name', '$gender', '$email', '$date_of_birth', '$country')";

		// echo $query;

		mysqli_query($con,$query);
		//has two arguments (database connection, query)
		$_SESSION ['message'] = "Memberhip record  saved";
		header ("location: membership.php");

	}

	//read records
	$member = mysqli_query ($con, "SELECT * FROM members");

	//update record
	if (isset($_POST['update'])) {
		$id  =  $_POST['id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$date_of_birth  = $_POST ['date_of_birth'];
		$country = $_POST['country'];
		

		//prepare the query
		$query =  "UPDATE members SET
		first_name='$first_name', 
		last_name= '$last_name', 
		gender= '$gender', 
		email= '$email', 
		date_of_birth = '$date_of_birth',
		country = '$country'
		WHERE id = $id";

		//perform query
		mysqli_query($con,$query);
		// //set status message
		$_SESSION['message'] = "Membership record updated";
		// //redirect to homepage
		header ("location: membership.php");

	}

	//delete record
	if (isset($_GET['del'])) {
		$id =  $_GET['del'];

		//prepare a query
		$query  =  "DELETE FROM members WHERE id = '{$id}'";
		//perform query
		mysqli_query($con,$query);
		//set status message
		$_SESSION['message'] = "Membership record deleted";
		//redirect to homepage
		header ("location: membership.php");
	}


?>