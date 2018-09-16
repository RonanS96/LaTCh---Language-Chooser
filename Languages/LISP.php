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
      <!-- Latest compiled and minified LISPScript -->
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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > LISP</h6>
    <h1 class="nametitle">LISP</h1>
    <h3 class="subtitle"><img src='../img/language/LISP.png' height='200' width='500'></img></h3>
    <h3 class="subtitle">Lisp is the second-oldest high-level language still used today. There have been many versions of Lisp, but it is best known for its distinctive, fully parenthesized notation.</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          The second-oldest high-level language that is still widely used, Lisp had been around for over 60 years.  It has a very distinctive parenthesized prefix notation, and it was originally cerated
          as a practical mathematical notation for computer programs influenced by the notation of Alonzo Church's lambda calculus.
          It quickly became one of the main languages for artificial intelligence research, and introduced many computer science ideas that are
          common today.  Some examples are tree data structures, dynamic typing and recursion.
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating6.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          Lisp is an unusual langauge in terms of its syntax, but it suits programmers with a logical way of thinking.
        </div>
        <h3 class="subtitle"><b>Average Salary</b></h3>
        <h3 class="subtitle">$68,945 (USA)</h3>
        <div align="center" class="para">
          The average software engineer working with Lisp will recieve this salary.
          [<a target="_blank" href="https://www.payscale.com/research/US/Skill=LISP/Salary">Source</a>]
        </div>
        <br>
        <div align="center">
          <a href="https://www.tutorialspoint.com/lisp/index.htm" target="_blank"><button>Try a LISP Tutorial here!</button></a>
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
