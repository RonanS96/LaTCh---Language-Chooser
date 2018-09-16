<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  if(!isset($_SESSION['user_no'])){
    header("Location: ../login.php");
  }

  $thread_id  = $_GET['thread_no'];
  $user_id    = $_SESSION['user_no'];

  include "MACSorLH.php";

  $sql = "SELECT * FROM threads WHERE id = $thread_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if(!($_SESSION['user_no'] == $row['op']))
      {
          header("Location: allboards.php");
      }
    }
  }

  $sql1 = $conn->prepare("DELETE FROM replies WHERE thread = ?");
  $sql1->bind_param("i", $thread_id);
  $sql1->execute();

  $sql2 = $conn->prepare("DELETE FROM threads WHERE id = ?");
  $sql2->bind_param("i", $thread_id);
  $sql2->execute();

  //echo "The thread with ID, '" . $thread_id . "', has now been deleted. <br>";
  //echo "<a href='allboards.php'>Return to Discussion Board</a>";

  $_SESSION['signup'] = 2;
  header("Location: allboards.php");

  mysqli_close($conn);
?>
