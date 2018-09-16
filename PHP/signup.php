<!-- Based on w3Schools SQL prepared statements pages:
   - https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
  session_start();

  $first_name     = $_POST['fname'];
  $second_name    = $_POST['sname'];
  $email          = $_POST['eml'];
  $user_password  = $_POST['psw'];
  $repeat_pword   = $_POST['psw-repeat'];
  $active         = 'Y';

  $hashed_password = password_hash ( $user_password , PASSWORD_BCRYPT );
  //echo "The hashed password is: " . $hashed_password;

  $first_name = str_replace(array('<', ">"), '', $first_name);

  include "MACSorLH.php";

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // prepare, bind and execute
  $sql = $conn->prepare("INSERT INTO users (email, password, firstName, surname, active) VALUES (?, ?, ?, ?, ?)");
  $sql->bind_param("sssss", $email, $hashed_password, $first_name, $second_name, $active);
  $sql->execute();

  $_SESSION['signup'] = 2;

  //echo "Your account has been created! ";
  //echo "<a href='../login.php'>Return to login screen</a><br>";
  //echo "<a href='../Admin/home.php'>ADMIN: Return to admin home</a>";

  if(isset($_SESSION['admin_no']))
  {
    header("Location: ../Admin/users.php"); /* Redirect admin to users */
  }
  else
  {
    header("Location: ../login.php"); /* Redirect new user to homescreen */
  }

  $sql->close();
  mysqli_close($conn);
?>
