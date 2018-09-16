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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a href="categories.php">Categories</a> > Frameworks</h6>
    <h1 class="nametitle">Frameworks</h1>
    <h3 class="subtitle">There are lots of frameworks out there that help you build large programs quickly using skeleton code.</h3>
    <div class="timeline">
      <div class="timeline">
        <div class='container'>
          <div class='panel-group'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h1 class='subtitle'>
                  <a data-toggle='collapse' href='#collapse1'>CakePHP</a>
                </h1>
              </div>
              <div id='collapse1' class='panel-collapse collapse'>
                <div class='para'>
                  <h3 class="subtitle"><img src='../img/language/CakePHP.png' height='200' width='200'></img></h3>
                  <p>
                    As the name suggests, CakePHP is a framework written in PHP.  It is a 'rapid development framework' that makes use of the
                    'Model-View-Controller' (MVC) approach and can be used to create dynamic websites very quickly, aiding with Agile development.
                  </p>
                </div>
                <div class='para'>
                  [<a href="../Languages/CakePHP.php">More info on CakePHP</a>]
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
                    <a data-toggle='collapse' href='#collapse2'>Flask</a>
                  </h1>
                </div>
                <div id='collapse2' class='panel-collapse collapse'>
                  <div class='para'>
                    <h3 class="subtitle"><img src='../img/language/Flask.png' height='200' width='200'></img></h3>
                    <p>
                      Flask is a Python micro-framework used for web development.  It has been designed to be small and simple to use,
                      with only a limited number of features.  Despite the small number of features, it is compatible with third party
                      libraries, so it can actually be used in a variety of different ways.
                    </p>
                  </div>
                  <div class='para'>
                    [<a href="../Languages/Flask.php">More info on Flask</a>]
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
                      <a data-toggle='collapse' href='#collapse3'>Ruby On Rails</a>
                    </h1>
                  </div>
                  <div id='collapse3' class='panel-collapse collapse'>
                    <div class='para'>
                      <h3 class="subtitle"><img src='../img/language/RubyonRails.png' height='200' width='300'></img></h3>
                      <p>
                        A server-side web application framework written in Ruby under the MIT License.  Rails is a Model-View-Controller (MVC)
                        framework and it provides default pages for a database, a web service, and web pages.  This framework has been designed to
                        allow for rapid development of web applications.
                      </p>
                    </div>
                    <div class='para'>
                      [<a href="../Languages/RubyOnRails.php">More info on Ruby On Rails</a>]
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
