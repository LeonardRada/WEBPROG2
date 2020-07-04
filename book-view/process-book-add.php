<?php
  require_once('header/book-header.php');
?>

<div class="container">
  <div class="card">
    <div class="card-header">ADD BOOK RESULT</div>
      <div class="card-body">
      <?php
        $bookTitle = $_POST['bookTitle'];
        $authorName = $_POST['authorName'];
        $ISBN = $_POST['ISBN'];
        $pic_url = $_POST['pic_url'];

        try{
          if (!$bookTitle || !$authorName || !$ISBN) {
            throw new Exception('Book details not complete. Please try again.');
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
            $select = 'select author.id as authorId from author where name = "'.$authorName.'"';
            $authorId = $db->query($select);
            $id = $authorId->fetch_assoc();

            $queryBookAdd = 'INSERT INTO book(title, isbn, author_id, pic_url) VALUES (?, ?, ?, ?)';
            $stmtBookAdd = $db->prepare($queryBookAdd);
            $stmtBookAdd->bind_param("ssis", $bookTitle, $ISBN, $id['authorId'], $pic_url);
            $stmtBookAdd->execute();

            $affectedRowsBook = $stmtBookAdd->affected_rows;
            if($affectedRowsBook > 0){
              echo $affectedRowsBook." book inserted into the database.";
            }else {
              throw new Exception("The book was not added to the database.");
            }

          } else {
            throw new Exception('The author was not added to the database.');
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
