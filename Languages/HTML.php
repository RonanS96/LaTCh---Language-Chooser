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
      <!-- Latest compiled and minified HTMLScript -->
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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > HTML</h6>
    <h1 class="nametitle">HTML</h1>
    <h3 class="subtitle"><img src='../img/language/HTML.png' height='200' width='200'></img></h3>
    <h3 class="subtitle">This is the standard markup language for creating web pages. HTML stands for Hyper Text Markup Language.</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          Hyper Text Markup Language (HTML) 5 is the standard markup language for creating web pages and web applications on the World Wide Web.
          HTML describes a document semantically, and it is up to the web browser to render them into multimedia web pages.  The language is constantly
          developed by W3C (World Wide Web Consortium) and the WHATWG (Web Hypertext Application Technology Working Group) and it was first released
          in 1983, after being invented by Tim-Berners Lee.
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating9.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          On it's own, HTML is a very simple language to learn.  It's syntax is made up of structured, embedded tags, which are easy to follow and
          understand... the only overhead when getting started is learning all the main tags.  Once you have learned the basics in HTML, it is useful to learn
          <a href="CSS.php">CSS</a>, which applies style to HTML pages, and <a href="JavaScript.php">JavaScript</a>, which allows you to make web pages more interactive.
          Then you can get into the more complicated stuff and create dynamic websites using <a href="PHP.php">PHP</a> or <a href="Java.php">Java</a> and a database
          language like <a href="SQL.php">SQL</a>, or other alternative languages that you prefer.
        </div>
        <h3 class="subtitle"><b>Average Salary</b></h3>
        <h3 class="subtitle">£24,833 (UK)</h3>
        <div align="center" class="para">
          Being a web developer is a great career.  It requires you to be both technical and creative at the same time and can be very challenging, but also interesting.
          Web developers don't tend to use HTML on it's own, and might actually use a framework to abstract over the language itself.
          [<a target="_blank" href="https://www.payscale.com/research/UK/Job=Web_Developer/Salary">Source</a>]
        </div>
        <br>
        <div align="center">
          <a href="https://www.w3schools.com/html/" target="_blank"><button>Get started with HTML here!</button></a>
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
