<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MIOW</title>
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Plus Jakarta Sans' rel='stylesheet'>
  <link href="CSS\Template.css" rel="stylesheet" type="text/css" /> <!-- TEMPLATE CSS -->
  <link href="CSS\Hamburger.css" rel="stylesheet" type="text/css" /> <!-- NAVIGATION CSS -->

  <link href="CSS\SignUp.css" rel="stylesheet" type="text/css" /> <!-- MAIN CONTENT CSS-->
</head>

<body>

  <div class="Main">
    <!--START FORMS-->
    <div class="Authentacation-form">
      <img src="Assets/homepageLogo.png">
      <p class="Sign-upWelcome">Welcome to MIOW</p>
      <form class="forms-login" method="POST" action="{{ route('register') }}">
        @csrf
        <p>
          <label class="name" for="name">Username</label>
          <input type="user" placeholder="Enter your Username" name="name" required>
        </p>
        <p>
          <label class="Email" for="email">Email</label>
          <input type="text" placeholder="Enter your Email" name="email" required>
        </p>
        <p>
          <label class="password" for="password">Password</label>
          <input type="password" placeholder="Enter your password" name="password" id="password" required>
        </p>
        <p>
          <label class="CPassword" for="password">Confirm Password</label>
          <input type="cpassword" placeholder="Confirm your password" name="cpsw" id="cpsw" required>
        </p>
      
        <button class="submit" type="submit"><a href="/login">Sign In</a></button>
      </form>
        
    </div>
  </div>
  <!--END FORMS-->

  <script src="SCIRPT\Authentacation.js"></script>
  <script src="SCIRPT\Hambruger.js"></script>
</body>

</html>