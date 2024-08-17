<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
  <title>MIOW</title>
  <!--fonts-->
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Mochiy Pop One' rel='stylesheet'>

  <!--style sheet-->
  <link href="/css/Template.css" rel="stylesheet" type="text/css"> <!--TEMPLATE LAY-OUT-->
  <link href="/css/Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->

  <!--MAIN CSS-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="CSS/Search.css" rel="stylesheet" type="text/css" />
  <link href="CSS/Rows.css" rel="stylesheet" type="text/css" />
  <link href="CSS/Upload.css" rel="stylesheet" type="text/css" />
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
        </header>
      <!--END NAVIGATION-->

      <!--TITLE-->
      <div class="title-container">
        <h1>ART GALLERY</h1>
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
                <button class="btn-upload" onclick="openModal()" type="button">Upload Art</button>
            </div>
            <div id="popup" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="wrapper">
                        <div class="box">
                            <div class="input-bx">
                                <h2 class="upload">Upload Art</h2>
                                <form action="">
                                    <input type="file" id="upload" accept=".doc, .docx, .pdf" hidden>
                                    <label for="upload" class="uploadlabel">
                                        <span><i class="fa fa-cloud-upload"></i></span>
                                        <p>Click to Upload</p>
                                    </label>
                                </form>
                            </div>
                            <div id="filewrapper">
                                <h3 class="uploaded">Upload Art</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    <!--End Search-->

    <!--Start Grid-->
      <div class="pin_container">
        <div class="card card_small"></div>
        <div class="card card_medium"></div>
        <div class="card card_small"></div>
        <div class="card card_medium"></div>
        <div class="card card_small"></div>
        <div class="card card_small"></div>
        <div class="card card_small"></div>
        <div class="card card_medium"></div>
        <div class="card card_large"></div>
        <div class="card card_medium"></div>
        <div class="card card_large"></div>
        <div class="card card_medium"></div>
        <div class="card card_large"></div>
        <div class="card card_large"></div>
        <div class="card card_small"></div>
        <div class="card card_medium"></div>
      </div>
      <!--End Grid-->
    </div>
  </div>
  
    <script src="SCIRPT\Authentacation.js"></script>
    <script src="SCIRPT\Hambruger.js"></script>
    <script src="SCIRPT/Upload.js"></script>
    <script src="SCIRPT/Hide-Upload.js"></script>
</body>
</html>