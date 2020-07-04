      <?php
        $address = $_POST['address'];

        try{
          if(!$address){
            throw new Exception('Author details not complete. Please try again.');
          }
          @ $db = new mysqli('127.0.0.1:3306', 'root', '', 'phplogin');

          $dbError = mysqli_connect_errno();
          if ($dbError) {
            throw new Exception('Error: Could not connect to database. Please try again later.');
          }

          $query = 'insert into address (address) values (?)';
          $stmt = $db->prepare($query);
          $stmt->bind_param("s", $address);
          $stmt->execute();

          $affectedRows = $stmt->affected_rows;
          if ($affectedRows > 0) {
            echo "<script>alert('Address Inserted to Database')</script>";
          } else {
            throw new Exception('Error: The author was not added.');

          }

          $stmt->close();

        } catch (Exception $e) {
          echo $e->getMessage();
        }
      ?>

<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "product");

      if(isset($_POST["add_to_cart"])){
        if(isset($_SESSION["shopping_cart"])){
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

          if(!in_array($_GET["id"], $item_array_id)){
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
              'item_id'			=>	$_GET["id"],
              'item_name'			=>	$_POST["hidden_name"],
              'item_price'		=>	$_POST["hidden_price"],
              'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
          }
          else{
            echo '<script>alert("Item Already Added")</script>';
          }
        } else {
          $item_array = array(
            'item_id'			=>	$_GET["id"],
            'item_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["quantity"]
          );
          $_SESSION["shopping_cart"][0] = $item_array;
        }
      }

      if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
          foreach($_SESSION["shopping_cart"] as $keys => $values){
            if($values["item_id"] == $_GET["id"]){
              unset($_SESSION["shopping_cart"][$keys]);
              echo '<script>window.location="checkout.php"</script>';
            }
          }
        }
      }
?>

<?php
  require_once '../header/project-header.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CHECKOUT</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>
		<br />
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="../content/project-content-login.php">Nature Village</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="../content/project-content-login.php">Home <span class="sr-only">(current)</span></a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link" href="../content/items.php">Items</a>
			      </li>

			    </ul>
			  </div>
			</nav>

			<!-- ORDER DETAILS -->
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
					</tr>

					<?php
					if(!empty($_SESSION["shopping_cart"])){
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values){
					?>

					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>PHP <?php echo $values["item_price"]; ?></td>
						<td>PHP <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
					</tr>

					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>

					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">PHP <?php echo number_format($total, 2); ?></td>
					</tr>

					<?php
					}
					?>
				</table>
			</div>

</script>

				<!-- CONFIRMATION DETAILS -->
				<div class="container-fluid border">
					<div class="text-center">
						<h3 class="section-heading text-uppercase">CONFIRMATION DETAILS</h3>
						<div class="card-body">

						</div>
					</div>
				</div>

		</div>
	</body>
</html>

<br>
<?php
  require_once '../footer/project-footer.php';
?>
