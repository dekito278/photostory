<?php

$page_title = 'Login';


include 'includes/header.php';
include 'includes/navbar.php';

?>
<head>

</head>

<body>
  
  <div class="container">
    <div class="row">
      
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <br>
      <br>
      <br>
      <br>
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="check_login.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit">Sign in</button>
              <hr class="my-4">
              <a class="d-block text-center mt-2 small" href="register.php">register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include 'includes/footer.php';?>