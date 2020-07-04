  <table class="table">
    <thead>
      <tr class="row">
        <th class="col-6" style="text-align:center;">DISTANCE</th>
        <th class="col-6" style="text-align:center;">COST</th>
      </tr>
    </thead>

    <tbody>
      <?php
        //USING FOR LOOP
        for($distance = 50; $distance <= 800; $distance +=50){
          echo'
            <tr class= \'row\'>
              <td class="col-6" style="text-align:center;">'.$distance.' Meters</td>
              <td class="col-6" style="text-align:center;">'.($distance/25).'</td>
            </tr>';
        }
       ?>
    </tbody>
  </table>
