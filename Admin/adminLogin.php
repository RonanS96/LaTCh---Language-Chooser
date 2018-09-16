<!-- Copied and modified from http://form.guide/php-form/php-login-form-html -->
<?php
  Login();

  function Login()
  {
    $email = $_POST['uname'];
    $password = $_POST['psw'];

    CheckLoginInDB($email, $password);

    return true;
  }

  function CheckLoginInDB($u, $p)
  {
    include "MACSorLH.php";

    $sql = "SELECT id, email, password, firstName, surname FROM admin
            WHERE email = '$u'";

    $result = $result = $conn->query($sql);

    if($result->num_rows <= 0)
    {
      //echo "Login unsuccessful. Incorrect username and password combination.";
      //echo "<a href='../Admin/login.php'>Try again</a>";
      session_start();
      $_SESSION['signup'] = 2;

      header("Location: login.php");

      return false;
    }
    else
    {
      while($row = $result->fetch_assoc())
      {
        if (password_verify($p, $row['password'])) {
                session_start();

                $_SESSION['admin_no']     = $row['id'];
                $_SESSION['email']        = $row['email'];
                $_SESSION['first_name']   = $row['firstName'];
                $_SESSION['second_name']  = $row['surname'];
                $_SESSION['password']     = $row['password'];
                $loggedIn = True;

                echo "Login successful! You are now logged in as " . $_SESSION['first_name'] . " " . $_SESSION['second_name'] . ". ";
                echo "<a href='../index.php'>Return to website</a>";
                header("Location: ../Admin/home.php"); /* Redirect browser to homescreen */
        }
        else
        {
                //echo "Login unsuccessful. Incorrect username and password combination. ";
                //echo "<a href='login.php'>Try again</a>";
                session_start();
                $_SESSION['signup'] = 2;

                header("Location: login.php");

                return false;
        }
      }
      return true;
    }
  }

 ?>
