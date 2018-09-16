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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > C</h6>
    <h1 class="nametitle">C</h1>
    <h3 class="subtitle"><img src='../img/language/C.png' height='200' width='200'></img></h3>
    <h3 class="subtitle">A general purpose, systems level programming language. C has syntax like a high-level language, but also some capabilities you would expect to find in a low-level language.</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          C is a general-purpose procedural programming language with a static typing system.  The constructs produced in C can be mapped efficiently
          into machine instuctions without having to go through any intermediate stages, and this made it ideal for writing applications that would have
          previously been written in Assembly languages.
          C was developed by Dennis Ritchie at Bell Labs between 1968 and 1973, and it was first released in 1972.  The C programming language
          is one of the most widely used in the world, being used mostly to build compilers and even to re-implement the Unix operating system.
          This is a language that was designed to bridge the gap between low and high-level programming and to be portable amongst different hardware
          (with minimal changes to the source code).
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating3.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          We've given C a rating of 3/10 for beginner friendliness. This is due to the fact that C has a lot of overheads that can make things difficult if you have not done low-level
          programming before.  For example, you must carry out explicit memory allocation on C, and there is no automated garbage collection like in <a href="Java.php">Java</a>.
          C is not a language made for beginners, but it is a very useful one to know.
          If you are a beginner, and want to learn languages with similar syntax to C, we recommend trying out <a href="Java.php">Java</a> or <a href="C++.php">C++</a> before moving onto C.
        </div>
        <h3 class="subtitle"><b>Average Salary</b></h3>
        <h3 class="subtitle">$100,000 (USA)</h3>
        <div align="center" class="para">
          C is a very old programming language and it is going out of fashion.  However, C was once one of the most popular languages around, and it is still used in most
          legacy systems.  Less people are learning C now, and so there is a demand for C developers to maintain legacy systems.
          [<a target="_blank" href="https://www.payscale.com/research/US/Job=C_Developer/Salary">Source</a>]
        </div>
        <br>
        <div align="center">
          <a href="https://www.tutorialspoint.com/cprogramming/index.htm" target="_blank"><button>Try a C tutorial here!</button></a>
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
