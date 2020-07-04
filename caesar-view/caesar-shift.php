<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <!-- HOMEWORK 2 CAESAR SHIFT -->
    <div class="container">
      <div class="card">
        <div class="card-body">
          <form action="#caesar" method="post">
            <div class="row">
              <label>Message:</label>
              <input type="text" name="message" id="message" class="form-control">
            </div>

            <br>

            <div class="row">
              <label>Key:</label>
              <input type="text" name="key" id="key" class="form-control">
            </div>

            <br>

            <div class="row">
              <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <p>CIPHERED RESULT:</p>

          <?php
          function encrypt($message, $key) {
            $result = "";

            for ($ctr = 0; $ctr < strlen($message); $ctr++){
                if (ctype_upper($message[$ctr]))
                    $result = $result.chr((ord($message[$ctr]) + $key - 65) % 26 + 65);
                else
                $result = $result.chr((ord($message[$ctr]) + $key - 97) % 26 + 97);
            }
            return $result;
            }
            $message = @($_POST['message']);
            $key = @($_POST['key']);

            echo encrypt($message, $key);
           ?>

        </div>
      </div>
    </div>

  </body>
</html>
