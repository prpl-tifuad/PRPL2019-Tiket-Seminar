<?php include 'header.php'; ?>
<?php include '../database/db.php'; ?>
<?php
$q = "select users.firstname, users.lastname, users.email, events.title as judul, transaksi.jumlah, transaksi.total_harga from transaksi join users on transaksi.id_user = users.id join events on transaksi.id_event = events.id";
$sql = mysqli_query($c, $q);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Event</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
  <!-- Content Row -->

  <div class="row">
    <!-- Form tambah event -->
    <div class="col-xl-11 col-lg-10 mx-auto">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Form Event Baru</h6>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama depan</th>
                <th scope="col">Nama belakang</th>
                <th scope="col">Email</th>
                <th scope="col">Judul Seminar</th>
                <th scope="col">Jumlah tiket</th>
                <th scope="col">Total biaya</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($sql as $data) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $data['firstname']; ?></td>
                  <td><?= $data['lastname']; ?></td>
                  <td><?= $data['email']; ?></td>
                  <td><?= $data['judul']; ?></td>
                  <td><?= $data['jumlah']; ?></td>
                  <td><?= $data['total_harga']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'footer.php'; ?>