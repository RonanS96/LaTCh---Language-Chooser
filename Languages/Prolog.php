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
      <!-- Latest compiled and minified PrologScript -->
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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > Prolog</h6>
    <h1 class="nametitle">Prolog</h1>
    <h3 class="subtitle"><img src='../img/language/Prolog.png' height='200' width='200'></img></h3>
    <h3 class="subtitle">A language which uses predicate logic to model facts and rules that can be queried upon running the program.</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          Prolog is a logical programming language.  The source code consists of a knowledge base, simply consisting of facts and rules.
          Upon running the program you can query this knowledge base (ask it questions) and it will return an answer based on the facts
          and rules it contains - usually an answer is simply 'true' or 'false'.  Prolog works on a closed-world assumption, meaning all
          facts and rules inside the database are true, and anything not explicitly stated in the knowledge base or not implied by the rules
          is assumed to be false.  Prolog first appeared in 1972, and was designed by Alain Colmerauer.  It was one of the first logical
          programming languages to be invented, and is still very popular in the area today.
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating8.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          Prolog is rather user friendly, and if you can think in a logical way, the basics are easy enough to understand.
          It is a bit different to ther programming languages, but has some interesting uses, including AI! Prolog gets 8/10 from us.
        </div>
        <h3 class="subtitle"><b>Average Salary</b></h3>
        <h3 class="subtitle">$60,000 (USA)</h3>
        <div align="center" class="para">
          Prolog is used in a specialised area of computer programming, making developers in the language very valuable.
          [<a target="_blank" href="https://www.simplyhired.com/search?q=prolog+developer&job=jhMHrXcV6C5KYoTToDTGz0V-a1auAJwzfRxojum9MM5SB5KfftFwdw">Source</a>]
        </div>
        <br>
        <div align="center">
          <a href="http://www.swi-prolog.org/" target="_blank"><button>Get started with Prolog here!</button></a>
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
