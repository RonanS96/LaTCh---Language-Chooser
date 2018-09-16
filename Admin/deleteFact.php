<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $fact_id  = $_GET['id'];

  include "MACSorLH.php";

  $sql = $conn->prepare("DELETE FROM facts WHERE id = ?");
  $sql->bind_param("i", $fact_id);
  $sql->execute();

  //echo "The fact with ID, '" . $fact_id . "', has now been deleted. <br>";
  //echo "<a href='facts.php'>Return to facts</a>";

  $_SESSION['signup'] = 2;

  header("Location: facts.php");

  $sql->close();
  mysqli_close($conn);
?>
