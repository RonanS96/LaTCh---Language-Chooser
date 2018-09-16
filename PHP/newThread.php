<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();

  $title     = $_POST['Title'];
  $content   = $_POST['Content'];
  if(isset($_POST['Anon']) )
  {
      $anon = True;
  }
  else
  {
      $anon = False;
  }
  $user_id   = $_SESSION['user_no'];
  $board     = 1; //only one board, but this makes it extendable.
  $date      = date('Y-m-d');
  $time      = date('H:i:s');

  include "MACSorLH.php";

  $title = str_replace(array('<', '>'), '', $title);
  $content = str_replace(array('<', '>'), '', $content);

  if($anon == True)
  {
    $sql = $conn->prepare("INSERT INTO threads (title, content, board, datePosted, timePosted) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("ssiss", $title, $content, $board, $date, $time);
    $sql->execute();
  }
  else
  {
    $sql = $conn->prepare("INSERT INTO threads (title, content, op, board, datePosted, timePosted) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssiiss", $title, $content, $user_id, $board, $date, $time);
    $sql->execute();
  }

  $_SESSION['signup'] = 1;
  header("Location: ../DiscussionBoard/allboards.php");

  $sql->close();
  mysqli_close($conn);
?>
