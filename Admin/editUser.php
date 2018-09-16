<?php
    session_start();
    // Keep non-admin users out
    if(!isset($_SESSION['admin_no'])){
      header("Location: login.php");
    }
    $id = $_GET['id'];

    include "MACSorLH.php";

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // , password = ?, firstName = ?, surname = ?

    // if a new value has not been posted, keep the old value.
    if($_POST['fname'] == NULL)
    {
      $first_name = $_SESSION['first_name'];
    }
    else
    {
      $first_name     = $_POST['fname'];
      // prepare, bind and execute
      $sql1 = $conn->prepare("UPDATE users SET firstName = ? WHERE id = ?;");
      $sql1->bind_param("si", $first_name, $id);
      $first_name = str_replace(array('<', ">"), '', $first_name);
      $sql1->execute();
      $sql1->close();
    }
    if($_POST['sname'] == NULL)
    {
      $second_name = $_SESSION['second_name'];
    }
    else
    {
      $second_name = $_POST['sname'];
      // prepare, bind and execute
      $sql2 = $conn->prepare("UPDATE users SET surname = ? WHERE id = ?;");
      $sql2->bind_param("si", $second_name, $id);
      $second_name = str_replace(array('<', ">"), '', $second_name);
      $sql2->execute();
      $sql2->close();
    }
    if($_POST['eml'] == NULL)
    {
      $email = $_SESSION['email'];
    }
    else
    {
      $email = $_POST['eml'];
      // prepare, bind and execute
      $sql3 = $conn->prepare("UPDATE users SET email = ? WHERE id = ?;");
      $sql3->bind_param("si", $email, $id);
      $sql3->execute();
      $sql3->close();
    }
    if($_POST['psw'] == NULL)
    {
      $new_password = $_SESSION['password'];
    }
    else
    {
      $new_password = $_POST['psw'];
      $hashed_password = password_hash ( $new_password , PASSWORD_BCRYPT );
      // prepare, bind and execute
      $sql4 = $conn->prepare("UPDATE users SET password = ? WHERE id = ?;");
      $sql4->bind_param("si", $hashed_password, $id);
      $sql4->execute();
      $sql4->close();
    }


    //echo "<i>USER" . $id . "</i> has been updated! ";
    //echo "<a href='users.php'>Return to users</a>";
    $_SESSION['signup'] = 4;
    header("Location: users.php");

    mysqli_close($conn);
 ?>
