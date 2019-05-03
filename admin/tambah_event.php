<?php include 'header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
  <!-- Content Row -->

  <div class="row">
    <!-- Form tambah event -->
    <div class="col-xl-9 col-lg-8 mx-auto">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Event Baru</h6>
        </div>
        <div class="card-body">
          <form class="user">
            <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control form-control-user" name="title" id="title">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="row">
              <div class="col-xl-4 col-lg-4">
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="date" class="form-control" id="tanggal">
                </div>
              </div>
              <div class="col-xl-4 col-lg-4">
                <div class="form-group">
                  <label for="waktu_awal">Jam Mulai</label>
                  <input type="time" name="waktu_awal" class="form-control" id="waktu_awal">
                </div>
              </div>
              <div class="col-xl-4 col-lg-4">
                <div class="form-group">
                  <label for="waktu_akhir">Jam Berakhir</label>
                  <input type="time" name="waktu_akhir" class="form-control" id="waktu_akhir">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="price">Harga</label>
              <input type="number" min="0" class="form-control form-control-user" name="price" id="price">
            </div>
            <div class="form-group">
              <label for="detail">Detail Lokasi</label>
              <textarea name="detail" id="detail" cols="30" rows="7" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Simpan Event
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'footer.php'; ?>