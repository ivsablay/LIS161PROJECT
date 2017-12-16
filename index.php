<?php include  "server.php"; 

  //secure homepage
  if (!isset($_SESSION['username'])) {
    $_SESSION['warning'] = "You need to log-in to access this page";
    //redirect user
    header("location: login php");// if you have multiple pages that is accessible to only users, you have to put this on all pages
  }



?>


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
      <div class="container fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Super Junior</a>
          <a class="navbar-brand" href="#page-top">News</a>
          <a class="navbar-brand" href="members.php">Members</a>
          <a class="navbar-brand" href="album.php">Album</a>
          <a class="navbar-brand" href="membership.php">Be an ELF</a>
        </div>   
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="server.php?logout=1">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



<header class="masthead text-center text-white d-flex">
   <div class="container my-auto">
      <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Super Junior</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">The Last Man Standing</p>
          </div>
        </div>
      </div>
    </header>

<section class="bg-primary" id="about">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Search Results</h2>
            <hr class="light my-4">
          </div>
          <div class="col-lg-12 mx-auto">
            <div class="form">
             <center><form action="index.php" method="POST">
                <input type="text" name="valueToSearch"></input>
                <button type="submit" name="search">Submit</button>
              </form></center>


    <table class="table table-hover table-bordered">
      <thead>
        <tr>
         <th scope="col" class="tabletitle">#</th>
          <th scope="col" class="tabletitle">Name</th>
          <th scope="col" class="tabletitle">Gender</th>
          <th scope="col" class="tabletitle">Email</th>    
          <th scope="col" class="tabletitle">Date of Birth</th>
          <th scope="col" class="tabletitle">Country</th>
         </tr> 
      </thead>
      <tbody>
<?php

$conn = mysqli_connect("localhost","root","","subscriber");

if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    $show = "SELECT * FROM members WHERE last_name = '$valueToSearch'";
  $result = mysqli_query($conn,$show);

while ($rows=mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>"; echo $rows['id']; echo "</td>";
    echo "<td>"; echo $rows['first_name']. ' ' .$rows['last_name']; echo "</td>";
    echo "<td>"; echo $rows['gender']; echo "</td>";
    echo "<td>"; echo $rows['email']; echo "</td>";
    echo "<td>"; echo $rows['date_of_birth']; echo "</td>";
    echo "<td>"; echo $rows['country']; echo "</td>";

    echo "<br>"; 
  }

  }


?>
</table>


          </div>
        </div>
      </div>
    </section>



 
      


</body>
</html>