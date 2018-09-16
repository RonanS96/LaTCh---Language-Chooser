<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $name          = $_POST['nme'];
  $description   = $_POST['des'];
  $year          = $_POST['year'];
  $paradigm      = $_POST['par'];
  $HoL           = $_POST['hol'];

  include "MACSorLH.php";

  $name = str_replace(array('<', '>'), '', $name);
  $description = str_replace(array('<', '>'), '', $description);
  $year = str_replace(array('<', '>'), '', $year);
  $paradigm = str_replace(array('<', '>'), '', $paradigm);
  $HoL = str_replace(array('<', '>'), '', $HoL);

  $sql = $conn->prepare("INSERT INTO language (lName, description, year, mainParadigm, highOrLow) VALUES (?, ?, ?, ?, ?)");
  $sql->bind_param("ssiss", $name, $description, $year, $paradigm, $HoL);
  $sql->execute();

  //echo "The new language, '" . $name . "', has now been created! <br>";
  //echo "<a href='languages.php'>Return to languages</a>";

  $_SESSION['signup'] = 1;
  header("Location: languages.php");

  $sql->close();
  mysqli_close($conn);
?>
