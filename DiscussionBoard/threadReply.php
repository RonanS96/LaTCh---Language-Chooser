<!-- REPLY TO AT THREAD. Here, a user can type and submit their reply to a thread. -->
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
    <?php
      session_start();
      if(!isset($_SESSION['user_no'])){
        header("Location: ../login.php");
      }
    ?>
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

      echo "<h6><a id='breadcrumbs' href='../index.php'>Home</a> > <a href='allboards.php'>Discussion Board</a> > <a href='thread.php?thread_no=" . $thread_no .
        "'>Thread " . $thread_no . "</a> > Reply</h6>";
    ?>
    <br>

    <?php
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

        echo "<h1 class='nametitle'>" . $thread_name . "</h1>";
        echo "<h3 class='subtitle'><a href='thread.php?thread_no=" . $thread_no . "'>< Back to thread </a></h3>";
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
                <div class='para'>
                  <p>" . $thread_description . "</p>
                </div>
               </div>
              </div>
            </div>
        </div>";

        echo "<h3 class='subtitle'>Your Reply:</h3>";
      }

      $conn->close();
    ?>

    <?php
      $user_id = $_SESSION['user_no'];
      echo "<form method='post' action='../PHP/newReply.php?thread_no=" . $thread_no . "'>"
    ?>
      <div class="container">
        <label><b>Reply</b></label>
        <textarea type="text" placeholder="Enter your reply" name="Comment" required></textarea>

        <button type="submit">Send</button>
      </div>
    </form>
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
