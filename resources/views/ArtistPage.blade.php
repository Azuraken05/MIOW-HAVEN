<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="/css/Template.css" rel="stylesheet" type="text/css">
    <link href="/css/Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="css/MainArtist.css" />
    <link rel="stylesheet" href="css/ArtistPage.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"/>
  </head>
  <body>
    <div class="artist">
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
          <a href="#">SKETCHPAD</a>
        </nav>
        <button class="hamburger">
          <div class="bar"></div>
        </button>
      </div>
    </header>

      <div class="image-18"></div>
      <section class="content">
        <div class="main-area">
          <div class="artist-wrapper">
            <h1 class="artist1">artist</h1>
          </div>
          <div class="navigation-area">
            <img
              class="right-arrow-alt-solid-24-icon"
              alt=""
              src="./public/rightarrowaltsolid24@2x.png"
            />

            <div class="navigation-content">
              <div class="search-bar">
                <div class="search-bar-child"></div>
                <img
                  class="search-regular-24-1-1"
                  alt=""
                  src="./public/searchregular24-1-1@2x.png"
                />

                <input class="search-field" placeholder="Search" type="text" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="gallery">
        <div class="gallery-child"></div>
        <div class="gallery-row">
          <div class="image-row">

            <div class="row-titles">
              <div class="abduljamar">@abduljamar</div>
            </div>
          </div>
          <div class="image-row1">
            <img
              class="image-9-icon"
              loading="lazy"
              alt=""
              src="./public/image-8@2x.png"
            />
          </div>
        </div>
      </section>


      @foreach($users as $user)
      <p>{{$user->email}}</p>
      <img src="{{$user->avatar}}" onerror="this.src='Assets/Shhh.jpg';" />
      @endforeach
    </div>

    <script src="SCIRPT\Authentacation.js"></script>
    <script src="SCIRPT\Hambruger.js"></script>
  </body>
</html>
