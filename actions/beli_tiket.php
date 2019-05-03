<?php
include '../database/db.php';

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $jumlah = $_POST['jumlah'];
  $seminar_id = $_POST['seminar_id'];

  $q = "select harga from events where id = $seminar_id";
  $sql = mysqli_query($c, $q);
  $result = mysqli_fetch_object($sql);
  $harga = $result->harga;

  $total_harga = $jumlah = $harga;

  $q = "select count(*) as ada, id from users where email='$email'";
  $sql = mysqli_query($c, $q);
  $result = mysqli_fetch_object($sql);


  if (!$result->id) {
    die("Email belum terdaftar, silahkan daftar terlebih dahulu");
  } else {
    $user_id = $result->id;
    $q = "insert into transaksi values ('', $seminar_id, $user_id, $jumlah, $total_harga)";
    if (mysqli_query($c, $q)) {
      header('location:../index.php');
    } else {
      die('Masih ada yang salah');
    }
  }
}