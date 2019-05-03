<?php include_once('templates/header.php'); ?>
<?php
include 'database/db.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = "select * from events where id=$id";
  $sql = mysqli_query($c, $q);
  // echo $sql;
  $res = mysqli_fetch_object($sql);
}
?>

<div class="container py-5">
  <div class="row py-2">
    <div class="col-xl-8 col-md-8 mx-auto">
      <img class="d-block w-100" src="<?= $res->image_url; ?>" alt="">
    </div>
  </div>
  <div class="row container py-4">
    <div class="col-6">
      <h4 class="float-left font-weight-light">Harga: Rp. <?= $res->harga; ?> ,-</h4>
    </div>
    <div class="col-6">
      <button class="btn btn-outline-success float-right" data-toggle="modal" data-target="#beliModal">
        Daftar Sekarang
      </button>
    </div>
  </div>
  <div class="row container card shadow-lg rounded py-2">
    <div class="col-xl-8 col-lg-8 col-md-8 py-3">
      <h1 class="display-5">
        <?= $res->title; ?>
      </h1>
      <hr>
      <h4 class="m-0 font-weight-bold">
        Deskripsi
      </h4>
      <p class="text-muted lead">
        <?= $res->description; ?>
      </p>
      <h4 class="m-0 font-weight-bold">
        Tanggal :
      </h4>
      <p class="text-muted lead">
        <?= $res->date_e; ?>
      </p>
      <h4 class="m-0 font-weight-bold">
        Waktu :
      </h4>
      <p class="text-muted lead">
        <?= $res->jam; ?> – <?= $res->jam_akhir; ?>
      </p>
      <h4 class="m-0 font-weight-bold">
        Lokasi :
      </h4>
      <p class="text-muted lead">
        <?= $res->detail_lokasi; ?>, <?= $res->lokasi; ?>
      </p>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="beliModal" tabindex="-1" role="dialog" aria-labelledby="beliModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="beliModalLabel">Beli Tiket ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="actions/beli_tiket.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="seminar_id" value="<?= $id; ?>">
          <div class="form-group">
            <label for="jumlah" class=" text-white">Jumlah Tiket</label>
            <select name="jumlah" id="jumlah" class="form-control">
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email" class=" text-white">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Masukan email anda">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary text-white">Beli Sekarang</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once('templates/footer.php'); ?>