<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="stylesheets/style.css">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Sign Up</title>
</head>

<body style="background-image: url(img/cloud-logo.png);background-repeat: no-repeat; background-position: 50% 50%; background-size: 60em 60em; background-origin: content-box, border-box">
  <!-- navbar BEGIN -->
  <nav class="navbar navbar-light" style="background-color: #e3f2fd; opacity:.9">
    <a class="navbar-brand" href="index.php">
      <img src="img/cloud-logo.png" width="45" height="45" class="d-inline-block" alt="">
      <p class="d-inline-block" style="font-family: 'Pacifico', cursive;">MyCloud</p>
    </a>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <li class="nav-item">
        <form action="index.php" method="post">
          <button type="submit" class="btn btn-primary">
            Log In
          </button>
        </form>
      </li>
      <li class="nav-item" style="padding-left:5px;">
        <button type="button" class="btn btn-secondary" disabled>
          Sign Up
        </button>
      </li>
    </ul>
  </nav>
  <!-- navbar END -->

  <!-- Sign up form BEGIN -->
  <div class="container" style="padding-top:50px;">
    <div class="row">
      <div class="col">
        <center><h1 style="font-family: 'Pacifico', cursive;">Sign up for your own MyCloud now!<br></h1>
        <h5>Your own personal cloud storage system.<br></h5>
        <br><small style="font-weight: bold;"><i>***Your personal information will not be shared to anyone***</i></small></center>
      </div>
    </div>
    <div class="row">
      <div class="col-md"></div>
      <div class="col-md-4 align-self-center text-center" style="border: 1px solid white; border-radius: 10px; background-color: rgba(128, 128, 128, .75);">
        <form action="includes/signup.inc.php" method="POST" onSubmit="return checkPassword(this)">
          <div class="form-group" style="padding-top:15px;">
            <input type="text" class="form-control" name="fname" placeholder="First name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lname" placeholder="Last name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="uid" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" name="password2" class="form-control" placeholder="Confirm password">
          </div>
          <button type="submit" class="btn btn-primary self-align-center">Submit</button>
          <small class="form-text" style="color: white; padding-bottom:10px;">Already have an account? <a href="index.php" style="color:blue">Login here</a></small>
        </form>
      </div>
      <div class="col-md"></div>
    </div>
  </div>
  <?php
    if (isset($_GET['signUp'])){
      $signUp = $_GET['signUp'];
      if ($signUp==='passNotMatch') {
        echo '<center><p style="color:red; padding-top: 1em; font-weight: bold">Password did not match!<br>Please try again.</p></center>';
      } else if ($signUp === 'passTooShort') {
        echo '<center><p style="color:red; padding-top: 1em; font-weight: bold">Password is too short!<br>Please try again.</p></center>';
      } else if ($_GET['signUp']==='usernameOrEmailTaken') {
        echo '<center><p style="color:red; padding-top: 1em; font-weight: bold">Username or email is taken.<br>Please try again. </p></center>';
      }
    }
  ?>
  <!-- Sign up form END -->

  <!-- js. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
