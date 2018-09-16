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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a href="categories.php">Categories</a> > Scenarios</h6>
    <h1 class="nametitle">Scenarios</h1>
    <h3 class="subtitle">This page describes some example scenarios of problems a programmer may be trying to solve and languages they could use based on the situation.</h3>
    <div class="timeline">
      <div class="timeline">
        <div class='container'>
          <div class='panel-group'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h1 class='subtitle'>
                  <a data-toggle='collapse'>Scenario 1</a>
                </h1>
              </div>
              <div class='panel-collapse'>
                <div class='para'>
                    John is an experienced programmer in his final year at university.  He has been asked by a local high school to
                    go in and teach 4th year students (ages 15-16) a new programming language over a time period of 3 to 4 weeks.
                    The class are fairly new to programming but they have learned the basics through the visual block programming
                    language Scratch.  They have also created some small websites with static HTML.  It is now up to John to choose
                    a suitable language for the 4th years that is simple to learn, but also interesting and relevant to the real
                    world.
                  </p>
                </div>
                <div class="subtitle" width="80%">
                  <div class='container'>
                    <div class='panel-group'>
                      <div class='inner-container'>
                        <div class=''>
                          <h3 class='subtitle'>
                            <a data-toggle='collapse' href='#collapse1'>Reveal Answer</a>
                          </h3>
                        </div>
                        <div id='collapse1' class='panel-collapse collapse'>
                          <div class='para'>
                            <h3 class="subtitle"><img src='../img/language/Thunkable.png' height='200' width='200'></img></h3>
                            <h3 class="subtitle">Thunkable!</h3>
                            <p>
                              If you think the class are very new to programming, we would suggest using Thunkable.  It is an online tool where you can use block programming to create Android
                              and iOS mobile apps.  It is extremely beginner friendly, and easy to access using an internet browser.
                            </p>
                            <h3 class="subtitle">or... </h3>
                            <h3 class="subtitle"><img src='../img/language/Python.png' height='200' width='200'></img></h3>
                            <h3 class="subtitle">Python!</h3>
                            <p>
                              Python has been designed to be easy to use.  It is great for beginners, and is relevant to real world software
                              development where it is being used more and more often.  If you feel the class are ready for something a bit more
                              challenging than block programming, this is a great place to start.
                            </p>
                            <p>
                              Alternatives: <a href="../Languages/MITAPPInventor.php">MIT App Inventor</a>, <a href="../Languages/VisualBasic.php">Visual Basic</a>, <a href="../Languages/Java.php">Java</a>, <a href="../Languages/CSharp.php">C#</a>
                            </p>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End of container -->
          <div class='container'>
            <div class='panel-group'>
              <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h1 class='subtitle'>
                    <a data-toggle='collapse'>Scenario 2</a>
                  </h1>
                </div>
                <div class='panel-collapse'>
                  <div class='para'>
                    <p>
                      Sally has just started working for a company that develops mobile apps for all the main platforms (Windows, iOS and Android).
                      The boss has asked her to take the lead on building a new app that can be used to track a user's fitness (counting steps, recording
                      what they eat, etc.).  Sally's first task is to choose the language the app will be built in.  The plan is for the company to have it
                      built for one platform, and then ported to different platforms later if it is successful.
                    </p>
                  </div>
                  <div class="subtitle" width="80%">
                    <div class='container'>
                      <div class='panel-group'>
                        <div class='inner-container'>
                          <div class=''>
                            <h3 class='subtitle'>
                              <a data-toggle='collapse' href='#collapse2'>Reveal Answer</a>
                            </h3>
                          </div>
                          <div id='collapse2' class='panel-collapse collapse'>
                            <div class='para'>
                              <h3 class="subtitle"><img src='../img/language/Java.png' height='200' width='200'></img></h3>
                              <h3 class="subtitle">Java!</h3>
                              <p>
                                Java is the main language used to create Android apps, and Android has most of the market share globally.  Java is also
                                the most portable of the options here, and this means it could be run on different platforms, or (fairly) easily converted
                                between platforms.  It would make sense to first make the app available on Android, then to push it onto iOS and Windows
                                platforms if it is successful.  Java is widely used for mobile app development and this means it has lots of documentation
                                and libraries online to aid with development.
                              </p>
                              <p>
                                Alternatives: <a href="../Languages/Swift.php">Swift</a>, <a href="../Languages/CSharp.php">C#</a>, <a href="../Languages/Thunkable.php">Thunkable</a>, <a href="../Languages/MITAppInventor.php">MIT App Inventor</a>
                              </p>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End of container -->
            <div class='container'>
              <div class='panel-group'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <h1 class='subtitle'>
                      <a data-toggle='collapse'>Scenario 3</a>
                    </h1>
                  </div>
                  <div class='panel-collapse'>
                    <div class='para'>
                      <p>
                        Yousef works in a small, local cafe in his hometown.  His manager has asked him to create a website to advertise their business
                        and hopefully gain more custom from it.  Only a small amount of detail was given about what should be on the website, for example
                        pictures of the food and drinks, a menu and an about us page.  The manager would also like to be able to make updates to the website
                        through a user interface and without the need to know any programming.  Yousef happily accepts this offer, but wants to get the job
                        done fairly quickly as he is doing it in his spare time, but what language(s) should he use?
                      </p>
                    </div>
                    <div class="subtitle" width="80%">
                      <div class='container'>
                        <div class='panel-group'>
                          <div class='inner-container'>
                            <div class=''>
                              <h3 class='subtitle'>
                                <a data-toggle='collapse' href='#collapse3'>Reveal Answer</a>
                              </h3>
                            </div>
                            <div id='collapse3' class='panel-collapse collapse'>
                              <div class='para'>
                                <h3 class="subtitle"><img src='../img/language/CakePHP.png' height='200' width='200'></img></h3>
                                <h3 class="subtitle">CakePHP!</h3>
                                <p>
                                  In this context, we recommend using a framework, like CakePHP.  Frameworks are generally used to build web applications rapidly,
                                  and they allow you to easily connect to a database, which would be useful to allow the cafe manager to dynamically update the website.
                                  Using plain HTML, CSS and PHP, for example is also an option but this would be much slower, and not suitable for Yousef in this situation.
                                </p>
                                <p>
                                  Alternatives: <a href="../Languages/RubyonRails.php">Ruby on Rails</a>, <a href="../Languages/HTML.php">HTML</a>, <a href="../Languages/CSS.php">CSS</a>, <a href="../Languages/PHP.php">PHP</a>, <a href="../Languages/JavaScript.php">JavaScript</a>
                                </p>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- End of container -->
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
