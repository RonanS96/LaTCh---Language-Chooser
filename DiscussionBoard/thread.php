<!-- An individual discussion thread.  Uses PHP $_GET to know what thread to display. -->
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
    <?php
      $thread_no = $_GET['thread_no'];

      include "MACSorLH.php";

      $sql = "SELECT * FROM threads WHERE id='$thread_no'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // READ VARIABLES FROM THE QUERY OR FROM A POST METHOD
        $thread_name = $row['title'];
        $thread_op   = $row['op'];
        $thread_date = $row['datePosted'];
        $thread_time = $row['timePosted'];
        $thread_description = $row['content'];

        echo "<h6><a id='breadcrumbs' href='../index.php'>Home</a> > <a href='allboards.php'>Discussion Board</a> > Thread " . $thread_no . "</h6>";
        echo "<h1 class='nametitle'>" . $thread_name . "</h1>";

        if(isset($_SESSION['signup'])){
            if($_SESSION['signup'] == 1){
              echo "<h3 style='color: green;' class='subtitle'>This thread has been edited.</h3>";
              $_SESSION['signup'] = 0;
            }
            if($_SESSION['signup'] == 2){
              echo "<h3 style='color: green;' class='subtitle'>Your reply has been sent.</h3>";
              $_SESSION['signup'] = 0;
            }
          }

        echo "<h3 class='subtitle'><a href='allboards.php'> < Back to Discussion Board</a></h3>";

        echo "<br>" . "<div class='timeline'>";
        echo "<br>";

        echo "<div class='container'>
        <div class='panel-group'>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              <h3 class='subtitle'>
                Posted by: <i>";
                if($thread_op == NULL){
                  echo "Anonymous</i>";
                }
                else {
                  echo "USER" . $thread_op . "</i>";
                }
                echo " on " . $thread_date . " at " . $thread_time .
              "</h3>
            </div>
            <div id='collapse2' class='panel-collapse'>
              <div class='para'>";
              if(isset($_SESSION['user_no']))
              {
                  if($_SESSION['user_no'] == $thread_op)
                  {
                    echo "<h3 class='subtitle'><a href='editThread.php?thread_no=" . $thread_no . "'>Edit</a> | <a class='confirm' href='deleteThread.php?thread_no=" . $thread_no . "'>Delete</a></h3>";
                  }
              }
              echo "<p>". $thread_description . "</p>
              </div>
             </div>
            </div>
          </div>
        </div>";

      }
      else
      {
        // Let the user know if they have typed a URL that no lonfer corresponds to a thread.
        echo "<h1 class='nametitle'>This thread does not exist. It may have been deleted.</h1>";
      }

      //Fetch thread replies...
      $sql2 = "SELECT * FROM replies WHERE thread=$thread_no";
      $result2 = $conn->query($sql2);

      echo "<div class='container'>
        <div class='panel-group'>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              <h3 class='subtitle'>
                Replies:
              </h3>
            </div>
            <div id='collapse2' class='panel-collapse'>";
            if(isset($_SESSION['user_no']))
            {
              echo "<h3 class='subtitle'>Reply to this thread [<a href='threadReply.php?thread_no=" . $thread_no . "'>+</a>]</h3>";
            }
            else
            {
              echo "<h3 class='subtitle'>You must be logged in to reply to this thread. [<a href='../signup.php'>Create account</a>] [<a href='../login.php'>Login</a>]</h3>";
            }

      if ($result2->num_rows > 0) {
                // output data of each row
                while($row = $result2->fetch_assoc()) {
                  echo "<div class='timeline'>";
                  echo "<h3 class='subtitle'>Reply from: <i>";
                  if($row['user'] == NULL){
                    echo "Anonymous</i></h3>";
                  }
                  else {
                    echo "USER" . $row['user'] . "</i></h3>";
                  }
                    echo "<div align='center' class='para'>" . $row['content'] . "</div>";
                  echo "</div>" . "<br>" . "<br>";
                }
            }

        echo    "</div>
          </div>
        </div>";

      $conn->close();
      ?>
      <script>
        // Source: https://stackoverflow.com/questions/10462839/how-to-display-a-confirmation-dialog-when-clicking-an-a-link
        var elems = document.getElementsByClassName('confirm');
        var confirmIt = function (e) {
          if (!confirm('Are you sure you want to delete this thread?  You cannot undo this action.')) e.preventDefault();};
          for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
          }
      </script>
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
