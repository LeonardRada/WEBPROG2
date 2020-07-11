        <?php
          session_start();

          if(!isset($_SESSION['username'])) {
            header('Location: ../login.php?error=Unauthorized access');
            exit;
          }

          if($_SERVER['HTTPS'] != 'on'){
          	header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          	exit;
          }
         ?>

        <?php
          require_once '../header/project-header-login.php';
          require_once '../modal/logout-modal.php';
        ?>

        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../content/items.php" >Items</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../content/checkout.php" >Checkout</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#logoutModal" >Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- MASTHEAD -->
        <header class="masthead">
          <div class="container">
            <div class="masthead-heading">Welcome To Nature Village!</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#fruits">Explore</a>
          </div>
        </header>



        <!-- ORDER FORM -->
        <section class="page-section bg-light" id="fruits">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">FRUITS</h3>
              <?php
                require('../card/card-fruits-login.php');
              ?>
            </div>
          </div>
        </section>

        <!-- PRICE LIST -->
        <section class="page-section" id="vegetables">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">VEGETABLES</h3>
              <?php
                require('../card/card-vegetables-login.php');
              ?>
            </div>
          </div>
        </section>

        <?php
          require_once '../footer/project-footer-login.php';
          require_once '../process/logout.php';
        ?>
