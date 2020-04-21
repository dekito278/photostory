
  <?php 
  $page_title = "registration";

  include 'includes/header.php';
  include 'includes/navbar.php';
  if (isset ($_SESSION['username'])){
    echo "logged in with name '" .$_SESSION['username'] . "'. You can <a href='logout.php'>logout</a>";
  }
  else {
  ?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <br>
      <br>
      <br>
      <br>
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <h5 class="card-title text-center">register</h5>
            <form class="form-signin" action="check_register.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit">register</button>
              <hr class="my-4">
              <a class="d-block text-center mt-2 small" href="login.php">Sign In</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>

  <?php

include 'includes/footer.php';

}

?>