<?php
  session_start();
  require_once('service/login.php');

  define('DB_HOST', '127.0.0.1:3306');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'phplogin');

  $username = $_POST['username'];
  $password = $_POST['password'];

  try {
    if(!$username || !$password){
      throw new Exception('Incomplete Credentials');
    }

    @ $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);


    //VALIDATION IF CONNECTED TO DATABASE
    $dbError = mysqli_connect_errno();
    if ($dbError) {
      throw new Exception('Could not connect to database. Error: '.$dbError);
    }

    $isActive = true;

    //QUERY FROM THE DATABASE
    $query = 'select * from user_info where username = ? and password = ? and active = ?';
    loginInfo($query);
    $stmt = $db->prepare($query);
    $hashedPassword = hash('sha512', $password);
    $stmt->bind_param("ssi", $username, $hashedPassword, $isActive);
    $stmt->execute();
    $result = $stmt->get_result();

    //CHECKING THE FIRST ROW IF THERE'S ANY
    if($result->fetch_assoc()){
      $_SESSION['username'] = $username;
      header('Location: index.php');
    }else{
      throw new Exception('Incorrect Credentials');
    }

  } catch (Exception $e) {
    header('Location: login.php?error='.$e->getMessage());
  }

 ?>
