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

    <div class="container">
      <div class="clearfix"></div>
          <center><h1 class="margin-x-l margin-top-xl">Discography</h1></center>

<br>
<br>



<div class="clearfix"></div>
<div id="albumsWrapper" class="margin-x-l">
  
    <div class="clearfix">
      <hr />
        <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s">
          <img src="//i1.jpopasia.com/albums/4/59885_9bi.jpg" width="300px" height="300px">
        </div>
      
         <h2>Play</h2>
          <div class="size-xs color-concrete margin-bottom-s">
            Album &nbsp;&middot;&nbsp; 10 tracks &nbsp;&middot;&nbsp; 2017-11-06 <br>
              1. One More Chance<br>
              2. Black Suit <br>
              3. Scene Stealer <br>
              4. Good Day for a Good Day <br>
              5. Runaway <br>
              6. The Lucky Ones <br>
              7. Girlfriend (예뻐 보여) <br>
              8. Spin Up! <br>
              9. Too late (시간 차) <br>
              10. I do (두 번째 고백)  <br>
    </div>

  
    <div class="clearfix"></div>
      <hr />
        <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s">
          <img src="//i1.jpopasia.com/albums/3/47882-andltahrefhttpwwwjpo-5e35.jpg" width="300px" height="300px">
        </div>
      
          <h2>Magic</h2>
          <div class="size-xs color-concrete margin-bottom-s">
             Album &nbsp;&middot;&nbsp; 14 tracks &nbsp;&middot;&nbsp; 2015-09-16<br>
              1. Magic <br>
              2. Devil<br>
              3. Simply Beautiful<br>
              4. You Got It(  놈, 놈, 놈)<br>
              5. Dorothy(도로시)<br>
              6. Love♥(Sarang♥) <br>
              7. Stars Appear...(별이 뜬다)<br>
              8. Good Love<br>
              9. We Can(SuJu-K.R.Y)<br>
              10. Don't Wake Me Up(SuJu-D and E)<br>
              11. Love At First Sight(첫눈에 반했습니다)Suju-T<br>
              12. Forever With You(每天)SuJu-M<br>
              13. Rock'n Shine<br>
              14. Alright<br>
    </div>

    <div class="clearfix"></div>
      <hr />
          <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s">
            <img src="//i1.jpopasia.com/albums/3/40051-andltahrefhttpwwwjpo-temw.jpg" width="300px" height="300px">
      </div>
      
          <h2>This is Love</h2>
          <div class="size-xs color-concrete margin-bottom-s">
            Album &nbsp;&middot;&nbsp; 13 tracks &nbsp;&middot;&nbsp; 2014-10-23<br>                
              1. Mamacita(아야야)<br>
              2. Midnight Blues(춤을 춘다) <br>
              3. Evanesce(백일몽)<br>
              4. Raining Spell For Love(사랑이 멎지 않게)<br>
              5. Shirt <br>
              6. This is Love <br>
              7. Let's Dance <br>
              8. Too Many Beautiful Girls <br>
              9. Mid-Season(환절기) <br>
              10. Islands <br>
    </div>

    <div class="clearfix"></div>
      <hr />
          <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s">
          <img src="//i1.jpopasia.com/albums/3/21567-andltahrefhttpwwwjpo-4rsm.jpg" width="300px" height="300px"/>
      </div>
      
          <h2>Sexy, Free and Single</h2>
          <div class="size-xs color-concrete margin-bottom-s">
            Album &nbsp;&middot;&nbsp; 10 tracks &nbsp;&middot;&nbsp; 2012-07-06<br>
              1. Sexy, Free and Single <br>
              2. From U (너로부터)<br>
              3. Now <br>
              4. Rockstar <br>
              5. Gulliver (걸리버)<br>
              6. Someday (언젠가는) <br>
              7. Bittersweet (달콤씁쓸) <br>
              8. Butterfly (빠삐용) <br>
              9. Daydream (머문다) <br>
              10. A ‘Good’bye (헤어지는 날) <br>
      </div>

    <div class="clearfix"></div>
      <hr />
          <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s">
          <img src="//i1.jpopasia.com/albums/2/11258-mrsimple-7wus.jpg" width="300px" height="300px"/>
      </div>
      
          <h2 >Mr. Simple</h2>
          <div class="size-xs color-concrete margin-bottom-s">
            Album &nbsp;&middot;&nbsp; 12 tracks &nbsp;&middot;&nbsp; 2011-08-03 <br>              
             1. Mr. Simple <br>
             2. Opera (오페라) <br>
             3. Be My Girl (라라라라) <br>
             4. Walkin' <br>
             5. Storm (폭풍) <br>
             6. Good Friends (어느새 우린) <br>
             7. Feels Good (결투) <br>
             8. Memories (기억을 따라) <br>
             9. Sunflower (해바라기)  <br>
             10. White Christmas (엉뚱한 상상)  <br>
             11. Y <br>
             12. My Love, My Kiss, My Heart <br>
    </div>

    <div class="clearfix"></div>
      <hr />
          <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s">
          <img src="//i1.jpopasia.com/albums/1/206-bonamana-xl86.jpg" width="300px" height="300px"/>
      </div>
      
      <h2>Bonamana</h2>
      <div class="size-xs color-concrete margin-bottom-s">
        Album &nbsp;&middot;&nbsp; 11 tracks &nbsp;&middot;&nbsp; 2010-05-13 <br>              
            1. BONAMANA <br>
            2. Boom Boom <br>
            3. Coagulation <br>
            4. Your Eyes <br>
            5. My Only Girl <br>
            6. Shake It Up! <br> 
            7. My All Is In You<br>
            8. In My Dream<br>
            9. One Fine Spring Day <br>
            10. Good Person<br>
            11. Here We Go  <br>
      </div>

      <div class="clearfix"></div>
      <hr />
          <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s">
          <img src="//i1.jpopasia.com/albums/1/203-sorrysorry-7m6y.jpg" width="300px" height="300px" />
      </div>
      
      <h2 >Sorry, Sorry</h2>
      <div class="size-xs color-concrete margin-bottom-s">
        Album &nbsp;&middot;&nbsp; 12 tracks &nbsp;&middot;&nbsp; 2009-03-12<br>
             1. SORRY, SORRY <br>
             2. Niga Joheun Iyu (Why I Like You) (니가 좋은 이유) <br>
             3. Majuchiji Malja (Let's Not...) (마주치지 말자) <br>
             4. Angela (앤젤라) <br>
             5. RESET<br>
             6. MONSTER <br>
             7. WHAT IF8. Ibyeol... Neon Swipni (Heartquake) (feat. Dong Bang Shin Ki U-Know and Micky) (이별… 넌 쉽니)<br>
             9. CLUB No.1 <br>
             10. HAPPY TOGETHER  <br>
             11. Jugeoissneun Geot (Dead at Heart) (죽어있는 것) <br>
             12. SHINING STAR <br>
      </div>

      <div class="clearfix"></div>
        <hr />
          <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s" >
          <img src="//i1.jpopasia.com/albums/1/10969-dontdon-2u9v.jpg" width="300px" height="300px"/>
      </div>
      
        <h2 >Don't Don</h2>
        <div class="size-xs color-concrete margin-bottom-s">
          Album &nbsp;&middot;&nbsp; 14 tracks &nbsp;&middot;&nbsp; 2007-09-20 <br>
              1. 돈 돈! (Don't Don) <br>
              2. 소원이 있나요 (Sapphire Blue) <br>
              3. You're my endless love (말하자면) <br>
              4. 미워 (Hate U, Love U) <br>
              5. Disco Drive <br>
              6. Marry U <br>
              7. I am  <br>
              8. 사랑이 떠나다 (She's gone) <br>
              9. Missin' U <br>
              10. 거울 (Mirror) <br>
              11. 우리들의 사랑 (Our Love) <br>
              12. Midnight Fantasy <br>
              13. Thank you  <br>
              14. (Bonus Track) 아주 먼 옛날 (Song for you)   <br>
      </div>
             
      <div class="clearfix"></div>
        <hr />
          <div class="imageWrapper col-xs-5 col-sm-6 pull-right margin-top-s" >
          <img src="//i1.jpopasia.com/albums/1/198-superjunior05-ka4h.jpg" width="300px" height="300px" />
      </div>
      
        <h2>Super Junior 05</h2>
        <div class="size-xs color-concrete margin-bottom-s">
          Album &nbsp;&middot;&nbsp; 10 tracks &nbsp;&middot;&nbsp; 2005-11-29 <br>                 
            1. Miracle <br>
            2.  TWINS (Knock Out) <br>
            3. You Are the One <br>
            4. Rock This House <br>
            5. Way for Love<br>
            6. So I <br>
            7. OVER <br>
            8. Keep In Touch <br>
            9. L.O.V.E.<br>
            10. Believe <br>
    </div>


  </body>
</html>