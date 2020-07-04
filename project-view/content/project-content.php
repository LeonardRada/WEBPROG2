        <?php
          include('project-view/modal/login-modal.php');
          include('project-view/modal/signup-modal.php');
         ?>

        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="project-view/assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Work Studio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#loginModal" >Login</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#signupModal" >Sign-Up</a></li>
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
                require('project-view/card/card-fruits.php');
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
                require('project-view/card/card-vegetables.php');
              ?>
            </div>
          </div>
        </section>
