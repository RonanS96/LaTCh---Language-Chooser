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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a href="categories.php">Categories</a> > Popularity</h6>
    <h1 class="nametitle">Popularity</h1>
    <h3 class="subtitle">The information on this page is from a Business insider article [<a href="#1">1</a>]</h3>
    <div class="timeline">
      <h3 class="subtitle">According to GitHub pull requests 2017 (top 5):</a></h3>
      <div class='container'>
        <div class='panel-group'>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              <h1 class='subtitle'>
                <a data-toggle='collapse' href='#collapse1'>1. JavaScript</a>
              </h1>
            </div>
            <div id='collapse1' class='panel-collapse collapse'>
              <div class='para'>
                <p>JavaScript was the most popular programming language on GitHub in 2017. Despite the similarity of their names and popularity, JavaScript doesn't actually have much to do with Java. JavaScript underlies much of the modern web, but it also catches a lot of flak for slowing browsers and sometimes exposing users to security vulnerabilities.</p>
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
                  <a data-toggle='collapse' href='#collapse2'>2. Python</a>
                </h1>
              </div>
              <div id='collapse2' class='panel-collapse collapse'>
                <div class='para'>
                  <p>Python dates back to 1989 and is loved by its fans for its highly readable code. Many programmers believe it's the easiest language to get started with.</p>
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
                    <a data-toggle='collapse' href='#collapse3'>3. Java</a>
                  </h1>
                </div>
                <div id='collapse3' class='panel-collapse collapse'>
                  <div class='para'>
                    <p>Java was originally invented by Sun Microsystems in 1991 as a programming language for interactive television systems. Since purchasing Sun, Oracle has turned Java into a powerhouse. The programming language is the most common way to build Android apps.</p>
                  </div>
                  <div class='para'>
                    [<a href="../Languages/Java.php">More info on Java</a>]
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
                      <a data-toggle='collapse' href='#collapse4'>4. Ruby</a>
                    </h1>
                  </div>
                  <div id='collapse4' class='panel-collapse collapse'>
                    <div class='para'>
                      <p>Ruby has won lots of acclaim for being easy to read and write. Also popular is Rails, an add-on framework for Ruby that makes it simple to build web apps. The language's official motto is "A programmer's best friend."</p>
                    </div>
                    <div class='para'>
                      [<a href="../Languages/Ruby.php">More info on Ruby</a>]
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
                        <a data-toggle='collapse' href='#collapse5'>5. PHP</a>
                      </h1>
                    </div>
                    <div id='collapse5' class='panel-collapse collapse'>
                      <div class='para'>
                        <p>Big web companies including Yahoo and Facebook use PHP as the code behind their flagship sites. Meanwhile, many programmers hate PHP with a passion.
                              "PHP isn't so much a language as a random collection of arbitrary stuff, a virtual explosion at the keyword and function factory," Stack Overflow founder Jeff Atwood once wrote.</p>
                      </div>
                      <div class='para'>
                        [<a href="../Languages/PHP.php">More info on PHP</a>]
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <h3 class="subtitle">The corresponding graph:</h3>
                  <h3 class="subtitle"><img src='../img/GitHubPopularity.jpg' height='100%' width='100%'></img></h3>
                </div>
    </div>
    <h3 class="subtitle">References:</h3>
    <div id="1" class="para">1. Matt Weinberger (2017) The 15 Most Popular Programming Languages according to “Facebook for Programmers” [<a target="_blank" href="http://uk.businessinsider.com/the-9-most-popular-programming-languages-according-to-the-facebook-for-programmers-2017-10">online</a>]</div>
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
