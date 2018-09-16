<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $admin_id  = $_GET['id'];
  if($admin_id == 1)
  {
    //echo "Cannot delete root admin.<br>";
    //echo "<a href='adminUsers.php'>Return to admin users</a>";
    $_SESSION['signup'] = 4;

    header("Location: adminUsers.php");

    return false;
  }

  include "MACSorLH.php";

  $sql = $conn->prepare("DELETE FROM admin WHERE id = ?");
  $sql->bind_param("i", $admin_id);
  $sql->execute();

  //echo "<i>ADMIN" . $admin_id . "</i> has now been deleted. <br>";
  //echo "<a href='adminUsers.php'>Return to admin users</a>";

  $_SESSION['signup'] = 2;

  header("Location: adminUsers.php");

  $sql->close();
  mysqli_close($conn);
?>
