<?php include  "server.php"; ?>

<!DOCTYPE html>
<html lang="en">

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
            <form method ="post" action ="login.php">
                <!-- alert message -->
                <?php if (isset($_SESSION['message'])) { ?>
                <div class ="error">
                  <?php
                      echo $_SESSION['message'];
                       unset ($_SESSION['message']);
                  ?>
               </div>
                <?php } ?>
                <?php include  "errors.php";?>

                <div class="input-group">
                  <label>Username</label>
                  <input type="text" name="username" >
                </div><br>
                <div class="input-group">
                   <label>Password</label>
                    <input type="password" name="password">
                </div><br>
                <div class="input-group">
                  <center></center><button type="submit" class="btn btn-primary btn-xl js-scroll-trigger" name="login_user">Login</button>
                 </div>
                <p>
                  Not yet a member? <a href="register.php">Sign up</a>
                </p>
            </form>
          </div>
      </div>
    </header>

      <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">About Super Junior</h2>
            <hr class="light my-4">
          </div>
          <div class="col-lg-12 mx-auto">
            <p class="text-faded mb-4"><h6> Super Junior (Korean: 슈퍼주니어; Syupeo Junieo), also known as simply SJ or SUJU, is a South Korean boy band. Formed in 2005 by producer Lee Soo-man of S.M. Entertainment, the group comprised a total of thirteen members at its peak. Super Junior originally debuted with twelve members, consisting of leader Leeteuk, Heechul, Hangeng, Yesung, Kangin, Shindong, Sungmin, Eunhyuk, Siwon, Donghae, Ryeowook and Kibum. Kyuhyun joined the group in 2006. Super Junior launched into international recognition following the release of their best-selling single "Sorry, Sorry" in 2009, the title song of their most critically successful album, Sorry, Sorry.Over the years, they have been divided into smaller groups, simultaneously targeting different music industries and audiences. Individually, the members have also branched out into hosting, presenting and acting and their successes and popularity as all-rounded entertainers have led other Korean entertainment managements to begin training their music groups in other aspects of the entertainment industry.Super Junior is the best-selling K-pop artist for four years in a row. Super Junior have earned thirteen music awards from the Mnet Asian Music Awards, sixteen from the Golden Disc Awards, and are the second singing group to win Favorite Artist Korea at the 2008 MTV Asia Awards after jtL in 2003.[5] In 2012, they were nominated for "Best Asian Act" in MTV Europe Music Awards.[6] In 2015, they won the "International Artist" and "Best Fandom" in the Teen Choice Awards. Their fandom name is ELF, which stands for Ever Lasting Friends.</p></h6></p>
          </div>
        </div>
      </div>
    </section>

     <section id="media">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Social Media</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href = "https://www.facebook.com/superjunior" target="blank">
                <i class="fa fa-4x  fa-facebook-square" aria-hidden="true"></i>
              <h3 class="mb-3">Facebook</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href = "https://www.instagram.com/superjunior.labelsj/?hl=en" target="blank">
                <i class="fa fa-4x fa-instagram" aria-hidden="true"></i>
              <h3 class="mb-3">Instagram</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href= "https://www.youtube.com/channel/UCFipx49muiJ8-d2YsnLlNVw" target="blank">
                <i class="fa fa-4x fa-youtube" aria-hidden="true"></i>
              <h3 class="mb-3">Youtube</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href= "https://www.weibo.com/superjunior" target="blank">
                <i class="fa fa-4x fa-weibo" aria-hidden="true"></i>
              <h3 class="mb-3">Weibo</h3>
              </a>
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
