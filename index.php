<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) {redirect('home.php', false);}
?>

<body>
<?php include_once('layouts/header.php'); ?>
<div class="login-page" style="width: 50%;">
<img class="img-center" src="uploads/users/login-image.jpg" alt="" style="width: 100%;">
<div class="text-center">
       <h1>Log In</h1>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Login</button>
        </div>
    </form>
</div>
</body>
<?php include_once('layouts/footer.php'); ?>
