<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MIOW</title>
  <!--fonts-->
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Mochiy Pop One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Patrick Hand SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

  <!--style sheet-->
  <link href="/css/Template.css" rel="stylesheet" type="text/css"> <!--TEMPLATE LAY-OUT-->
  <link href="/css/Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->

  <!-- MAIN CONTENT CSS-->
  <link href="CSS/HomePage.css" rel="stylesheet" type="text/css" /> 
  
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
                    <a class="nav-bars1" href="/communitypage">Community</a>
                    <a class="nav-bars1" href="/homelesson">Sketchpad</a>
                    <a class="nav-bars1" href="">Music Player</a>
                    <a class="nav-bars1" href="">Setting</a>
                </div>
            </div>

            <div class="form-popup" id="myForm">
                <a>Sign Up</a>
                <a>Log In</a>
        </div>
      </header>
    <!--END NAVIGATION-->

    <!--START CONTENT-->
    <div class="homepage-logo">
      <img src="Assets/homepageLogo.png" class="content-logo">
    </div>
    <div class="svg-container-center">
      <div class="logo-title">MIOW: Where Art Meets Opportunity</div>
      <div class="logo-titled">Make Income Online with Workspace</div>
      <div class="logo-text">
        <p>A haven for artistic content that encourages growth and development in both learners </p>
        <p>and artists. With access to a multitude of resources, </p>
        <p> our community is the perfect place for individuals of all skill levels to learn and create.</p>
      </div>

      <div class="logo-textG">
          <p>Don't miss out on this opportunity to immerse yourself </p>
          <p> in the realm of arts and take your creativity to the next level.</p>
      </div>

      <div class="logo-textF">
        <p>Join now and start your artistic journey today!</p>
      </div>

      <button class="submit" type="submit"><a href="/homelesson">EXPLORE NOW</a></button>
    </div>
    <!--END CONTENT-->

    
    <!--START ABOUT-->
    <div class="about-line">
    </div>
    <div class="svg-Pcontainer">
      <div class="section-title"> ABOUT US </div>
      <img src="Assets/aboutLogo.png" class="logo-about">
      <div class="about-title">What is MIOW?</div>

      <div class="about-text">
        <p class="about-textbottom"><span class="about-texthighlight">MIOW</span> is an acronym for <span class="about-texthighlight"> Make Income Online with Workspace.</span></p>
        <p>A haven of artistic content, where you can earn from</p>
        <p>your passion, learn from talented artists and explore different forms</p>
        <p>of art.</p>

        <p class="about-texttop">We are dedicated to designing an e-learning platform that</p>
        <p>prioritizes the needs and preferences of its users. The</p>
        <p>following will be offered by our website: </p>

        <p class="about-texttop">🗹 Commission services by artists. </p>
        <p>🗹 Posting of own art blogs.</p>
        <p>🗹 Art fair</p>

        <p class="about-texttops">The website's features are designed to create a bridge</p>
        <p>between artists and potential customers, providing a haven</p>
        <p>for artistic content where both parties can benefit from</p>
        <p>the website.</p>
      </div>
    </div>
    <!--END ABOUT-->

    <!--START MEMBERS-->
    <div class="svg-Scontainer">
      <div class="section-title">
        <b>Our Team</b>
      </div>
      <svg  viewBox="0 0 116 6"  xmlns="http://www.w3.org/2000/svg" class="line-member">
        <rect/>
      </svg>
      <p class="Member-Description">MIOW is a group that comprises 13 individuals, including programmers, researchers, and artists.</p>
      <p class="Member-Descriptions">This team works collaboratively to achieve its goals, and each member brings unique skills and expertise to the table.</p>
    </div>


    <div class="svg-Fcontainer">
      <div class="carousel">
        <button id="prevBtn" class="carousel-button prev">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M15 4L7 12L15 20" stroke="#6F6E6E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
          </svg>
        </button>
        <div class="slides">

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="TEAM ICON\cat1.png" alt="Placeholder image" class="image" />
            <div class="slided" onmouseover="showText(this)" onmouseout="hideText(this)">
              <h3>Barro</h3>
              <p>Description</p>
            </div>
          </a>

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="TEAM ICON\cat2.png" alt="Placeholder image" class="image" />
          </a>

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="" alt="Placeholder image" class="image" />
          </a>

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="TEAM ICON\cat3.png" alt="Placeholder image" class="image" />
          </a>

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="TEAM ICON\cat4.png" alt="Placeholder image" class="image" />
          </a>

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="TEAM ICON\cat5.png" alt="Placeholder image" class="image" />
          </a>

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="TEAM ICON\cat6.png" alt="Placeholder image" class="image" />
          </a>

          <a href="#" class="slide" onmouseover="showText(this)" onmouseout="hideText(this)">
            <img src="TEAM ICON\cat7.png" alt="Placeholder image" class="image" />
          </a>

        </div>

        <button id="nextBtn" class="carousel-button next">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M9 20L17 12L9 4" stroke="#6F6E6E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
          </svg>
        </button>
      </div>
    </div>
    <!--END MEMBERS-->

    <!--START FOOTER-->
    <img src="Assets/miow cat hugging brush.png" class="logo-footers">
    <div class="svg-container-footer">
      <div class="footer-titled">
        <p class="footer-title">MIOW</p>
      </div>

      <div class="footer-text">
        <h2 class="footer-header">Tell us about your experience</h2>
        <div class="footer-content">
          <p>At MIOW, we are committed to providing our users with an exceptional experience. 
          <p>We value your feedback and strive to make necessary improvements 
          <p>to our platform to enhance your overall satisfaction. 
          <p>Your thoughts, experiences, and suggestions are important to us, and 
          <p>we encourage you to share them with us so that we can continue to improve and exceed your expectations. 
          <p>With your help, we can ensure that MIOW remains the best platform for all your needs.</p>
        </div>
      </div>

      <div class="footer-social">
        <span>Email</span><br>
        <span>Website Link</span><br>
        <span>Phone</span><br>
      </div>

      <div class="footer-media">
        <p>miowhaven@gmail.com</p><br>
        <p>0967 844 2492 <br> 0948 911 0636</p><br>
      </div>

    </div>
    <!--END FOOTER-->
  </div>

  <script src="SCIRPT\Authentacation.js"></script>
  <script src="SCIRPT\Hambruger.js"></script>
</body>

</html>
