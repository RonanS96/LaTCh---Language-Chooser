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
    <title>LaTCh - Admin</title>
  </head>
  <body>
    <?php
      session_start();
      // Keep non-admin users out
      if(!isset($_SESSION['admin_no'])){
        header("Location: login.php");
      }
    ?>
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a class="no-hover"><img src="../img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="../img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="home.php">LaTCh - Admin</a></li>
        <?php
            include "MACSorLH.php";

            if(!isset($_SESSION['admin_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='../User/logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="home.php">Admin Home</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="home.php">Admin Home</a>  > Fact of the Day</h6>
    <h1 class="nametitle">Facts</h1>
    <?php
      if(isset($_SESSION['signup'])){
          if($_SESSION['signup'] == 1){
            echo "<h3 style='color: green;' class='subtitle'>A new fact has just been added.</h3>";
            $_SESSION['signup'] = 0;
          }
          if($_SESSION['signup'] == 2){
            echo "<h3 style='color: green;' class='subtitle'>Fact deleted.</h3>";
            $_SESSION['signup'] = 0;
          }
          if($_SESSION['signup'] == 3){
            echo "<h3 style='color: green;' class='subtitle'>Fact has been updated.</h3>";
            $_SESSION['signup'] = 0;
          }
        }
    ?>
    <h3 class="subtitle">Today's fact of the day: </h3>
    <?php
         include "../noOfFacts.php";
         include "../MACSorLH.php";

         $first_date=strtotime("December 31");
         $current_date = time();
         $day = ceil(($first_date-$current_date)/60/60/24);

         $modulo_value = ($day%$no_of_facts) + 1;

         $sql2 = "SELECT id, fact FROM facts WHERE id=" . ($modulo_value);
         $result = $conn->query($sql2);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<h3 class='subtitle' style='border:3px; font-family:consolas; border-style:solid; border-color:#1E90FF; padding: 1em;'>" . $row["fact"] . "</h3><br>";
                  echo "<h4 class='subtitle'><a href='editFactForm.php?id=" . $row['id'] . "'>Edit</a>";
              }
          } else {
              echo "\nNo available fact for today...";
          }
    ?>
    <?php
      $sql = "SELECT * FROM facts";
      $result = $conn->query($sql);
     ?>

    <br>
    <h3 class="subtitle">All facts: </h3>
    <h3 class="subtitle">Add a new fact [<a href="newFactForm.php">+</a>]</h3>

    <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<div class='timeline'>
                    <div class='item'>
                      <h3 class='subtitle'>ID: " . $row['id'] . "</h3>
                      <h3 class='subtitle'>" . $row['fact'] . "</h3>
                      <h4 class='subtitle'>Source: " . $row['source'] . "</h4>
                      <h4 class='subtitle'><a href='editFactForm.php?id=" . $row['id'] . "'>Edit</a> | <a class='confirm' href='deleteFact.php?id=" . $row["id"] . "'>Delete</a></h4>
                      <h4 class='subtitle'>--</h4>
                    </div>
                  </div>";
            }
        } else {
            echo "\nNo facts available...";
        }
        $conn->close();
    ?>
    <br>
    <script>
      // Source: https://stackoverflow.com/questions/10462839/how-to-display-a-confirmation-dialog-when-clicking-an-a-link
      var elems = document.getElementsByClassName('confirm');
      var confirmIt = function (e) {
        if (!confirm('Are you sure you want to delete this fact?  You cannot undo this action.')) e.preventDefault();};
        for (var i = 0, l = elems.length; i < l; i++) {
          elems[i].addEventListener('click', confirmIt, false);
        }
    </script>
    <div class="footer">
      <ul class="footer">
        <li style="float: right"><a href="../about.php">About this site</a></li>
        <li style="float: right"><a href="../feedback.php">Give feedback</a></li>
        <li style="float: right"><a href="../support.php">Support</a></li>
      </ul>
    </div>
  </body>
</html>
