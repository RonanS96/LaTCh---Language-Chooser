<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $fact_id  = $_GET['id'];
  $fact     = $_POST['fct'];
  $source   = $_POST['src'];

  include "../noOfFacts.php";
  include "MACSorLH.php";

  $fact = str_replace(array('<', '>'), '', $fact);
  $source = str_replace(array('<', '>'), '', $source);

  if($source == NULL){
    $sql = $conn->prepare("UPDATE facts SET fact = ? WHERE id = ?;");
    $sql->bind_param("si", $fact, $fact_id);
    $sql->execute();
  }
  else if($fact == NULL){
    $sql = $conn->prepare("UPDATE facts SET source = ? WHERE id = ?;");
    $sql->bind_param("si", $source, $fact_id);
    $sql->execute();
  }
  else
  {
    $sql = $conn->prepare("UPDATE facts SET fact = ?, source = ? WHERE id = ?;");
    $sql->bind_param("ssi", $fact, $source, $fact_id);
    $sql->execute();
  }

  //echo "The fact and/or source has been edited: " . $fact . "" . $source . "<br>";
  //echo "<a href='facts.php'>Return to facts</a>";

  $_SESSION['signup'] = 3;
  header("Location: facts.php");

  $sql->close();
  mysqli_close($conn);
?>
