<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $suffix = $_POST['suffix'];


  try{
    if(!$username){
      throw new Exception('Registration details not complete. Please try again.');
    }
    @ $db = new mysqli('127.0.0.1:3306', 'root', '', 'phplogin');

    $dbError = mysqli_connect_errno();
    if ($dbError) {
      throw new Exception('Error: Could not connect to database. Please try again later.');
    }

    $query = 'insert into register (username,password,firstname,middlename,lastname,suffix) values (?,?,?,?,?,?)';
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssssss", $username,$password,$firstname,$middlename,$lastname,$suffix);
    $stmt->execute();

    $query1 = 'insert into users (username,password) values (?,?)';
    $stmt1 = $db->prepare($query1);
    $stmt1->bind_param("ss", $username,$password);
    $stmt1->execute();

    $affectedRows = $stmt->affected_rows;
    $affectedRows1 = $stmt1->affected_rows;
    if ($affectedRows && $affectedRows1 > 0) {
      echo "<script>alert('Registration successful! Data Inserted Into The Database.')</script>";
      echo "<script>location.replace('../../project-index.php')</script>";
    } else {
      echo "<script>alert('Error: Failed Registration')</script>";
      echo "<script>location.replace('../../project-index.php')</script>";
    }

    $stmt->close();
    $stmt1->close();

  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
