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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a href="categories.php">Categories</a> > Databases</h6>
    <h1 class="nametitle">Database Management Systems</h1>
    <h3 class="subtitle">Databases can be written in a number of styles, and are usually manipulated and built using database management systems.  The most popular versions are relational and NoSQL.</a></h3>
    <div class="timeline">
      <div class="timeline">
        <div class='container'>
          <div class='panel-group'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h1 class='subtitle'>
                  <a data-toggle='collapse' href='#collapse1'>MySQL (relational)</a>
                </h1>
              </div>
              <div id='collapse1' class='panel-collapse collapse'>
                <div class='para'>
                  <h3 class="subtitle"><img src='../img/language/SQL.png' height='200' width='350'></img></h3>
                  <p>
                    MySQL was one of the first major database management systems, with the underlying language being SQL (Structured Query Language), and
                    it has been hugely popular since it's creation.  However, in more recent times, a number of competitors have arrived to MySQL's relational
                    approach.  MySQL allows for ACID transaction management which is very useful, but it is not scalable like its competitors.
                  </p>
                </div>
                <div class='para'>
                  [<a href="../Languages/SQL.php">More info on SQL</a>]
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
                    <a data-toggle='collapse' href='#collapse2'>MongoDB (NoSQL - document store)</a>
                  </h1>
                </div>
                <div id='collapse2' class='panel-collapse collapse'>
                  <div class='para'>
                    <h3 class="subtitle"><img src='../img/language/MongoDB.png' height='200' width='400'></img></h3>
                    <p>
                      MongoDB is one of many competitors to MySQL that has arisen over the years.  It is a document-store approach
                      that aims to be scalable.  It sacrificies consistency, with lots of repeated data, to allow for this huge scalability.
                      You can store virtually as many documents in MongoDB as you like, as long as you have enough memory, but you can't
                      always guarantee values for attributes are the same all the way through the data.
                    </p>
                  </div>
                  <div class='para'>
                    [<a href="../Languages/MongoDB.php">More info on MongoDB</a>]
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
                      <a data-toggle='collapse' href='#collapse3'>Neo4j (NoSQL - graph)</a>
                    </h1>
                  </div>
                  <div id='collapse3' class='panel-collapse collapse'>
                    <div class='para'>
                      <h3 class="subtitle"><img src='../img/language/Neo4j.png' height='200' width='350'></img></h3>
                      <p>
                        Neo4j is a graph database management system that stores data as nodes with relationships.
                        It is ACID compliant and is also the most popular of the graph database management systems.
                      </p>
                    </div>
                    <div class='para'>
                      [<a href="../Languages/Neo4j.php">More info on Neo4j</a>]
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
