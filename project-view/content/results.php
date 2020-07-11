<?php
  require_once('../header/project-header.php');
?>
<br>
<div class="container">
  <div class="card">
    <div class="card-header">SEARCH ITEM RESULT</div>
      <div class="card-body">
          <!-- HOMEWORK 5 BOOK THUMBNAIL ADDED TO BOOK CATALOG -->
          <?php
            define('FIELDS', array(
              'name' => 'items.name',
              'price' => 'items.price',
              'image' => 'items.image'
            ));

            $searchType = $_POST['searchType'];
            $searchTerm = $_POST['searchTerm'];

            try {
              if (!$searchType || !$searchTerm) {
                throw new Exception('You have not entered search details. Please go back and try again.', 1);
              }

              // 127.0.0.1 = localhost
              @ $db = new mysqli('127.0.0.1:3306', 'root', '', 'product');

              $dbError = mysqli_connect_errno();
              if ($dbError) {
                throw new Exception('Error: Could not connect to database. '.
                  'Please try again later. '.$dbError, 1);
              }

              $query = 'SELECT items.name, items.price, items.image
                FROM items
                WHERE '.FIELDS[$searchType].' LIKE \'%'.$searchTerm.'%\';';

              //echo $query.'<br/>';
              $result = $db->query($query);
              $resultCount = $result->num_rows;

              echo '<p>Result For '.$searchType.' : '.$searchTerm.'</br>';
              echo 'Number of Items Found: '.$resultCount;

              echo '<div class="row">';
              for ($ctr = 0; $ctr < $resultCount; $ctr++) {
                $row = $result -> fetch_assoc();
              ?>
                <div class="card col-4 mx-1">
                  <div class="card-body">
                    <p>
                      Name: <?php echo  $row['name'];?> <br>
                      Price: <?php echo $row['price']?> <br>
                      <img src="../assets/items/<?php echo $row['image']; ?>" width="200 rem">
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
      <div class="card-footer"><a class="btn btn-outline-danger" href="items.php">Go Back</a></div>
    </div>
    <?php require_once('../footer/project-footer.php');?>
  </div>
