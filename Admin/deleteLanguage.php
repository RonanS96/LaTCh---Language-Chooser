<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $lang_id  = $_GET['id'];

  include "MACSorLH.php";

  $sql = $conn->prepare("DELETE FROM language WHERE id = ?");
  $sql->bind_param("i", $lang_id);
  $sql->execute();

  //echo "The language with ID, '" . $lang_id . "', has now been deleted. <br>";
  //echo "<a href='languages.php'>Return to languages</a>";

  $_SESSION['signup'] = 2;

  header("Location: languages.php");

  $sql->close();
  mysqli_close($conn);
?>
