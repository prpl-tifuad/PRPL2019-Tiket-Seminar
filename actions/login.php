<?php
include "../database/db.php";
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $pass = md5($password);

  $q = "select * from users where email='$email' and password='$pass'";
  $sql = mysqli_query($c, $q);
  $res = mysqli_fetch_object($sql);

  if ($res->id) {
    echo 'berhasil login, tunggu 5 detik!';
    if ($email == "ftenten302@gmail.com" || $email == "insankamil@gmail.co") {
      header("Refresh:5; url=../admin/index.php", true, 303);
    } else {
      $GLOBALS['login'] = true;
      header("Refresh:5; url=../index.php", true, 303);
    }
  } else {
    echo "masih gagal nich<br>";
    header("Refresh:5; url=../index.php", true, 303);
  }
}