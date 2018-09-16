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
      $fact_no = $_GET['id'];
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
    <h6><a id="breadcrumbs" href="home.php">Admin Home</a> > <a id="breadcrumbs" href="facts.php">Facts</a> > Edit Fact</h6>
    <h1 class="nametitle">Edit Fact</h1>
    <h3 class="subtitle"><a href="facts.php"> < Back to Facts </a></h3>
    <br>
    <!-- This form was copied and modified from https://www.w3schools.com/howto/howto_css_signup_form.asp [Last accessed 21/12/2017]. -->
    <?php
        echo "<form method='post' action='editFact.php?id=" . $fact_no . "'>";
    ?>
      <div class="container">
        <?php
          $sql = "SELECT * FROM facts WHERE id = $fact_no";
          $result = $conn->query($sql);
        ?>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<label><b>Fact (Please include quotes)</b></label>
              <input type='text' placeholder='" . $row['fact'] . "' name='fct'>

              <label><b>Source URL</b></label>
              <input type='text' placeholder='" . $row['source'] . "' name='src'>";
            }
          } else {
              echo "\nNo facts available...";
          }
          $conn->close();
        ?>
        <div class="clearfix">
          <button id="but" type="submit" class="signupbtn">Update</button>
        </div>
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
