<?php include_once('templates/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
      <p align="center"><img src="gambar/login.png"></p>
    <p><h2 align="center">Create Your Account</h2></p>
</body>
</html>
<div class="container">
  <div class="row py-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <form action="actions/register.php" method="post" onsubmit="return isValid()">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <input type="text" class="form-control" name="firstname" id="firstname" autofocus placeholder="First Name">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <button type="submit" name="register" class="btn btn-success btn-block">Sign Up</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3"></div>
  </div>
</div>

<script>
  let first = document.getElementById('firstname');
  let email = document.getElementById('email');
  let password = document.getElementById('password');

  const isValid = () => {
    if (first.value === "" || email.value === "" || password.value === "") {
      Swal.fire('Ops!', 'The form must be filled in', 'error');
      return false;
    } else {
      return true;
    }
  }
</script>

<?php include_once('templates/footer.php'); ?>