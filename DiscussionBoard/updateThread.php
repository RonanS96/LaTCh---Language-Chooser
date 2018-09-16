<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  if(!isset($_SESSION['user_no'])){
    header("Location: ../login.php");
  }

  $thread_id  = $_GET['thread_no'];
  $title      = $_POST['tit'];
  $content    = $_POST['cont'];

  include "MACSorLH.php";

  $title = str_replace(array('<', '>'), '', $title);
  $content = str_replace(array('<', '>'), '', $content);

  if($content == NULL){
    $sql = $conn->prepare("UPDATE threads SET title = ? WHERE id = ?;");
    $sql->bind_param("si", $title, $thread_id);
    $sql->execute();
  }
  else if($title == NULL){
    $sql = $conn->prepare("UPDATE threads SET content = ? WHERE id = ?;");
    $sql->bind_param("si", $content, $thread_id);
    $sql->execute();
  }
  else
  {
    $sql = $conn->prepare("UPDATE facts SET fact = ?, source = ? WHERE id = ?;");
    $sql->bind_param("ssi", $title, $content, $thread_id);
    $sql->execute();
  }

  //echo "The thread has been updated: " . $title . "" . $content . "<br>";
  //echo "<a href='thread.php?thread_no=" . $thread_id . "'>Return to thread</a>";
  $_SESSION['signup'] = 1;
  header("Location: thread.php?thread_no=$thread_id");

  $sql->close();
  mysqli_close($conn);
?>
