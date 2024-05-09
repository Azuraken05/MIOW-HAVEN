<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Profile</title>
    <link href="css/Template.css" rel="stylesheet" type="text/css" /> <!-- TEMPLATE CSS -->
    <link href="css/Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link href="css/Profile.css" rel="stylesheet" type="text/css" />
</head>
<body>
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
                                    <td>69 Post</td>
                                    <td>143 Followers</td>
                                    <td>10 Following</td>
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
            <nav class="nav-container">
                <a  class="move-right" href="/post">POSTS</a>
                <a href="/about">ABOUT ME</a>
                <a href="/ownedlesson">OWNED LESSONS</a>
            </nav>
        </div>
        <!--END NAVIGATION-->

        <!--START GALLERY-->
        <!--END ART GALLERY-->
    </div>
<script src="SCIRPT\Authentacation.js"></script>
<script src="SCIRPT\Hambruger.js"></script>
</body>
</html>