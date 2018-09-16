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
      <!-- Latest compiled and minified ScratchScript -->
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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > Scratch</h6>
    <h1 class="nametitle">Scratch</h1>
    <h3 class="subtitle"><img src='../img/language/Scratch.png' height='200' width='200'></img></h3>
    <h3 class="subtitle">This allows you to write programs using coloured blocks. In Scratch you can quickly create lots of simple programs where you control a character on the screen called a Sprite.</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          Scratch is a visual programming language that allows you to create small programs using coloured blocks.  These programs involve moving around an object or a group of objects,
          allowing you to create interactive stories, games and animations very quickly and easily.  The first prototype was released in 2002, and it has been aimed mostly at children ever since.
          Scratch is popular in schools as it can teach you the basics of programming without having to write any source code.  As of late 2017, Scratch has more than 22 million registered
          users, and over 26 million shared projects.
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating10.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          Scratch has been designed for children ages 8 and over - beginners in programming.  It is simple and easy to use but can also be used to create
          fairly complex animations and programs, meaning it is a great place to start of your programming career.
        </div>
        <br>
        <div align="center">
          <a href="https://scratch.mit.edu/" target="_blank"><button type="submit">Get started with Scratch here!</button></a>
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
