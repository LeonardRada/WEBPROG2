        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="bobs-view/assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Work Studio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#order">Order</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#price">Price List</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#freight">Freight Cost</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- MASTHEAD -->
        <header class="masthead">
          <div class="container">
            <div class="masthead-subheading">Welcome To Bob's Auto Parts!</div>
            <div class="masthead-heading text-uppercase">Watcha Lookin' For?</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#order">Explore</a>
          </div>
        </header>

        <!-- ORDER FORM -->
        <section class="page-section bg-light" id="order">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">Order</h3>
              <?php
                require('bobs-view/order-form.php');
              ?>
            </div>
          </div>
        </section>

        <!-- PRICE LIST -->
        <section class="page-section" id="price">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">Price List</h3>
              <?php
                require('bobs-view/price-list.php');
              ?>
            </div>
          </div>
        </section>

        <!-- FREIGHT COST -->
        <section class="page-section bg-light" id="freight">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">Freight Cost</h3>
              <?php
                require('bobs-view/freight-cost.php');
              ?>
            </div>
          </div>
        </section>
