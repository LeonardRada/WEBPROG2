        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="fibonacci-view/assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Work Studio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#what">What's Fibonacci Sequence?</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#fibonacci">Fibonacci Sequence</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- MASTHEAD -->
        <header class="masthead">
          <div class="container">
            <div class="masthead-subheading">Welcome To Fibonacci Sequence Algorithm!</div>
            <div class="masthead-heading text-uppercase">To infinity and beyond!</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#what">Explore</a>
          </div>
        </header>

        <!-- WHAT IS FIBONACCI SEQUENCE? -->
        <section class="page-section bg-light" id="what">
          <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">What's Fibonacci Sequence?</h2>
                <h4 class="section-subheading text-muted">The Fibonacci sequence is a sequence of numbers in which each successive number in the
                                                              sequence is obtained by adding the two previous numbers in the sequence. The sequence
                                                              is named after the Italian mathematician Fibonacci. The sequence starts with zero and one,
                                                              and proceeds forth as 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55 and so on.</h3>
            </div>
          </div>
        </section>

        <!-- FIBONACCI SEQUENCE -->
        <section class="page-section" id="fibonacci">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">Fibonacci Sequence</h3>
              <?php
                require('fibonacci-view/fibonacci.php');
              ?>
            </div>
          </div>
        </section>
