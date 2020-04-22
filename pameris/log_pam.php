<?php

$page_title = 'Login pameris';


include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/m_popup_log.php';
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
            <h5 class="card-title text-center">Sign In pameris</h5>
            <form class="form-signin" action="pameris/check_log_pam.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit">Sign in pameris</button>
              <hr class="my-4">
              <a class="d-block text-center mt-2 small" href="pameris/reg_pam.php">register pameris</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include 'includes/footer.php';?>