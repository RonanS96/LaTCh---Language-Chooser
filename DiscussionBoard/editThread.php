<!-- Form that allows a user to update their account details...
   - Must be private to a user. -->
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

      $thread_no = $_GET['thread_no'];
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
                echo "<li id='nav-dropdown' class='fright'><b><a href='login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="../DiscussionBoard/allboards.php">Discussion Board</a></li>
        <li id="nav-dropdown" class="fright"><a href="../Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <?php
       include "MACSorLH.php";

       $sql = "SELECT * FROM threads WHERE id = $thread_no";
       $result = $conn->query($sql);

  ?>
    <?php
      echo "<h6><a id='breadcrumbs' href='../index.php'>Home</a>  > <a id='breadcrumbs' href='allboards.php'>Discussion Board</a> > <a id='breadcrumbs' href='thread.php?thread_no=" . $thread_no . "'>Thread " . $thread_no . "</a> > Edit Thread</h6>";
    ?>
    <h1 class="nametitle">Edit your Thread</h1>
    <?php
      echo "<h3 class='subtitle'><a href='thread.php?thread_no=" . $thread_no . "'>< Back to thread </a></h3>";
    ?>
    <h3 class="subtitle">Updates won't show here until you log out and in again.</h3>
    <br>
    <!-- This form was copied and modified from https://www.w3schools.com/howto/howto_css_signup_form.asp [Last accessed 21/12/2017]. -->
    <?php
          echo "<form method='post' action='updateThread.php?thread_no=" . $thread_no . "'>
            <div class='container'>";

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<label><b>Title (your title or main question)</b></label>
                <input type='text' placeholder='" . $row['title'] . "' name='tit' >

                <label><b>Description (a more detailed description of your question)</b></label>
                <input type='text' placeholder='" . $row['content'] . "' name='cont' >";

                if(isset($_SESSION['user_no'])){
                  if(!($_SESSION['user_no'] == $row['op']))
                  {
                      header("Location: allboards.php");
                  }
                }
              }
          } else {
              echo "\nUnable to fetch thread...";
          }
          $conn->close();
        ?>
        <div class="clearfix">
          <button id="but" type="submit" class="signupbtn">Update</button>
        </div>
      </div>
    </form>
    <script>
        // Copied and modified from: https://codepen.io/diegoleme/pen/surIK [Last accessed 2nd February 2018]
        var password = document.getElementById("password"),
          confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }

        var but = document.getElementById("but")
        but.onClick = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
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
