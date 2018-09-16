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

    $sql = "SELECT id, email, password, firstName, surname, active FROM users
            WHERE email = '$u'";

    $result = $result = $conn->query($sql);

    if($result->num_rows <= 0)
    {
      //echo "Login unsuccessful. Incorrect username and password combination.";
      //echo "<a href='../login.php'>Try again</a>";
      session_start();

      $_SESSION['fail'] = 1;
      header("Location: ../login.php");

      return false;
    }
    else
    {
      while($row = $result->fetch_assoc())
      {
        if($row['active'] == 'N')
        {
          //echo "Login unsuccessful. Your account has been deactivated. Please contact a LaTCh administrator. ";
          //echo "<a href='../index.php'>Return to home.</a>";
          session_start();

          $_SESSION['signup'] = 3;
          header("Location: ../login.php");
          return false;
        }
        else if (password_verify($p, $row['password'])) {
                session_start();

                $_SESSION['user_no']      = $row['id'];
                $_SESSION['email']        = $row['email'];
                $_SESSION['first_name']   = $row['firstName'];
                $_SESSION['second_name']  = $row['surname'];
                $_SESSION['password']     = $row['password'];
                $loggedIn = True;

                echo "Login successful! You are now logged in as " . $_SESSION['first_name'] . " " . $_SESSION['second_name'] . ". ";
                echo "<a href='../index.php'>Return to website</a>";
                header("Location: ../index.php"); /* Redirect browser to homescreen */

                return true;
        }
        else
        {
              session_start();

              //echo "Login unsuccessful. Incorrect username and password combination. TEST ";
              //echo "<a href='../login.php'>Try again</a>";
              $_SESSION['fail'] = 1;
              header("Location: ../login.php");
              return false;
        }
      }

      //echo "Login unsuccessful. Incorrect username and password combination. test 2 ";
      //echo "<a href='../login.php'>Try again</a>";
      $_SESSION['fail'] = 1;
      header("Location: ../login.php");
      return false;

    }
  }

 ?>
