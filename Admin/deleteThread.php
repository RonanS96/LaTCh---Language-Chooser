<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
    header("Location: login.php");
  }

  $thread_id  = $_GET['id'];

  include "MACSorLH.php";

  $sql = "SELECT * FROM threads WHERE id = $thread_id";
  $result = $conn->query($sql);

  $sql1 = $conn->prepare("DELETE FROM replies WHERE thread = ?");
  $sql1->bind_param("i", $thread_id);
  $sql1->execute();

  $sql2 = $conn->prepare("DELETE FROM threads WHERE id = ?");
  $sql2->bind_param("i", $thread_id);
  $sql2->execute();

  //echo "The thread with ID, '" . $thread_id . "', has now been deleted. <br>";
  //echo "<a href='threads.php'>Return to Discussion Board</a>";

  $_SESSION['signup'] = 2;

  header("Location: threads.php");

  mysqli_close($conn);
?>
