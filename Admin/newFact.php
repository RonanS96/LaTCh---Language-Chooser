<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $fact     = $_POST['fct'];
  $source   = $_POST['src'];

  include "../noOfFacts.php";
  include "MACSorLH.php";

  $fact = str_replace(array('<', '>'), '', $fact);
  $source = str_replace(array('<', '>'), '', $source);

  $sql = $conn->prepare("INSERT INTO facts (fact, source) VALUES (?, ?)");
  $sql->bind_param("ss", $fact, $source);
  $sql->execute();

  $no_of_facts = $no_of_facts + 1;

  //echo "The new fact, '" . $fact . "', has now been created! <br>";
  //echo "<a href='facts.php'>Return to facts</a>";

  $_SESSION['signup'] = 1;
  header("Location: facts.php");

  $sql->close();
  mysqli_close($conn);
?>
