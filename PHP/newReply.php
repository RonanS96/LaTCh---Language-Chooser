<?php
  session_start();

  $comment   = $_POST['Comment'];
  $user_id   = $_SESSION['user_no'];
  $thread_no = $_GET['thread_no'];

  include "MACSorLH.php";

  $comment = str_replace(array('<', '>'), '', $comment);
  $thread_no = str_replace(array('<', '>'), '', $thread_no);

  $sql = $conn->prepare("INSERT INTO replies (user, content, thread) VALUES (?, ?, ?)");
  $sql->bind_param("ssi", $user_id, $comment, $thread_no);
  $sql->execute();

  //echo "Your reply, '" . $comment . "', has now been sent! <br>";
  //echo "<a href='../DiscussionBoard/thread.php?thread_no=" . $thread_no . "'>Return to thread</a>";

  $_SESSION['signup'] = 2;
  header("Location: ../DiscussionBoard/thread.php?thread_no=$thread_no");

  $sql->close();
  mysqli_close($conn);
?>
