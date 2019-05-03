<?php include_once('templates/header.php'); ?>
<div class="modal-dialog text-center">
  <div class="col-sm-8 main-section">
    <div class="modal-content">
      <div class="col-12 user-img">
        <img src="gambar/login.png" alt="disini gambarnya">
      </div>
      <form action="actions/login.php" method="post" class="col-12">
        <div class="form-group fg">
          <input type="text" name="email" class="form-control" placeholder="Masukan email">
        </div>
        <div class="form-group fg">
          <input type="password" name="password" class="form-control" placeholder="Masukan kata sandi">
        </div>
        <button type="submit" class="btn tombol">
          <i class="fas fa-sign-in-alt"></i>&nbsp;Masuk
        </button>
      </form>
      <div class="col-12 forgot">
        <a href="#">Lupa Kata sandi ?</a>
      </div>
    </div>
  </div>
</div>
<!-- <div class="container">
  <div class="row py-5">
    <div class="col-lg-4 mx-auto">
      <form action="actions/login.php" method="post" onsubmit="return isValid()">
        <div class="form-group">
          <label for="email" class="text-muted">Email Address</label>
          <input type="email" class="form-control" name="email" id="email" autofocus placeholder="Type your email">
        </div>
        <div class="form-group">
          <label for="password" class="text-muted">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Type your password">
        </div>
        <div class="form-group">
          <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button>
        </div>
      </form>
    </div>
  </div>
</div> -->

<script>
  let email = document.getElementById('email');
  let password = document.getElementById('password');

  const isValid = () => {
    if (email.value === "" || password.value === "") {
      Swal.fire('Ops!', 'The form must be filled in', 'error');
      return false;
    } else {
      return true;
    }
  }
</script>

<?php include_once('templates/footer.php'); ?>