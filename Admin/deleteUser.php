<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $user_id  = $_GET['id'];
  $active = 'N';

  include "MACSorLH.php";

  $sql = $conn->prepare("UPDATE users SET active = ? WHERE id = ?");
  $sql->bind_param("si", $active, $user_id);
  $sql->execute();

  //echo "The user with ID, '" . $user_id . "', has now been deactivated. <br>";
  //echo "<a href='users.php'>Return to users</a>";

  $_SESSION['signup'] = 5;

  header("Location: users.php");

  $sql->close();
  mysqli_close($conn);
?>
