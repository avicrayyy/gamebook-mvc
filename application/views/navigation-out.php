<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Game-Book.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ">
            <li class="nav-item <?php if($isHome){ echo "active";} ?>">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="learn.php">Learn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="games.php">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          <hr>
          <?php if($isNotLogScreen): ?>
          <div class="member">
            <ul class="navbar-nav ml-auto">
              <li>ARE YOU A MEMBER?</li>
              <li class="nav-item">
                <a class="nav-link logo-red" href="index.php/login">REGISTER / LOGIN</a>
              </li>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </nav>