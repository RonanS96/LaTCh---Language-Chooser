<!-- LOGIN FORM.
   - A user can login to their account from here.
   - Passwords are hashed for secure storage.
   -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap links -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End of Bootstrap links -->
    <link rel="stylesheet" type="text/css" href="mymain.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>LaTCh</title>
    <script id = "ForgotPassword">
      function ForgotPassword(){
        alert("If you have forgotten your password, you should contact the LaTCh administrator (Ronan Smith).");
      }
    </script>
  </head>
  <body>
    <?php session_start(); ?>
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a class="no-hover"><img src="img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="index.php">LaTCh</a></li>
        <?php
            include "MACSorLH.php";

            if(!isset($_SESSION['user_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='User/logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='User/edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="DiscussionBoard/allboards.php">Discussion Board</a></li>
        <li id="nav-dropdown" class="fright"><a href="Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="index.php">Home</a> > Login</h6>
    <h1 class="nametitle">User Login</h1>
    <h3 class="subtitle">Don't have an account yet? Create one <a href="signup.php">here</a>.</h3>
    <?php
      // Deal with different error conditions that may occur on attempted login.
      if(isset($_SESSION['fail'])){
        if($_SESSION['fail'] == 1){
          echo "<h3 style='color: red;' class='subtitle'>Incorrect username and/or password. Try again.</h3>";
          $_SESSION['fail'] = 0;
        }
      }
      if(isset($_SESSION['signup'])){
        // If a user has just signed up, they will see this.
        if($_SESSION['signup'] == 2){
          echo "<h3 style='color: green;' class='subtitle'>You are now signed up. Please login here.</h3>";
          $_SESSION['signup'] = 0;
        }
        if($_SESSION['signup'] == 3){
          echo "<h3 style='color: red;' class='subtitle'>Your account has been deactivated. Please contact an admin.</h3>";
          $_SESSION['signup'] = 0;
        }
      }
    ?>
    <br>
      <!-- This form was copied and modified from https://www.w3schools.com/howto/howto_css_login_form.asp [Last accessed 21/12/2017]. -->
      <?php
        if(!isset($_SESSION['user_no'])){
          echo "<form method='post' action='User/login.php'>";
        }
        else
        {
          // If a user is already logged in, the form does not do anything.
          echo "<form method='post' action=''>";
        }
      ?>
        <div class="container">
          <label><b>Username</b></label>
          <input type="email" placeholder="Enter your Email" name="uname" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter your Password" name="psw" required>

          <button type="submit">Login</button>
          <span class="psw"><a href="" onclick="ForgotPassword()">Forgot your password? </a><a href="Admin/login.php">Admin?</a></span><br>
        </div>
      </form>
    <br>
    <div class="footer">
      <ul class="footer">
        <li style="float: right"><a href="about.php">About this site</a></li>
        <li style="float: right"><a href="feedback.php">Give feedback</a></li>
        <li style="float: right"><a href="support.php">Support</a></li>
      </ul>
    </div>
  </body>
</html>
