    <?php
        $empty = array();
        $items = array(
                  array('Code'=>'OIL', 'Description' => 'Oil', 'Price' => 50),
                  array('Code'=>'TIRE', 'Description' => 'Tires', 'Price' => 100),
                  array('Code'=>'SPARKPLUG', 'Description' => 'Spark Plugs', 'Price' => 30)
                 );

        echo '<table class="table table-condensed">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Price</th>
                  </tr>
                </thead>';
        foreach ($items as $item){
          echo '<tr>';
          foreach($item as $field => $value){
            echo '<td>'.$value.'</td>';
          }
          echo '</tr>';
        }
        echo '</table>';

        function compareItems($fir,$sec){
          if($fir['Price'] == $sec['Price'])
            return 0;
          else if($fir['Price'] > $sec['Price'])
            return 1;
          else
            return -1;
        }

        usort($items,'compareItems');
  ?>
