<?php
  session_start();

  session_destroy(); // ALL SESSION WILL BE DESTROYED
  // unset($_SESSION['username']); // SPECIFIC SESSION WILL BE DESTROYED

  header('Location: ../project-index.php')
 ?>
