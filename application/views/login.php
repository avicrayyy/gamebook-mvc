<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Game-Book.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <!-- <span class="sr-only">(current)</span> -->
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
          <!-- <hr>
          <div class="member">
            <ul class="navbar-nav ml-auto">
              <li>ARE YOU A MEMBER?</li>
              <li class="nav-item">
                <a class="nav-link logo-red" href="login.php">REGISTER / LOGIN</a>
              </li>
            </ul>
            </div>
        </div> -->
      </div>
    </nav>

     <div class="content-login">
        <div class="row h-100">
            <div class="mx-auto my-auto">
                <div class="logo">
                    <h1><a href="index.php" class="main-logo">Game-Book.</a></h1>
                </div>
                <div class="box">
                    <div class="login-box">
                        <form action="checklogin.php" method="POST">
                          <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="Password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-red">Login</button>
                          <hr>
                          <div class="not-member">
                            <p>NOT YET A MEMBER?<br><a class="logo-red" href="register.php">REGISTER NOW!</a></p>
                          </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>