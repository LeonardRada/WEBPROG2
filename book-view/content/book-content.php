        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="book-view/assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Work Studio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#search">Search Book</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#book">Add Book</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#author">Add Author</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- MASTHEAD -->
        <header class="masthead">
          <div class="container">
            <div class="masthead-subheading">Welcome To The Book Catalog!</div>
            <div class="masthead-heading text-uppercase">Your imagination is your only limit</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#search">Explore</a>
          </div>
        </header>

        <!-- SEARCH BOOK -->
        <section class="page-section bg-light" id="search">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">SEARCH BOOK</h3>
              <?php
                require('book-view/index.php');
              ?>
            </div>
          </div>
        </section>

        <!-- ADD BOOK -->
        <section class="page-section" id="book">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">ADD BOOK</h3>
              <?php
                require('book-view/book-add.php');
              ?>
            </div>
          </div>
        </section>

        <!-- ADD AUTHOR -->
        <section class="page-section bg-light" id="author">
          <div class="container">
            <div class="text-center">
              <h3 class="section-heading text-uppercase">ADD AUTHOR</h3>
              <?php
                require('book-view/author-add.php');
              ?>
            </div>
          </div>
        </section>
