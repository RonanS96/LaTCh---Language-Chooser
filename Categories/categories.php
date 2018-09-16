<!-- CATEGORIES.
   - Here, langauges are split into categories to allow for easier searching.
 -->
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
    <!-- My own stylesheet for the general structure and style of the website. -->
    <link rel="stylesheet" type="text/css" href="../mymain.css">
    <title>LaTCh</title>
  </head>
  <body>
    <?php session_start(); ?>
    <!-- The top navigation bar, which should be consistent across the website. -->
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a class="no-hover"><img src="../img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="../img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="../index.php">LaTCh</a></li>
        <?php
            include "MACSorLH.php";

            if(!isset($_SESSION['user_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='../login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='../User/logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='../User/edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="../DiscussionBoard/allboards.php">Discussion Board</a></li>
        <li id="nav-dropdown" class="fright"><a href="../Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > Categories</h6>
    <h1 class="nametitle">Categories</h1>
    <br>
    <br>
    <div align="center">
        <div class="button"><a href="HighOrLow.php"><button>High or Low Level</button></a></div>
        <div class="button"><a href="Paradigms.php"><button>Paradigms</button></a></div>
        <div class="button"><a href="Popularity.php"><button>Popularity</button></a></div>
        <div class="button"><a href="Frameworks.php"><button>Frameworks</button></a></div>
        <div class="button"><a href="Databases.php"><button>Databases</button></a></div>
        <div class="button"><a href="WebDev.php"><button>Web Development</button></a></div>
        <div class="button"><a href="DataScience.php"><button>Data Science</button></a></div>
        <div class="button"><a href="Scenarios.php"><button>Scenarios</button></a></div>
    </div>
    <br>
    <br>
    <!-- The footer which sits at the very bottom of each page. This should also be consistent across the website. -->
    <div class="footer">
      <ul class="footer">
        <li style="float: right"><a href="../about.php">About this site</a></li>
        <li style="float: right"><a href="../feedback.php">Give feedback</a></li>
        <li style="float: right"><a href="../support.php">Support</a></li>
      </ul>
    </div>
  </body>
</html>
