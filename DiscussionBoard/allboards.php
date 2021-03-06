<!-- DISCUSSION BOARD. All discussion threads are shown here. A logged in user can create, edit and delete their own threads. -->
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
    <link rel="stylesheet" type="text/css" href="../board.css">
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
        <li id="nav-dropdown" class="fright"><a href="allboards.php">Discussion Board</a></li>
        <li id="nav-dropdown" class="fright"><a href="../Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > Discussion Board</h6>
    <h1 class="nametitle">Discussion Board</h1>
    <h3 class="subtitle">Found out what everyone is talking about here.</h3>
    <?php
      if( isset($_SESSION['user_no']) )
      {
        echo "<h3 class='subtitle'>New thread [<a href='newThread.php'>+</a>]</h3>";
      }
      else
      {
        echo "<h3 class='subtitle'>You must be logged in to create a new thread. [<a href='../signup.php'>Create account</a>] [<a href='../login.php'>Login</a>]</h3>";
      }
    ?>
    <?php
    if(isset($_SESSION['signup'])){
        if($_SESSION['signup'] == 1){
          echo "<h3 style='color: green;' class='subtitle'>A new thread has just been created.</h3>";
          $_SESSION['signup'] = 0;
        }
        if($_SESSION['signup'] == 2){
          echo "<h3 style='color: red;' class='subtitle'>Thread deleted.</h3>";
          $_SESSION['signup'] = 0;
        }
      }
    ?>
    <br>
    <div class="timeline">
      <?php
         include "MACSorLH.php";

         $sql = "SELECT * FROM threads ORDER BY datePosted DESC";
         $result = $conn->query($sql);
         $counter = 1;

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                    echo "<div class='container'>
                      <div class='panel-group'>
                        <div class='panel panel-default'>
                          <div class='panel-heading'>
                            <h1 class='subtitle'>
                              <a data-toggle='collapse' href='#collapse" . $counter . "'>" . $row['title'] . "</a>
                            </h1>
                          </div>
                          <div id='collapse" . $counter . "' class='panel-collapse collapse'>
                            <div class='subtitle'>Asked by: <i>";
                            if($row['op'] == NULL){
                              echo "Anonymous";
                            }
                            else {
                              echo "USER" . $row['op'];
                            }
                            echo "</i>, " . $row['datePosted'] . "</div>";
                            echo "<div class='subtitle'>" . $row['content'] . "</div>" .
                            "<div align='center' class='para'>[<a href='thread.php?thread_no=" . $row['id'] . "'>View this Thread</a>]</div>
                          </div>
                        </div>
                      </div>
                    </div>";

                    $counter = $counter + 1;
              }
          } else {
              echo "<h3 class='subtitle'>No threads available...</h3>";
          }
          $conn->close();
    ?>
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
