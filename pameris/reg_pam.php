
  <?php 
  $page_title = "register pameris";

  include 'includes/header.php';
  include 'includes/navbar.php';

  if (isset ($_SESSION['full_name'])){
    echo "logged in with name '" .$_SESSION['full_name'] . "'. You can <a href='logout.php'>logout</a>";
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
            <h5 class="card-title text-center">register pameris</h5>
            <form class="form-signin" action="check_reg_pam.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>
              <hr>
              <div class="form-label-group">
                <input type="text" id="inputfullname" name="full_name" class="form-control" placeholder="fullname" required>
                <label for="inputfullname">fullname</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password_pam" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit">register pameris</button>
              <hr class="my-4">
              <a class="d-block text-center mt-2 small" href="log_pam.php">Sign In pameris</a>
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