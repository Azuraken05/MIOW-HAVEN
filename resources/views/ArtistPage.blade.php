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

  <!-- MAIN CONTENT CSS-->
  <link href="css/ArtistPages.css" rel="stylesheet" type="text/css" /> 
</head>

<body>

  <!--CONTAINER-->
  <div class="Main">
    <!--START NAVIGATION-->
    <header>
        <div class="svg-container">
          <div class="topnav-text">MIOW</div>
          <div class="top-logo"><img src="Assets/toplogo.png" class="topnav-logo"></div>
          <nav class="navigation">
            <a class="profile-image" href="/post">
                <img class="Profile" src="Assets\Profile.jpg">
                <p>Azuraken</p>
            </a>
            <div class="BEGINNER"> 
                STUDENT
            </div>
            <div class="nav-background">
                <a class="nav-bars" href="/homepage">HOMEPAGE</a>
                <a class="nav-bars" href="/homelesson">DRAWING LESSONS</a>
                <a class="nav-bars" href="/artgallery">ART GALLERY</a>
            </div>
          </nav>
          <button class="hamburger">
            <div class="bar"></div>
          </button>
        </div>
      </header>
    <!--END NAVIGATION-->

    <!--TITLE-->
      <div class="title-container">
        <h1>COMMUNITY</h1>
      </div>
    <!--END TITLE-->
    <!--navigation-->
      <div class="navigation-container">
        <a href="/artgallery">ARTWORKS</a>
        <a href="/communitypage">ARTIST</a>
      </div>
    <!--end navigation-->
    
    <!--Start Search and upload-->
        <div class="Upload-Search">
        <form>
            <div class="search-bar" style="display: flex; align-items: center;">
                <input type="text" placeholder="Search..." id="search-input" style="flex-grow: 1;">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
        </form>
      </div>
    <!--End Search-->
    
    <!--START ABOUT-->
    <div class="svg-Pcontainer">
    </div>
    <!--END ABOUT-->
  </div>

  <script src="SCIRPT\Authentacation.js"></script>
  <script src="SCIRPT\Hambruger.js"></script>
</body>

</html>
