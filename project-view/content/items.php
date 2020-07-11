<?php
session_start();

if($_SERVER['HTTPS'] != 'on'){
	header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	exit;
}

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
							echo '<script>window.location="items.php"</script>';
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
		<title>Items</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>
		<br />

		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="../index.php">Nature Village</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
			      </li>

						<li class="nav-item">
						 <a class="nav-link" href="../content/checkout.php">Checkout
							 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						 	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						 	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						 </a>
					 </li>

					 <form action="results.php" method="post" class="form-inline my-2 my-lg-0">
						 <div class="form-group mr-sm-2">
							 <select class="form-control" id="searchType" name="searchType">
								 <option value="name">Name</option>
								 <option value="price">Price</option>
							 </select>
						 </div>

						 <div class="form-group">
							 <input type="text" id="searchTerm" name="searchTerm" class="form-control" placeholder="Search"/>
						 </div>

						 <div>
							 <button type="submit" class="btn btn-primary">Submit</button>
						 </div>
					 </form>

			    </ul>
			  </div>
			</nav>

			<?php
				$query = "SELECT * FROM items ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result))
				{
			?>

			<div class="col-md-4">
				<form method="post" action="items.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">

						<img src="../assets/items/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<h4 class="text-danger">PHP <?php echo $row["price"]; ?></h4>
						<input type="number" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>

			<?php
					}
				}
			?>
			<br>

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
						<th width="5%">Action</th>
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
						<td><a href="items.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>

					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>

					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">PHP <?php echo number_format($total, 2); ?></td>
						<td href="checkout.php"><a class="nav-link js-scroll-trigger" href="checkout.php">Checkout</a></td>
					</tr>

					<?php
					}
					?>

				</table>
				<br><br>
			</div>
		</div>
	</body>
</html>

<?php
	require_once '../footer/project-footer.php';
?>
