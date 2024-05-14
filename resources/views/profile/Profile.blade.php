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
</head>
<body>
    <div class="Main">
    <!--START NAVIGATION-->
        <header>
        <div class="svg-container">
          <div class="topnav-text">MIOW</div>
          <div class="top-logo"><img src="Assets/miow cat hugging brush.png" class="topnav-logo"></div>
          <div class="navigation">
            <div>
                <a class="profile-image" href="/post">
                    <div class="border-image">
                        <img class="Profile" src="Assets/Profile.jpg">
                    </div>
                    <p>Azuraken</p>
                </a>
            </div>
            <div class="BEGINNER"> 
                STUDENT
            </div>
            <div class="nav-background">
                <a class="nav-bars" href="/homepage">HOMEPAGE</a>
                <a class="nav-bars" href="/homelesson">DRAWING LESSONS</a>
                <a class="nav-bars" href="/artgallery">ART GALLERY</a>
            </div>
          </div>
          <button class="hamburger">
            <div class="bar"></div>
          </button>
        </div>
      </header>
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
                                    <td>0 Post</td>
                                    <td>143 Followers</td>
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
                    <a  class="move-right"  href="/about">REVIEW</a>
                    <a  class="move-right"  href="/about">BLOG</a>
            </div>
        </div>
        <!--END NAVIGATION-->

        <!--START GALLERY-->
        <div class="pin_container">
            <form>
            </form>
        </div>
        <!--END ART GALLERY-->
    </div>
<script src="SCIRPT\Authentacation.js"></script>
<script src="SCIRPT\Hambruger.js"></script>
</body>
</html>