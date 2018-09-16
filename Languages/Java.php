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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > Java</h6>
    <h1 class="nametitle">Java</h1>
    <h3 class="subtitle"><img src='../img/language/Java.png' height='200' width='200'></img></h3>
    <h3 class="subtitle">A general-purpose, object-oriented, class-based language used in many areas including server-side scripting and mobile app development.</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          Java is an object-oriented and class based programming language, originally designed by James Gosling in 1995, and develpped by
          Sun Microsystems.
          It is designed to be portable with the WORA - "Write Once, Run Anywhere" - approach, and in theory it can be run on
          any platform.  This is allowed by Java Virtual Machine (JVM)... Any Java program can be compiled into Java Byte Code,
          which can run on JVM, and JVM can run on almost any platform!  Java is an exremely popular programming language, and is used
          in a huge number of different areas, with two of the main ones being mobile app developnent (Android apps) and client-server
          web applications.
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating6.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          Java is fairly user friendly and is a good language to get started with in object-oriented programming.  It is a bit
          friendlier than <a href="CPlusPlus.php">C++</a> and <a href="CSharp.php">C#</a> and, as was mentioned before, it is
          highly portable, so you can run it on any computer.
        </div>
        <h3 class="subtitle"><b>Average Salary</b></h3>
        <h3 class="subtitle">$95,787 (USA)</h3>
        <div align="center" class="para">
          Java developers can go into a number of different areas in programming and are usually expected to be part of the full cycle of a project.
          The highest paid Java developers are in San Francisco and Arlington (USA).
          [<a target="_blank" href="https://www.monster.com/career-advice/article/highest-paying-skills-java-developer-jobs">Source</a>]
        </div>
        <br>
        <div align="center">
          <a href="https://www.tutorialspoint.com/java/index.htm" target="_blank"><button>Get started with Java here!</button></a>
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
