<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MIOW</title>
  <link href="CSS\Template.css" rel="stylesheet" type="text/css" /> <!-- TEMPLATE CSS -->
  <link href="CSS\Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->
  <link href="CSS\Module.css" rel="stylesheet" type="text/css" /> <!--Module CSS-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap">
</head>

<body>

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

    <!--START MODULE-->
    <div class="svg-Fcontainer">
      <div class="carousel">
        <button id="prevBtn" class="carousel-button prev">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
            <path d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        <div class="slides">
          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="https://i.pinimg.com/564x/53/53/af/5353afab8b70fd886c39afeba28fc207.jpg" alt="Placeholder image" class="image" />
            <div class="text-overlay">
              <h3 class="slide-title">Title</h3>
              <p class="slide-description">Description</p>
            </div>
          </a>          
          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="https://i.pinimg.com/564x/53/53/af/5353afab8b70fd886c39afeba28fc207.jpg" alt="Placeholder image" class="image" />
            <div class="text-overlay">
              <h3 class="slide-title">Title</h3>
              <p class="slide-description">Description</p>
            </div>
          </a>  
          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="https://i.pinimg.com/564x/53/53/af/5353afab8b70fd886c39afeba28fc207.jpg" alt="Placeholder image" class="image" />
            <div class="text-overlay">
              <h3 class="slide-title">Title</h3>
              <p class="slide-description">Description</p>
            </div>
          </a>  
          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="https://i.pinimg.com/564x/53/53/af/5353afab8b70fd886c39afeba28fc207.jpg" alt="Placeholder image" class="image" />
            <div class="text-overlay">
              <h3 class="slide-title">Title</h3>
              <p class="slide-description">Description</p>
            </div>
          </a>  
          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="https://i.pinimg.com/564x/53/53/af/5353afab8b70fd886c39afeba28fc207.jpg" alt="Placeholder image" class="image" />
            <div class="text-overlay">
              <h3 class="slide-title">Title</h3>
              <p class="slide-description">Description</p>
            </div>
          </a>  
          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="https://i.pinimg.com/564x/53/53/af/5353afab8b70fd886c39afeba28fc207.jpg" alt="Placeholder image" class="image" />
            <div class="text-overlay">
              <h3 class="slide-title">Title</h3>
              <p class="slide-description">Description</p>
            </div>
          </a>  
          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="https://i.pinimg.com/564x/53/53/af/5353afab8b70fd886c39afeba28fc207.jpg" alt="Placeholder image" class="image" />
            <div class="text-overlay">
              <h3 class="slide-title">Title</h3>
              <p class="slide-description">Description</p>
            </div>
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
  </div>

  <script src="SCIRPT\Authentacation.js"></script>
  <script src="SCIRPT\Hambruger.js"></script>
</body>

</html>