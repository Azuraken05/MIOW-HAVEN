<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MIOW</title>
  <!--fonts-->
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Mochiy Pop One' rel='stylesheet'>

  <!--style sheet-->
  <link href="/css/Template.css" rel="stylesheet" type="text/css"> <!--TEMPLATE LAY-OUT-->
  <link href="/css/Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->
  
  <!--Module CSS-->
  <link href="CSS\Module.css" rel="stylesheet" type="text/css" /> <!--Module CSS-->
</head>

<body>

  <div class="Main">

    <!--START NAVIGATION-->
    <header>
        <div class="svg-container">
          <div class="topnav-text">MIOW</div>
          <div class="top-logo"><img src="Assets/toplogo.png" class="topnav-logo"></div>
          <nav class="navigation">
            <img class="Profile" src="Assets\Shhh.jpg">
            <p>@GwapoKo123</p>
            <div class="BEGINNER"> STUDENT </div>
            <a href="/homepage">HOMEPAGE</a>
            <a href="/homelesson">DRAWING LESSONS</a>
            <a href="/artgallery">ART GALLERY</a>
          </nav>
          <button class="hamburger">
            <div class="bar"></div>
          </button>
        </div>
      </header>
    <!--END NAVIGATION-->

    <!--TITLE-->
    <div class="svg-Tcontainer">
      <div class="title"><p>DRAWING LESSONS</p></div>
    </div>
    <!--END TITLE-->

    <!--START MODULE-->
    <div class="svg-Fcontainer">
    <div class="top-module"><a>MODULE LESSON</a></div>
      <div class="carousel">
        <button id="prevBtn" class="carousel-button prev">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
            <path d="M15 19l-7-7 7-7"/>
          </svg>
        </button>

        <div class="slides">

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 

        <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="placeholder/placeholder-image.jpg" alt="Placeholder image" class="image" />
        </a> 
      </div>

        <button id="nextBtn" class="carousel-button next">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
            <path d="M9 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>
    <!--END MODULE-->

    <!--START MODULE-->
    <div class="svg-Lcontainer">
      <div class="top-module"><a>VIDEO LESSON</a></div>
      <div class="carousel">
        <button id="prevBtn" class="carousel-button prev">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
            <path d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        <div class="slides">
   
        <a href="#" class="slide" >
            <video src="video tutorial/Easy Drawings for Kids _ How to draw a cute Ladybud.mp4" onmouseover="showText(this)" onmouseout="hideText(this)" alt="placeholder/video-player-placeholder.png" class="image" controls>
            </video>
        </a>    

        <a href="#" class="slide" >
            <video src="video tutorial/Easy Drawings for Kids _ How to draw a cute Ladybud.mp4" onmouseover="showText(this)" onmouseout="hideText(this)" alt="Placeholder image" class="image" controls>
            </video>
        </a>  

        <a href="#" class="slide" >
            <video src="video tutorial/MAWD.mov" onmouseover="showText(this)" onmouseout="hideText(this)" alt="Placeholder image" class="image" controls>
            </video>
        </a>  

        <a href="#" class="slide" >
            <video src="video tutorial/How to draw a Cat Step by Step _ Cat Drawing Lesson.mp4" onmouseover="showText(this)" onmouseout="hideText(this)" alt="Placeholder image" class="image" controls>
            </video>
        </a>  

        <a href="#" class="slide" >
            <video src="video tutorial/how to draw rabbit drawing from 22 number easy step by step@DrawingTalent.mp4" onmouseover="showText(this)" onmouseout="hideText(this)" alt="Placeholder image" class="image" controls>
            </video>
        </a>  

        </div>
        <button id="nextBtn" class="carousel-button next">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
            <path d="M9 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>
    <!--END MODULE-->

    <!--START SKETCHPAD-->
    <div class="svg-container-center">
      <span>DRAW NOW!</span>
      <p class="text-bottom">You have.</p>
      <button class="sketchpad-button"><p>SKETCHPAD</p></button>
    </div>
    <!--END SKETCHPAD-->

    <!--BOTTOM TEXT-->
    <div class="svg-container-bottom">
      <span>TEACH</span>
      <p class="text-bottoms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
      <p class="text-botoms">do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <button class="teach-button"><p>START TODAY</p></button>
    </div>
    <!--END BOTTOM TEXT-->
  </div>

  <script src="SCIRPT\Authentacation.js"></script>
  <script src="SCIRPT\Hambruger.js"></script>
</body>

</html>