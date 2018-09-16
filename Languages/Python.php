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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a id="breadcrumbs" href="all.php">Languages</a> > Python</h6>
    <h1 class="nametitle">Python</h1>
    <h3 class="subtitle"><img src='../img/language/Python.png' height='200' width='200'></img></h3>
    <h3 class="subtitle">A language designed to be simple to write in. Python can be used in almost every area of programming.</h3>
    <br>
    <div class="timeline">
      <div class="item">
        <h3 class="subtitle"><b>Overview</b></h3>
        <div align="left" class="para">
          Python is a general-purpose language that can be used in a huge number of different areas.  It was created by Guido Van Rossum, and was first
          released on 20th February 1991, with a philosophy that tried to make it's code as readable as possible.  Python also aims to try to model the same concepts
          as other languages in fewer lines of code.  One of the notable differences between Python and other languages is that blocks are created using
          whitespace (tabs or space characters) rather than being inside parenthesis or braces (() or {}).

          There have been 3 major versions of Python - Python (1991), Python 2.0 (2000) and Python 3.0 (2008) and it is constantly being kept
          up to date by the Python Software Foundation.

          Professionally, Python is used in areas such as web development, data analysis, artificial intelligence, and scientific computing. It is not limited to these areas however,
          and people have used Python to build games and desktop applications as well!  One of the great things about Python is that there are a huge number of resources out there
          to help you develop all sorts of software.
        </div>
        <h3 class="subtitle"><b>Beginner Friendliness</b></h3>
        <h3 class="subtitle"><img src='../img/rating8.png' height='200' width='400'></img></h3>
        <div align="center" class="para">
          We've given Python a rating of 8/10 for beginner friendliness. Python is a very beginner-friendly programming language.  As is mentioned above, it has simple to use syntax which is easy to
          pick up - especially if you already have some experience in programming.  However, if you have no prior knowledge of programming, we recommend you learn the basics through a block programmming
          language like <a href="Scratch.php">Scratch</a> or <a href="Thunkable.php">Thunkable</a> before diving into a language like this.
        </div>
        <h3 class="subtitle"><b>Average Salary</b></h3>
        <h3 class="subtitle">$109,810 (USA)</h3>
        <div align="center" class="para">
          Python is an up and coming language.  It has a bright future and can be applied to almost any area of programming.  By the looks of things,
          employers will pay big for Python developers.
          [<a target="_blank" href="https://www.daxx.com/article/python-developer-salary-usa">Source</a>]
        </div>
        <br>
        <div align="center">
          <a href="https://www.tutorialspoint.com/python/index.htm" target="_blank"><button>Try a Python Tutorial here!</button></a>
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
