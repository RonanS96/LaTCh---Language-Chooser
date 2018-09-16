<!-- FEEDBACK page.
   - Here, a user can give feedback about the system - one piece of feedback per session. 
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
    <h6><a id="breadcrumbs" href="index.php">Home</a> > Give Feedback</h6>
    <h1 class="nametitle">Feedback</h1>
    <h3 class="subtitle">Honest feedback on your thoughts about this website is very welcome.  You can post it here.</h3>
    <?php
      if(!isset($_SESSION['sent'])){
        echo "<h3 class='subtitle'>Your feedback will be sent to the website administrator.  Please note, you can only send one piece of feedback at a time.</h3>";
      }
      else {
        echo "<h3 style='color: green;' class='subtitle'>Thanks for your feedback! You cannot send any more feedback at this time.</h3>";
      }
    ?>

    <br>
    <?php
      if(!isset($_SESSION['sent'])){
        echo "<form method='post' action='PHP/sendFeedback.php'>";
      }
      else
      {
        echo "<form method='post' action=''>";
      }
    ?>

      <div class="container">
        <label><b>Your Name</b></label>
        <input type="text" placeholder="Enter your full name" name="Name" required>

        <label><b>Your Email</b></label>
        <input type="email" placeholder="Enter your email address" name="Email" required>

        <label><b>Your Feedback</b></label>
        <input type="text" placeholder="Enter your feedback" name="Message" required>

        <button type="submit">Send</button>
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
