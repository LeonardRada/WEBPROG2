<?php
  require_once('header/book-header.php');
  require_once('service/logs.php');
?>

<div class="container">
  <div class="card">
    <div class="card-header">SEARCH BOOK RESULT</div>
      <div class="card-body">
          <!-- HOMEWORK 5 BOOK THUMBNAIL ADDED TO BOOK CATALOG -->
          <?php
            define('FIELDS', array(
              'author' => 'author.name',
              'title' => 'book.title',
              'isbn' => 'book.isbn',
              'pic_url' => 'book.pic_url'
            ));

            $searchType = $_POST['searchType'];
            $searchTerm = $_POST['searchTerm'];

            try {
              if (!$searchType || !$searchTerm) {
                throw new Exception('You have not entered search details. Please go back and try again.', 1);
              }

              // 127.0.0.1 = localhost
              @ $db = new mysqli('127.0.0.1:3306', 'root', '', 'php_lesson_db');

              $dbError = mysqli_connect_errno();
              if ($dbError) {
                throw new Exception('Error: Could not connect to database. '.
                  'Please try again later. '.$dbError, 1);
              }

              $query = 'SELECT author.name as author_name, book.title, book.isbn, book.pic_url
                FROM book
                INNER JOIN author
                    ON author.id = book.author_id
                WHERE '.FIELDS[$searchType].' LIKE \'%'.$searchTerm.'%\';';

              //echo $query.'<br/>';
              logInfo($query);
              $result = $db->query($query);
              $resultCount = $result->num_rows;

              echo '<p>Result For '.$searchType.' : '.$searchTerm.'</br>';
              echo 'Number of Books Found: '.$resultCount;

              echo '<div class="row">';
              for ($ctr = 0; $ctr < $resultCount; $ctr++) {
                $row = $result -> fetch_assoc();
              ?>
                <div class="card col-4 mx-1">
                  <div class="card-body">
                    <h6><?php echo $row['title'];?></h6>
                    <p>
                      By: <?php echo  $row['author_name'];?> <br>
                      ISBN: <?php echo $row['isbn']?> <br>
                      <img src="image/<?php echo $row['pic_url']; ?>" width="200 rem">
                    </p>
                  </div>
                </div>
              <?php
              }
              echo '</div>';
            } catch (Exception $e) {
              echo $e->getMessage();
            }
          ?>
        </div>
      <div class="card-footer"><a class="btn btn-outline-danger" href="../book-index.php">Go Back</a></div>
    </div>
  </div>

<?php require_once('footer/book-footer.php');?>
