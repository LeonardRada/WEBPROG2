<?php
  require_once('header/bobs-header.php');
  require_once('model/product.php');
  require_once('model/product-list.php');
  require_once('service/order-service.php');
  require_once('resource/properties.php');
  // HOMEWORK 4 VAT PERCENT USING properties.php
  define('VAT_PERCENT', doubleval(getProperty("VAT_PERCENT")));
 ?>
    <!-- ACTIVITY 5 ORDER FORM: HEADER AND FOOTER ADDED TO BOB'S AUTO PARTS -->
    <br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 class="cart-title">Order Results:</h3>
          <!-- ACTIVITY 2 QUANTITY DISPLAY OF PROCESS ORDER OF BOB'S AUTO PARTS -->
            <?php
                echo '<p> Order Processed at ';
                echo date('H:i, jS F Y');
                echo '</p>';

                $tire->__set('quantity', $_POST['tireQty']? $_POST['tireQty']: 0);
                $oil->__set('quantity', $_POST['oilQty']? $_POST['oilQty']: 0);
                $sparkPlugs->__set('quantity',$_POST['sparkQty']? $_POST['sparkQty']: 0);
                $find = $_POST['find'];

                switch($find){
                  case 'regular':
                    echo 'Regular Customer';
                    break;
                  case 'tv':
                    echo 'From Television Advertisement.';
                    break;
                  case 'phone':
                    echo 'From Phone Directory';
                    break;
                  case 'mouth':
                    echo 'Word of Mouth.';
                    break;
                  default:
                    break;
                }

                echo '<p><b>Your order is as follows:</b></p>';
                echo $tire->__get('quantity').' Tires.<br/>';
                echo $oil->__get('quantity').' Oil.<br/>';
                echo $sparkPlugs->__get('quantity').' Spark Plugs.<br/>'.'<br/>';

                $totalQty = @($tire->__get('quantity') + $oil->__get('quantity') + $sparkPlugs->__get('quantity'));
                echo '<b>Total Quantity: </b>'.$totalQty.'<br/><br/>';

                echo '<p><b>Prices:</b><br/>';
                echo 'Tires: $'.TIRE_PRICE.'<br/>';
                echo 'Oil: $'.OIL_PRICE.'<br/>';
                echo 'Spark Plugs: $'.SPARK_PRICE.'<br/><br/>';

                $tireAmount = @($tire->__get('quantity') * TIRE_PRICE);
                $oilAmount = @($oil->__get('quantity') * OIL_PRICE);
                $sparkAmount = @($sparkPlugs->__get('quantity') * SPARK_PRICE);

                $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

                echo '<p><b>Product Amount:</b><br/>';
                echo 'Tire Amount: $'.$tireAmount.'<br/>';
                echo 'Oil Amount: $'.$oilAmount.'<br/>';
                echo 'Spark Plugs Amount: $'.$sparkAmount.'<br/>';

                // ACTIVITY 3 TAX AMOUNT ADDED TO PROCESS ORDER OF BOB'S AUTO PARTS
                $vatableAmount = $totalAmount / (1+VAT_PERCENT);
                $vatAmount = $totalAmount - $vatableAmount;

                echo '<br/>'."<b>VATable Amount: </b>".'$'.$vatableAmount.'<br/>';
                echo '<b>VAT Amount(12%): </b>'.'$'.$vatAmount.'<br/>';
                echo '<b>Total Amount: </b>'.'$'.$totalAmount.'<br/>'.'<br/>';

                echo 'Amount exceeded 500 but less than 1000? '.($totalAmount > 500 && $totalAmount < 1000? 'Yes' : 'No').'<br/><br/>';
                recordOrder($tire->__get('quantity'),
                          $oil->__get('quantity'),
                          $sparkPlugs->__get('quantity'),
                          $totalAmount);
            ?>

        </div>
        <div class="card-footer">
          <a class="btn btn-outline-danger" href=../bobs-index.php>Go Back</a>
        </div>
      </div>
    </div>

<?php
  require_once('footer/bobs-footer.php');
 ?>
