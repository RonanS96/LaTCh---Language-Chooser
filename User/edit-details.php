<!-- Form that allows a user to update their account details...
   - Must be private to a user. -->
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
    <title>LaTCh</title>
  </head>
  <body>
    <?php
      session_start();
      // Do not allow users to access this page if they are not logged in.
      if(!isset($_SESSION['user_no'])){
        header("Location: ../login.php");
      }
    ?>
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a class="no-hover"><img src="../img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="../img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="../index.php">LaTCh</a></li>
        <?php
            include "MACSorLH.php";

            if(!isset($_SESSION['user_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="../DiscussionBoard/allboards.php">Discussion Board</a></li>
        <li id="nav-dropdown" class="fright"><a href="../Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="../index.php">Home</a>  > Edit User Details</h6>
    <h1 class="nametitle">Edit your details</h1>
    <h3 class="subtitle">You can change any of your account details here.</h3>
    <?php
      // Deal with different error conditions that may occur on attempted login.
      if(isset($_SESSION['edit'])){
        if($_SESSION['edit'] == 1){
          echo "<h3 style='color: green;' class='subtitle'>Your details have just been updated. Log out and in again to see changes.</h3>";
          $_SESSION['edit'] = 0;
        }
        else {
          echo "<h3 style='color: red;' class='subtitle'>Changes you make here will not appear until you log out and in again.</h3>";
        }
      }
      else {
        echo "<h3 style='color: red;' class='subtitle'>Changes you make here will not appear until you log out and in again.</h3>";
      }
    ?>
    <br>
    <!-- This form was copied and modified from https://www.w3schools.com/howto/howto_css_signup_form.asp [Last accessed 21/12/2017]. -->
    <form method="post" action="../PHP/updateUser.php">
      <div class="container">
        <?php
          echo "<label>Your user ID is: <i>USER" . $_SESSION['user_no'] . "</i>.</label><br>";

          echo "<label><b>First Name</b></label>
          <input type='text' placeholder='" . $_SESSION['first_name'] . "' name='fname' >

          <label><b>Surname</b></label>
          <input type='text' placeholder='" . $_SESSION['second_name'] . "' name='sname' >

          <label><b>Email</b></label>
          <input type='email' placeholder='" . $_SESSION['email'] . "' name='eml' >

          <label><b>New Password</b></label>
          <input type='password' id='password' placeholder='Enter a new Password' name='psw' >

          <label><b>Confirm Password</b></label>
          <input type='password' id='confirm_password' placeholder='Repeat new Password' name='psw-repeat' >"
        ?>
        <div class="clearfix">
          <button id="but" type="submit" class="signupbtn">Update</button>
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
