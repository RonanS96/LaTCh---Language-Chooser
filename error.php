<!-- ERROR page.
   - To be displayed when a user looks for a page that doesn't exist.
   - This doesn't appear on the MACS server.  
   -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/LanguageChooser/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap links -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified HTMLScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End of Bootstrap links -->
    <link rel="stylesheet" type="text/css" href="/LanguageChooser/mymain.css">
    <title>LaTCh</title>
  </head>

  <body>
    <?php session_start(); ?>
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a><img src="../img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="../img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="/LanguageChooser/index.php">LaTCh</a></li>
        <?php
            include "MACSorLH.php";

            if(!isset($_SESSION['user_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='/LanguageChooser/login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='/LanguageChooser/User/logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='/LanguageChooser/User/edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="/LanguageChooser/DiscussionBoard/allboards.php">Discussion Board</a></li>
        <li id="nav-dropdown" class="fright"><a href="/LanguageChooser/Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h1 class="nametitle">Whoops! Looks like this page isn't available.</h1>
    <h3 class="subtitle">This is a prototype version of the website, so some pages have not been created yet... Please go <b>back</b>, or to the LaTCh <a href="../index.php">homepage</a>.</h3>
    <h1 class="subtitle"><img padding-top: "0" class="logo" src="/LanguageChooser/img/LaTCh-Black.png"></img></h1>
    <br>

    <br>
    <br>
    <div class="footer">
      <ul class="footer">
        <li style="float: right"><a href="/LanguageChooser/about.php">About this site</a></li>
        <li style="float: right"><a href="/LanguageChooser/feedback.php">Give feedback</a></li>
        <li style="float: right"><a href="/LanguageChooser/support.php">Support</a></li>
      </ul>
    </div>
  </body>
</html>
