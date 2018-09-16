<?php
  $name     = $_POST['Name'];
  $sender   = $_POST['Email'];
  $message  = $_POST['Message'];

  include "MACSorLH.php";

  $sql = "INSERT INTO feedback (nameOfSender, email, message) VALUES ('" . $name . "', '" . $sender . "', '" . $message . " ')";

  if (mysqli_query($conn, $sql)) {
      //echo "Your feedback has been sent, thank you! ";
      //echo "<a href='../index.php'>Return to website</a>";
      session_start();

      $_SESSION['sent'] = 1;
      header("Location: ../feedback.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
