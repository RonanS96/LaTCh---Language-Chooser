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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../mymain.css">
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
        <li id="nav-dropdown" class="fright"><a href="../Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a href="categories.php">Categories</a> > Data Science</h6>
    <h1 class="nametitle">Data Science</h1>
    <h3 class="subtitle">We have masses of data available to us in the 21st century, but it's not much use if we can't analyse it. That's where data science, and the following resources come in.</h3>
    <div class="timeline">
      <div class="timeline">
        <div class='container'>
          <div class='panel-group'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h1 class='subtitle'>
                  <a data-toggle='collapse' href='#collapse1'>MatLab</a>
                </h1>
              </div>
              <div id='collapse1' class='panel-collapse collapse'>
                <div class='para'>
                  <h3 class="subtitle"><img src='../img/language/MatLab.png' height='200' width='200'></img></h3>
                  <p>
                    MatLab is a data environment, used in many areas of mathematics, including data science.  MatLab can be used to create useful visualisations
                    of data for analysis.
                  </p>
                </div>
                <div class='para'>
                  [<a href="../Languages/MatLab.php">More info on MatLab</a>]
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class='container'>
            <div class='panel-group'>
              <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h1 class='subtitle'>
                    <a data-toggle='collapse' href='#collapse2'>Python</a>
                  </h1>
                </div>
                <div id='collapse2' class='panel-collapse collapse'>
                  <div class='para'>
                    <h3 class="subtitle"><img src='../img/language/Python.png' height='200' width='200'></img></h3>
                    <p>
                      One of the many areas Python is used in includes data science.  It's a popular language, with lots of online resources.
                    </p>
                  </div>
                  <div class='para'>
                    [<a href="../Languages/Python.php">More info on Python</a>]
                  </div>
                 </div>
                </div>
              </div>
            </div>
            <div class='container'>
              <div class='panel-group'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <h1 class='subtitle'>
                      <a data-toggle='collapse' href='#collapse3'>R</a>
                    </h1>
                  </div>
                  <div id='collapse3' class='panel-collapse collapse'>
                    <div class='para'>
                      <h3 class="subtitle"><img src='../img/language/R.png' height='200' width='200'></img></h3>
                      <p>
                        R was developed specifically for computer science.  It is a great language to use if you don't mind the steep learning curve that
                        comes with it!
                      </p>
                    </div>
                    <div class='para'>
                      [<a href="../Languages/R.php">More info on R</a>]
                    </div>
                   </div>
                  </div>
                </div>
              </div>
      </div>
      <div align='center' class='para'>*images are not my own</div>
    </div>

    <div class="clear"></div>

    <div class="footer">
      <ul class="footer">
        <li style="float: right"><a href="../about.php">About this site</a></li>
        <li style="float: right"><a href="../feedback.php">Give feedback</a></li>
        <li style="float: right"><a href="../support.php">Support</a></li>
      </ul>
    </div>
  </body>
</html>
