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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a href="categories.php">Categories</a> > Web Development</h6>
    <h1 class="nametitle">Web Development</h1>
    <h3 class="subtitle">Languages used to create websites! For web development frameworks, see <a href="Frameworks.php">Frameworks</a>.</h3>
    <div class="timeline">
      <div class="timeline">
        <div class='container'>
          <div class='panel-group'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h1 class='subtitle'>
                  <a data-toggle='collapse' href='#collapse1'>HTML</a>
                </h1>
              </div>
              <div id='collapse1' class='panel-collapse collapse'>
                <div class='para'>
                  <h3 class="subtitle"><img src='../img/language/HTML.png' height='200' width='200'></img></h3>
                  <p>
                    HTML is the main language for controlling <b>structure</b> on webpages.  It is a markup language that provides
                    'tags' for a wide range of things.  For example, this text is being written using the paragraph tag '< p >'.  HTML is
                    constantly being maintained and updated, with the latest version being HTML5.
                  </p>
                </div>
                <div class='para'>
                  [<a href="../Languages/HTML.php">More info on HTML</a>]
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
                    <a data-toggle='collapse' href='#collapse2'>CSS</a>
                  </h1>
                </div>
                <div id='collapse2' class='panel-collapse collapse'>
                  <div class='para'>
                    <h3 class="subtitle"><img src='../img/language/CSS.png' height='200' width='200'></img></h3>
                    <p>
                      CSS is used to control the style <b>style</b> of your web pages.  This may include the way text or the user interface looks,
                      colour schemes, borders, or more.  Style was originally controlled completely in HTML, but CSS gives a much more efficient
                      option as style can be defined in one CSS document, rather than every HTML document on a website.  CSS is also very helpful with
                      responsive web design, a factor that is becoming increasingly important in web development.
                    </p>
                  </div>
                  <div class='para'>
                    [<a href="../Languages/CSS.php">More info on CSS</a>]
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
                      <a data-toggle='collapse' href='#collapse3'>JavaScript</a>
                    </h1>
                  </div>
                  <div id='collapse3' class='panel-collapse collapse'>
                    <div class='para'>
                      <h3 class="subtitle"><img src='../img/language/JavaScript.png' height='200' width='200'></img></h3>
                      <p>
                        JavaScript is a language used to make websites more <b>interactive</b>, allowing for the creation of online
                        programs through client-side scripting.
                      </p>
                    </div>
                    <div class='para'>
                      [<a href="../Languages/JavaScript.php">More info on JavaScript</a>]
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
                        <a data-toggle='collapse' href='#collapse4'>PHP</a>
                      </h1>
                    </div>
                    <div id='collapse4' class='panel-collapse collapse'>
                      <div class='para'>
                        <h3 class="subtitle"><img src='../img/language/PHP.png' height='200' width='200'></img></h3>
                        <p>
                          PHP is the most common language for server-side scripting (interacting with a database).  It has been around
                          for a while and has lots of libraries for important web development tasks.  It can be run seperate from HTML or embedded
                          in HTML files.
                        </p>
                      </div>
                      <div class='para'>
                        [<a href="../Languages/PHP.php">More info on PHP</a>]
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
                          <a data-toggle='collapse' href='#collapse5'>Python</a>
                        </h1>
                      </div>
                      <div id='collapse5' class='panel-collapse collapse'>
                        <div class='para'>
                          <h3 class="subtitle"><img src='../img/language/Python.png' height='200' width='200'></img></h3>
                          <p>
                            One of Python's many abilities is web developement.  It can be used for client-side and server-side scripting.
                            Like PHP, Python is a popular, well-documented language.
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
                            <a data-toggle='collapse' href='#collapse6'>Java</a>
                          </h1>
                        </div>
                        <div id='collapse6' class='panel-collapse collapse'>
                          <div class='para'>
                            <h3 class="subtitle"><img src='../img/language/Java.png' height='200' width='200'></img></h3>
                            <p>
                              Java is mostly used at the back-end of websites for server-side scripting.  It can also be run at the front end, allowing
                              for the creation of complex and interactive web applications.
                            </p>
                          </div>
                          <div class='para'>
                            [<a href="../Languages/Java.php">More info on Java</a>]
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
