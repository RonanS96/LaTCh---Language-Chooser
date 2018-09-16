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
    <h6><a id="breadcrumbs" href="../index.php">Home</a> > <a href="categories.php">Categories</a> > Levels</h6>
    <div class="timeline">
      <?php
         $sql = "SELECT * FROM language WHERE highOrLow = 'High-Level' ORDER BY lName";
         $sql2 = "SELECT * FROM language WHERE highOrLow = 'Low-Level' ORDER BY lName";
         $result = $conn->query($sql);
         echo "<h1 class='nametitle'>High or Low-Level Languages</h1><br>";
         echo "<h3 class='subtitle'>All software is really just binary machine code - a list of 1s and 0s.  Programming languages abstract
                over machine code.  Languages closer to machine code are known as 'low-level', and the further you get from machine code,
                the higher level the language is.</h3>";

         echo "<div class='container'>
           <div class='panel-group'>
             <div class='panel panel-default'>
               <div class='panel-heading'>
                 <h1 class='subtitle'>
                   <a data-toggle='collapse' href='#collapse1'>High-Level Languages</a>
                 </h1>
               </div>
               <div id='collapse1' class='panel-collapse collapse'>";
         if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 $temp_name = $row["lName"];
                 $temp_name = str_replace(array('#'), 'Sharp', $temp_name);
                 if($row["lName"] == NULL){
                   echo "";
                 }else{
                     echo "";
                 }
                  echo "<div class='subtitle'>
                         <div class='subtitle'><h1>" .
                           $row['lName']
                         . "</h1></div>
                           <img src='../img/language/" . $temp_name . ".png' height='200' width='200'></img>";
                           $temp_name = str_replace(array(' '), '', $temp_name);
                           $temp_name = str_replace(array('+'), 'Plus', $temp_name);
                         echo "</div>
                         <div class='subtitle'>" .
                           $row['description']
                         . "</div>
                         <div class='subtitle'>
                           Main Paradgm: " . $row['mainParadigm']
                         . "</div>
                         <div align='center' class='para'>[<a href='../Languages/" . $temp_name . ".php'>Find out more...</a>]</div>
                         <div align='center' class='para'>--</div>";
             }
         } else {
             echo "\nNo languages available";
         }

         echo "</div></div></div></div>";

         $result2 = $conn->query($sql2);

         echo "<div class='container'>
           <div class='panel-group'>
             <div class='panel panel-default'>
               <div class='panel-heading'>
                 <h1 class='subtitle'>
                   <a data-toggle='collapse' href='#collapse2'>Low-Level Languages</a>
                 </h1>
               </div>
               <div id='collapse2' class='panel-collapse collapse'>";
               if ($result2->num_rows > 0) {
                   // output data of each row
                   while($row = $result2->fetch_assoc()) {
                       $temp_name = $row["lName"];
                       $temp_name = str_replace(array('#'), 'Sharp', $temp_name);
                       if($row["lName"] == NULL){
                         echo "";
                       }else{
                           echo "";
                       }
                        echo "<div class='subtitle'>
                               <div class='subtitle'><h1>" .
                                 $row['lName']
                               . "</h1></div>
                                 <img src='../img/language/" . $temp_name . ".png' height='200' width='200'></img>";
                                 $temp_name = str_replace(array(' '), '', $temp_name);
                                 $temp_name = str_replace(array('+'), 'Plus', $temp_name);
                               echo "</div>
                               <div class='subtitle'>" .
                                 $row['description']
                               . "</div>
                               <div class='subtitle'>
                                 Main Paradgm: " . $row['mainParadigm']
                               . "</div>
                               <div align='center' class='para'>[<a href='../Languages/" . $temp_name . ".php'>Find out more...</a>]</div>
                               <div align='center' class='para'>--</div>";
                   }
               } else {
                   echo "\nNo languages available";
               }

               echo "</div></div></div></div>";
               $conn->close();
    ?>
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
