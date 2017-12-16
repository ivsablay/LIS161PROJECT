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
    <link rel="stylesheet" type="text/css" href="css/project.css">

  
 

    
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
              <a class="nav-link js-scroll-trigger" href="login.php">Log out</a>
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
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Members</h2>
            <hr class="light my-4">
          </div>
          <div class="col-lg-12 mx-auto">
            <div class="container">
                <center><img src="img/leeteuk.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Park Jung Soo <br>
                    Stage Name: Leeteuk<br>
                    Birthday: July 1, 1983<br>
                    Position: Leader, Vocalist and Rapper<br>
                    Height: 179 cm<br>
                    Weight: 59 kg<br>
                    Blood Type: A<br>
                    Status: Active<br>
                    He was born in Seoul, South Korea<br>
                    He is Super Junior's sub-unit's Super Junior-T and Super Junior-Happy<br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/heechul.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Kim Hee Chul <br>
                    Stage Name: Heechul <br>
                    Birthday: July 10, 1983 <br>
                    Position: Vocalist, Rapper <br>
                    Height: 179 cm<br>
                    Weight: 60 kg <br>
                    Blood Type: AB<br>
                    Status: Active <br>
                    He was born in Hoengseong, Gangwon, South Korea <br>
                    He is in Super Junior's sub-unit Super Junior-T <br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/hangeng.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Han Geng<br>
                    Korean Stage Name: Hankyung <br>
                    Chinese Stage Name: Hangeng <br>
                    Birthday: February 9, 1984 <br>
                    Position: Vocalist  and Lead Dancer <br>
                    Height: 181 cm <br>
                    Weight: 66 kg <br>
                    Blood Type: B <br>
                    Status: Former <br>
                    He was born in Mudanjiang, Heilongjiang, China <br>
                    He is in Super Junior's sub-unit Super Junior-M <br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/yesung.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Kim Jong Woon <br>
                    Stage Name: Yesung<br>
                    Birthday: August 14, 1984 <br>
                    Position: Main Vocalist <br>
                    Height: 178 cm <br>
                    Weight: 64 kg <br>
                    Blood Type: AB <br>
                    Status: Active <br>
                    He was born in Cheonan, South Chungcheong, South Korea <br>
                    He is in Super Junior's sub-unit's Super Junior-K.R.Y and Super Junior-Happy <br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/kangin.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Kim Young Woon <br>
                    Stage Name: Kangin<br>
                    Birthday: January 17, 1985 <br>
                    Position: Vocalist <br>
                    Height: 178 cm <br>
                    Weight: 70 kg <br>
                    Blood Type: O <br>
                    Status: Inactive<br>
                    He was born in Seoul, South Korea <br>
                    He is in Super Junior's sub-unit's Super Junior-T and Super Junior-Happy<br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/shindong.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Shin Dong Hee <br>
                    Stage Name: Shindong<br>
                    Birthday: September 28, 1985 <br>
                    Position: Lead Rapper and Lead Dancer<br>
                    Height: 178 cm <br>
                    Weight: 90 kg<br>
                    Blood Type: O<br>
                    Status: Active <br>
                    He was born in Mungyeong, North Gyeongsang, South Korea <br>
                    He is in Super Junior's sub-unit's Super Junior-T and Super Junior-Happy <br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/sungmin.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Lee Sungmin <br>
                    Stage Name: Sungmin<br>
                    Birthday: January 1, 1986 <br>
                    Position: Lead Vocalist, Lead Dancer <br>
                    Height: 175 cm <br>
                    Weight: 57 kg<br>
                    Blood Type: A <br>
                    Status: Inactive <br>
                    He was born in Ilsan, Goyang, Gyeonggi, South Korea<br>
                    He is in Super Junior's sub-unit's Super Junior-T, Super Junior-Happy, and Super Junior-M <br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/eunhyuk.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Lee Hyukjae <br>
                    Stage Name: Eunhyuk<br>
                    Birthday: April 4, 1986
                    Position: Main Rapper, Vocalist and Main Dancer
                    Height: 176 cm
                    Weight: 58 kg
                    Blood Type: O
                    Status: Active
                    He was born in Neunggok, Goyang, Gyeonggi, South Korea                    
                    He is in Super Junior's sub-unit's Super Junior-T, Super Junior-Happy, and Super Junior-M, and Donghae and Eunhyuk
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/siwon.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Choi Siwon <br>
                    Stage Name: Siwon<br>
                    Birthday: February 10, 1987 <br>
                    Position: Vocalist, Face of The Group <br>
                    Height: 185 cm <br>
                    Weight: 65 kg <br>
                    Blood Type: B <br>
                    Status: Active <br>
                    He was born in Seoul, South Korea <br>
                    He is in Super Junior's sub unit Super Junior-M <br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/donghae.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Lee Donghae <br>
                    Stage Name: Donghae<br>
                    Birthday: October 15, 1986 <br>
                    Position: Lead Vocalist, Lead Dancer <br>
                    Height: 176 cm <br>
                    Weight: 60 kg <br>
                    Blood Type: A <br>
                    Status: Active <br>
                    He was born in Mokpo, Jeollanam, South Korea 
                    He is in Super Junior's sub-unit's Super Junior-M and Donghae and  Eunhyuk<br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/ryeowook.png" height="250" width="200"></center>
                <p> <center>Birth Name: Kim Ryeowook <br>
                    Stage Name: Ryeowook<br>
                    Birthday: June 21, 1987 <br>
                    Position: Main Vocalist <br>
                    Height: 175 cm <br>
                    Weight: 58 kg <br>
                    Blood Type: O <br>
                    Status: Active <br>
                    He was born in Incheon, South Korea <br>
                    He is in Super Junior's sub-unit's Super Junior-K.R.Y and Super Junior-M <br>
                </p></center>
            </div>
            <div class="container">
                <center><img src="img/kyuhyun.jpg" height="250" width="200"></center>
                <p> <center>Birth Name: Cho Kyuhyun <br>
                    Stage Name: Kyuhyun<br>
                    Birthday: February 3, 1988 <br>
                    Position: Lead Vocalist, Sub-Dancer, Maknae  <br>
                    Height: 180 cm <br>
                    Weight: 68 kg <br>
                    Blood Type: A <br>
                    Status: Active <br>
                    He was born in Seoul, South Korea <br>
                    He is in Super Junior's sub-unit's Super Junior-K.R.Y and Super Junior-M <br>
                </p></center>
            </div>
             
             
             
             
             

          </div>
        </div>
      </div>
    </section>


 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>



  </body>
</html>