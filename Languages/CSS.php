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
      <!-- Latest compiled and minified CSSScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End of Bootstrap links -->
    <link rel="stylesheet" type="text/css" href="../mymain.css">
    <link rel="stylesheet" type="text/css" href="../login.css">
    <title>LaTCh</title>
  </head>

  <body>
    <?php session_start(); ?>
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
        <li id="nav-dropdown" class="fright"><a href="all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > CSS</h6>
    <h1 class="nametitle">CSS</h1>
    <h3 class="subtitle"><img src='../img/language/CSS.png' height='200' width='200'></img></h3>
    <h3 class="subtitle">CSS or Cascading Style Sheets is a style sheet language used to control the structure of a language written in a markup language, for example HTML. If you want to make websites that look nice, you should know CSS!</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          CSS is like HTML's partner in crime.  It allows you to control the style of all HTML pages on a website from one central point - a CSS file.
          It is a commonly used language used in web-development and is designed to enable the seperation of presentation and content.  It is important to
          note that although it is best known for web development, CSS can actually be used with other markup languages, including XML.
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating9.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          CSS is fairly simple to learn and understand, even for beginners with no programming experience.  Creating a static website is a great way
          to start out as a software developer.
        </div>
        <h3 class="subtitle"><b>Average Salary</b></h3>
        <h3 class="subtitle">£24,833 (UK)</h3>
        <div align="center" class="para">
          Being a web developer is a great career.  It requires you to be both technical and creative at the same time and can be very challenging, but also interesting.
          Web developers don't tend to use CSS on it's own, and might actually use a framework to abstract over the language itself.
          [<a target="_blank" href="https://www.payscale.com/research/UK/Job=Web_Developer/Salary">Source</a>]
        </div>
        <br>
        <div align="center">
          <a href="https://www.w3schools.com/css/" target="_blank"><button>Get started with CSS here!</button></a>
        </div>
        <br>
      </div>
    </div>
    <br>
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
