<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap links -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End of Bootstrap links -->
    <link rel="stylesheet" type="text/css" href="../mymain.css">
    <link rel="stylesheet" type="text/css" href="../login.css">
    <title>LaTCh - Admin</title>
  </head>
  <body>
    <?php
      session_start();
      // Keep non-admin users out
      if(!isset($_SESSION['admin_no'])){
        header("Location: login.php");
      }
    ?>
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a class="no-hover"><img src="../img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="../img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="home.php">LaTCh - Admin</a></li>
        <?php
            include "MACSorLH.php";

            if(!isset($_SESSION['admin_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='../login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='../User/logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='../User/edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="home.php">Admin Home</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="home.php">Admin Home</a> > <a href="adminUsers.php">Admin Accounts</a> > New Admin</h6>
    <h1 class="nametitle">Create an Admin account</h1>
    <br>
    <!-- This form was copied and modified from https://www.w3schools.com/howto/howto_css_signup_form.asp [Last accessed 21/12/2017]. -->
    <form method="post" action="signupAdmin.php">
      <div class="container">
        <label><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required>

        <label><b>Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="sname" required>

        <label><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="eml" required>

        <label><b>Password</b></label>
        <input type="password" id="password" placeholder="Enter Password" name="psw" required>

        <label><b>Confirm Password</b></label>
        <input type="password" id="confirm_password" placeholder="Repeat Password" name="psw-repeat" required>

        <div class="clearfix">
          <button id="but" type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
    <script>
        // Copied and modified from: https://codepen.io/diegoleme/pen/surIK [Last accessed 2nd February 2018]
        var password = document.getElementById("password"),
          confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }

        var but = document.getElementById("but")
        but.onClick = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
    <br>
    <div class="footer">
      <ul class="footer">
        <li style="float: right"><a href="../about.php">About this site</a></li>
        <li style="float: right"><a href="../feedback.php">Give feedback</a></li>
        <li style="float: right"><a href="../support.php">Support</a></li>
      </ul>
    </div>
  </body>
</html>
