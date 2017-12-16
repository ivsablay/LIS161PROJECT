<?php include  "server.php"; ?>


<!DOCTYPE html>

<html>
<head>
	
	<title>Super Junior</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

</head>
<body>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Super Junior</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#media">Social Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<header class="masthead text-center text-white d-flex">
   <div class="container my-auto">
	<div class="row">
	 <div class="col-lg-4 mx-auto">

		<form method ="post"  action = "index.php">
		<?php include  "errors.php";?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div><br>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"  value="<?php echo $email;?>">
		</div><br>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" >
		</div><br>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div><br>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

</body>
</html>