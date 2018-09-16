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

    if($_POST['nme'] == NULL)
    {
      //do nothing
    }
    else
    {
      $lang_name     = $_POST['nme'];
      $lang_name = str_replace(array('<', ">"), '', $lang_name);
      // prepare, bind and execute
      $sql1 = $conn->prepare("UPDATE language SET lName = ? WHERE id = ?;");
      $sql1->bind_param("si", $lang_name, $id);
      $sql1->execute();
      $sql1->close();
    }
    if($_POST['des'] == NULL)
    {
      //do nothing
    }
    else
    {
      $lang_des = $_POST['des'];
      $lang_des = str_replace(array('<', ">"), '', $lang_des);
      // prepare, bind and execute
      $sql1 = $conn->prepare("UPDATE language SET description = ? WHERE id = ?;");
      $sql1->bind_param("si", $lang_des, $id);
      $sql1->execute();
      $sql1->close();
    }
    if($_POST['year'] == NULL)
    {
      //do nothing
    }
    else
    {
      $lang_year = $_POST['year'];
      $lang_year = str_replace(array('<', ">"), '', $lang_year);
      // prepare, bind and execute
      $sql1 = $conn->prepare("UPDATE language SET year = ? WHERE id = ?;");
      $sql1->bind_param("si", $lang_year, $id);
      $sql1->execute();
      $sql1->close();
    }
    if($_POST['par'] == NULL)
    {
      //do nothing
    }
    else
    {
      $lang_par = $_POST['par'];
      $lang_par = str_replace(array('<', ">"), '', $lang_par);
      // prepare, bind and execute
      $sql1 = $conn->prepare("UPDATE language SET mainParadigm = ? WHERE id = ?;");
      $sql1->bind_param("si", $lang_par, $id);
      $sql1->execute();
      $sql1->close();
    }
    if($_POST['hol'] == NULL)
    {
      //do nothing
    }
    else
    {
      $lang_hol = $_POST['hol'];
      $lang_hol = str_replace(array('<', ">"), '', $lang_hol);
      // prepare, bind and execute
      $sql1 = $conn->prepare("UPDATE language SET highOrLow = ? WHERE id = ?;");
      $sql1->bind_param("si", $lang_hol, $id);
      $sql1->execute();
      $sql1->close();
    }

    $_SESSION['signup'] = 3;
    header("Location: languages.php");

    mysqli_close($conn);
?>
