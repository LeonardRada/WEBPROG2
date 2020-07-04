<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "phplogin";

if ( !empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        // $user = $result->fetch_object();
        $row = mysqli_fetch_array($result);
        if($username == "" && $password == ""){
          header('../../project-index.php');
        }
        if($row['username'] == $username && $row['password'] == $password){
          echo "<script>alert('Login Successfully, Welcome $username!')</script>";
        }else{
          echo "<script>alert('Invalid Input')</script>";
          echo "<script>location.replace('../../project-index.php')</script>";
        }

    	// Verify user password and set $_SESSION
    	// if ( password_verify( $_POST['password'], $row->password ) ) {
    	// 	$_SESSION['user_id'] = $row->ID;
    	// }
    }
}
?>
