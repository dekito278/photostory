
  <?php 
  $page_title = "registration";

  include 'includes/header.php';

  if (isset ($_SESSION['username'])){
    echo "logged in with name '" .$_SESSION['username'] . "'. You can <a href='logout.php'>logout</a>";
  }
  else {
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <h5 class="card-title text-center">register</h5>
            <form class="form-signin" action="check_registration.php" method="POST">
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
              <a class="d-block text-center mt-2 small" href="login.php">Sign In</a>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php

include 'includes/footer.php';

}

?>