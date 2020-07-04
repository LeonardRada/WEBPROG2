<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <!-- HOMEWORK 1 FIBONACCI SEQUENCE -->
    <div class="container">
      <div class="card">
        <div class="card-body">
          <form action ="#fibonacci" method = "get">
            <div> Sequence Length </div>
              <div class="input-group">
                <input type = "number" name = "seqQty" maxlength = "3" min = "0" max = "20" class="form-control"/>
                <button type = "submit" class="btn btn-primary float-right">Submit</button>
              </div>

                <?php
                  function fibonacci($num){
                    if($num == 0)
                      return 0;
                    else if ($num == 1)
                      return 1;
                    else
                      return (Fibonacci($num - 1) +
                              Fibonacci($num - 2));
                  }
                    $num = @($_GET['seqQty']);
                    echo '<br>Series Length: '.$num. '<br/>';
                    for ($ctr=0; $ctr < $num; $ctr++) {
                        echo fibonacci($ctr), ' ';
                    }
                ?>

          </form>
        </div>
      </div>
    </div>

  </body>
</html>
