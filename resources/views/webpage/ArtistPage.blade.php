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
        <div class="topnav-text">
            <a href="/homepage" class="MIOW-Text">
                MIOW
            </a>
        </div>
        <div class="top-logo">
            <a href="/homepage">
                <img src="Assets/miow cat hugging brush.png" class="topnav-logo">
            </a>  
        </div>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
            </div>
            
            <div class="navigation">
                <div class="profile-background">
                <button class="profile-button" onclick="toggleForm()">
                <svg class="button-profile" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #808080;">
                    <path d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                </svg>
                </button>
                    <a class="profile-image" href="/post">
                        <div class="border-image">
                            <img class="Profile" src="Assets/Profile.jpg">
                        </div>
                        <p>Anonymous</p>
                    </a>
                    <div class="BEGINNER"> 
                        Guest
                    </div>
                </div>
                <div class="nav-background">
                    <a class="nav-bars" href="/homepage">Homepage
                        <button class="button-homepage">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #D4CBE0;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                        </button>
                    </a>
                    <a class="nav-bars1" href="/homelesson">Art Blog</a>
                    <a class="nav-bars1" href="/artgallery">Art Gallery</a>
                    <a class="nav-bars1" href="/artgallery">Community</a>
                    <a class="nav-bars1" href="/artgallery">Sketchpad</a>
                    <a class="nav-bars1" href="/artgallery">Music Player</a>
                    <a class="nav-bars1" href="/artgallery">Setting</a>
                </div>
            </div>

            <div class="form-popup" id="myForm">
                <a>Sign Up</a>
                <a>Log In</a>
            </div>
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
