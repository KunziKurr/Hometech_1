<?php include 'header_template.php'; 

if (isset($_POST['admin-login'])) {
      header('Location: ../index.php');
} else {
  # code...
}


?>

  <div class="login_container">
    <div class="login_container__header">
      <h6>Login to Continue</h6>
    </div>
      <div class="login_container__form">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
          <label for="email" value="" class="form-control-label">Email address</label>
          <input type="text" required placeholder="Enter your Email..." name="email" class="form-control-input">
            <br>
          <label for="password" class="form-control-label">Password</label>
          <input type="password" value="" required placeholder="Enter Password" name="password" class="form-control-input">
          <br>
          <button type="submit" class="btn btn-green-blue" name="admin-login">Sign in</button>
        </form>
        <a href="#" class="login_container__form-forgot">
          Forgot password ?
</a>
      </div>
  </div>

<?php include 'footer_template.php'; ?>
