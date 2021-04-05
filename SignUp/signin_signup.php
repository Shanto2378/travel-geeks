
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <form action= "signin_backend.php" class="form sign-in" method= "post">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button name= "signin" class="submit" type="submit">Sign In</button>
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We ve missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="signup_backend.php" class="form sign-up" method="post">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input name="name" type="text">
        </label>
        <label>
          <span>Email</span>
          <input name="email" type="email">
        </label>
        <label>
          <span>Password</span>
          <input name="password" type="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input name="confirmpassword" type="password">
        </label>
        <div>
        <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!!</p>";
    }
    else if($_GET["error"] == "invaliduid"){
      echo "<p>Choose proper username!!</p>";
    }
    else if($_GET["error"] == "invalidemail"){
      echo "<p>Choose proper email!!</p>";
    }
    else if($_GET["error"] == "passwordnotmatch"){
      echo "<p>Password doesn't match!!</p>";
    }
    else if($_GET["error"] == "wrongstmt"){
      echo "<p>Something went wrong, try again!!</p>";
    }
    else if($_GET["error"] == "usernametaken"){
      echo "<p>This username already exists!!</p>";
    }
    else{

    }
  }
  ?>
        </div>
        <button name="signup" class="submit" type="submit">Sign up</button>
      </form>
      </div>
  </div> 
  <!-- <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!!</p>";
    }
    else if($_GET["error"] == "invaliduid"){
      echo "<p>Choose proper username!!</p>";
    }
    else if($_GET["error"] == "invalidemail"){
      echo "<p>Choose proper email!!</p>";
    }
    else if($_GET["error"] == "passwordnotmatch"){
      echo "<p>Password doesn't match!!</p>";
    }
    else if($_GET["error"] == "wrongstmt"){
      echo "<p>Something went wrong, try again!!</p>";
    }
    else if($_GET["error"] == "usernametaken"){
      echo "<p>This username already exists!!</p>";
    }
    else if($_GET["error"] == "none"){
      echo "<p>Signed up successfully!!</p>";
    }
  }
  ?> -->
<script type="text/javascript" src="script.js"></script>
</body>
</html>
