<!-- INDEX/HOMEPAGE.
   - As well as displaying a 'fact of the day' to users it also provides
   - links to all the main areas of the website.
   - Author: Ronan Smith
  -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap links -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End of Bootstrap links -->
    <!-- My own stylesheet for the general structure and style of the website. -->
    <link rel="stylesheet" type="text/css" href="mymain.css">
    <link rel="stylesheet" type="text/css" href="fact.css">
    <title>LaTCh</title>
    <!-- Possible background. Not currently used. -->
    <!-- <style>
      body {
          background-image: url("img/languages.png");
          background-color: #cccccc;
          background-repeat: no-repeat;
          background-size: cover;
          width: 100%;
      }
    </style> -->
  </head>
  <body>
    <?php session_start(); ?>
    <!-- The top navigation bar, which is consistent across the website. -->
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a class="no-hover"><img src="img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="index.php"><b>LaTCh</b></a></li>
        <?php
            include "MACSorLH.php";

            // Is the user logged in?
            if(!isset($_SESSION['user_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='User/logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='User/edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><b><a href="DiscussionBoard/allboards.php">Discussion Board</a></b></li>
        <li id="nav-dropdown" class="fright"><b><a href="Languages/all.php">Languages</a></b></li>
      </ul>
    </div>
    <br>
    <br>
    <?php
      if(isset($_SESSION['user_no']))
      {
          echo "<h6>Logged in as " . $_SESSION['first_name'] . " " . $_SESSION['second_name'] . "</h6>";
      }
    ?>
    <h1 class="subtitle"><img padding-top: "0" class="logo" src="img/LaTCh.png"></img></h1>

    <!-- The 'demo' div is where the fact of the day is sent to for display. -->
    <h3 class="subtitle" id="demo" style="border:3px; font-family:consolas; border-style:solid; border-color:#1E90FF; padding: 1em;"></h3>
    <h3 class="subtitle">Three ways to choose:</h3>
    <!-- Hidden div to provide JavaScript with fact of the day -->
    <div id="dom-target" style="display: none;">
        <?php
           /** This script reads in a 'fact of the day' from the underlying database. */
           include "noOfFacts.php";

           // How many days between December 31st and today.
           $first_date=strtotime("December 31");
           $current_date = time();
           $day = ceil(($first_date-$current_date)/60/60/24);

           // Modulo the current day by the number of facts to make sure the fact ID exists in the database.
           // Add 1 to miss out day 0.
           $modulo_value = ($day%$no_of_facts) + 1;

           $sql = "SELECT id, fact FROM facts WHERE id=" . ($modulo_value);
           $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $fact = $row["fact"];
                }
            } else {
                echo "\nNo available fact for today...";
            }
            $conn->close();

            echo htmlspecialchars($fact); /* Make sure the output from $fact is valid HTML. */
        ?>
    </div>

    <script>
      /** This script displays the 'fact of the day' as if it is being typed, character by character. */
      /** Get variable from PHP into JavaScript.
          Found at https://stackoverflow.com/questions/23740548/how-to-pass-variables-and-data-from-php-to-javascript */
      var div = document.getElementById("dom-target");
      var myData = div.textContent;

      /** Fact of the day, displayed as if it is being typed */
      /** Copied and modified from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_typewriter [Last Accessed 19th December 2017]. */
      var i     = 0;
      var speed = 50;
      var fact = "Fact of the day: " + myData;

      // Send each character of the fact of the day to the 'demo' div, one by one.
      function typeWriter() {
        if (i < fact.length) {
            document.getElementById("demo").innerHTML += fact.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
          }
      }
      typeWriter();
    </script>
    <br>
    <br>
    <div align="center">
        <div class="button"><button title="Find a language suitable for your needs in just three questions or less!" onclick="window.location.href='Questionnaire/questionnaire.php'">Questionnaire</button></div>
        <div class="button"><button title="Find languages based on the categories they belong to.  This section aims to break down the exploration of languages to make it easier." onclick="window.location.href='Categories/categories.php'">Categories</button></div>
        <div class="button"><button title="Discuss programming languages and computing in general with the friendly LaTCh community.  This is great for programming questions that don't have a simple yes/no answer." onclick="window.location.href='DiscussionBoard/allboards.php'">Discussion Board</button></div>
    </div>
    <br>
    <br>

    <!-- The footer which sits at the very bottom of each page. This should also be consistent across the website. -->
    <div class="footer">
      <ul>
        <li style="float: right"><b><a href="about.php">About this site</a></b></li>
        <li style="float: right"><b><a href="feedback.php">Give feedback</a></b></li>
        <li style="float: right"><b><a href="support.php">Support</a></b></li>
      </ul>
    </div>
  </body>
</html>
