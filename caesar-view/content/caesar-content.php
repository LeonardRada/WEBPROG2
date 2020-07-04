        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="caesar-view/assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Work Studio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#what">What's Caesar Shift?</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#caesar">Caesar Shift</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- MASTHEAD -->
        <header class="masthead">
          <div class="container">
            <div class="masthead-subheading">Welcome To Caesar Shift Algorithm!</div>
            <div class="masthead-heading text-uppercase">Let's get hackin', shall we?</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#what">Explore</a>
          </div>
        </header>

        <!-- WHAT IS CAESAR SHIFT? -->
        <section class="page-section bg-light" id="what">
          <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">What's Caesar Shift?</h2>
                <h4 class="section-subheading text-muted">A Caesar cipher is one of the simplest and most well-known encryption techniques.
                                                              Named after Julius Caesar, it is one of the oldest types of ciphers and is based
                                                              on the simplest monoalphabetic cipher. It is considered a weak method of cryptography,
                                                              as it is easy to decode the message owing to its minimum security techniques.</h3>
            </div>
          </div>
        </section>

        <!-- CAESAR SHIFT -->
        <section class="page-section" id="caesar">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">Caesar Shift</h3>
              <?php
                require('caesar-view/caesar-shift.php');
              ?>
            </div>
          </div>
        </section>
