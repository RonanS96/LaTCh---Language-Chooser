<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();
  // Keep non-admin users out
  if(!isset($_SESSION['admin_no'])){
     header("Location: login.php");
  }

  $first_name     = $_POST['fname'];
  $second_name    = $_POST['sname'];
  $email          = $_POST['eml'];
  $user_password  = $_POST['psw'];
  $repeat_pword   = $_POST['psw-repeat'];

  $hashed_password = password_hash ( $user_password , PASSWORD_BCRYPT );
  //echo "The hashed password is: " . $hashed_password;

  $first_name = str_replace(array('<', ">"), '', $first_name);

  include "MACSorLH.php";

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // prepare, bind and execute
  $sql = $conn->prepare("INSERT INTO admin (email, password, firstName, surname) VALUES (?, ?, ?, ?)");
  $sql->bind_param("ssss", $email, $hashed_password, $first_name, $second_name);
  $sql->execute();

  $_SESSION['signup'] = 1;
  header("Location: adminUsers.php");

  //echo "A new admin account has been created! ";
  //echo "<a href='adminUsers.php'>Return to admin users</a>";

  $sql->close();
  mysqli_close($conn);
?>
