<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<?php
include '../database/db.php';
if (isset($_POST['register'])) {
  $first = $_POST['firstname'];
  if ($_POST['lastname']) $last = $_POST['lastname'];
  else $last = "";
  $email = $_POST['email'];
  $password = $_POST['password'];
  $pass = md5($password);

  $q = "insert into users values('', '$first', '$last', '$email', '$pass')";
  if (mysqli_query($c, $q)) {
    echo 'your account registered';
    echo "<script>
            Swal.fire('Yeah!', 'Your account registered!', 'success');
          </script>";

    header("Refresh:5; url=../index.php", true, 303);
  } else {
    echo "<script>
            Swal.fire('Ouch!', 'Something wrong with your account!', 'error');
          </script>";

    header("Refresh:5; url=../index.php", true, 303);
  }
}

?>