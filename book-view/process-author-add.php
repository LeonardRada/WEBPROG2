<?php
  require_once('header/book-header.php');
?>

<div class="container">
  <div class="card">
    <div class="card-header">ADD AUTHOR RESULT</div>
      <div class="card-body">
      <?php
        $authorName = $_POST['authorName'];

        try{
          if(!$authorName){
            throw new Exception('Author details not complete. Please try again.');
          }
          @ $db = new mysqli('127.0.0.1:3306', 'root', '', 'php_lesson_db');

          $dbError = mysqli_connect_errno();
          if ($dbError) {
            throw new Exception('Error: Could not connect to database. Please try again later.');
          }

          $query = 'insert into author (name) values (?)';
          $stmt = $db->prepare($query);
          $stmt->bind_param("s", $authorName);
          $stmt->execute();

          $affectedRows = $stmt->affected_rows;
          if ($affectedRows > 0) {
            echo $affectedRows." author inserted into the database.";
          } else {
            throw new Exception('Error: The author was not added.');

          }

          $stmt->close();

        } catch (Exception $e) {
          echo $e->getMessage();
        }
      ?>
      </div>
    <div class="card-footer"><a class="btn btn-outline-danger" href="../book-index.php">Go Back</a></div>
  </div>
</div>

<?php
  require_once('footer/book-footer.php');
?>
