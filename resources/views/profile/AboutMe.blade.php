<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Profile</title>
    <link href="css/Template.css" rel="stylesheet" type="text/css" /> <!-- TEMPLATE CSS -->
    <link href="css/Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->
    <link href="css/Profile.css" rel="stylesheet" type="text/css" /> <!--PROFILE TEMPLATE CSS-->
    
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mochiy Pop One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Patrick Hand SC' rel='stylesheet'>

    <!-- MAIN CONTENT CSS-->
    <link href="css\AboutMe.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
    <div class="Main">
    <!--START NAVIGATION-->
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
    <!--END NAVIGATION-->

    <!--Profile Page-->
    <div class="profile-container">
        <div class="profile-details">
            <div class="pd-left">
                <div class="pd-row">
                    <img src="Assets/Profile.jpg" alt="Profile" class="pd-image">
                    <div class="left">
                        <h3>Azuraken</h3>
                        <table>
                            <tr>
                                <!--THIS IS FOR SOCIAL MEDIA -->
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END PROFILE-->

    <!--START NAVIGATION-->
    <div>
        <div class="nav-container">
                <a  class="move-right" href="/post">POSTS</a>
                <a class="move-right"  href="/about">ABOUT ME</a>
                <a  class="move-right"  href="/review">REVIEW</a>
                <a  class="move-right"  href="/about">BLOG</a>
        </div>
    </div>
    <!--END NAVIGATION-->


    <!--ABOUT SECTION-->

    <div class="Username"><p>MIOW: Where Art Meets Opportunity</p></div>


        <!--START GALLERY-->
        <!--END ART GALLERY-->
    </div>
<script src="SCIRPT\Authentacation.js"></script>
<script src="SCIRPT\Hambruger.js"></script>
</body>
</html>