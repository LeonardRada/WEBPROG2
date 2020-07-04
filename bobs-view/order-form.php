<?php
  require_once('model/product.php');
  require_once('model/product-list.php');
?>
  <!-- ACTIVITY 5 ORDER FORM: HEADER AND FOOTER ADDED TO BOB'S AUTO PARTS -->
  <section class="page-section" id="creator">
    <form action="bobs-view/process-order.php" method="post">
      <table class="table">
        <thead>
          <tr class="row">
            <th class="col-6">ITEM</th>
            <th class="col-3">PRICE</th>
            <th class="col-3">&ensp;&ensp;&ensp;&ensp;&nbsp QUANTITY</th>
          </tr>
        </thead>
        <tbody>

        <!-- ACTIVITY 4 ORDER FORM:ARRAY ADDED TO BOB'S AUTO PARTS -->
        <!-- HOMEWORK 3 MODIFIED ORDER TO FORM TO SHOW PRICE -->
        <?php
          foreach($productInfo as $product){
            echo '<tr class="row">
                  <td class="col-6">
                    '.$product->desc.'
                  </td>

                  <td class="col-2">
                    '.$product->price.'
                  </td>

                  <td class="col-4">
                    <input type="number" name="'.$product->name.'" maxlength="3" min="0" max="10" class="form-control"/>
                  </td>
                </tr>';
          }
        ?>

          <tr class="row">
            <td class="col-8">How did you find Bob's?</td>
            <td class="col-4">
              <select name="find" class="custom-select">
                <option value="regular">I'm a regular customer</option>
                <option value="tv">Television Advertisement</option>
                <option value="phone">Phone Directory</option>
                <option value="mouth">Word of Mouth</option>
              </select>
            </td>
          </tr>

          <tr class="row">
            <td colspan="3" class="col-12">
              <button type="submit" class="btn btn-outline-primary float-right" style="margin:5px">Submit</button>
            </td>
          </tr>

        </tbody>
      </table>
    </form>
  </section>
