<?php include_once('templates/header.php'); ?>
<div id="carouselSatu" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="opacity: .8 !important;" width="200px" height="200px" src="gambar/s1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="opacity: .8 !important;" width="200px" height="200px" src="gambar/s2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="opacity: .8 !important;" width="200px" height="200px" src="gambar/s3.jpg" alt="Third slide">
    </div>
  </div>
</div>

           <div class="container my-4">
  <form action="events.php" method="get" onsubmit="return isValid()">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="form-group">
          <label for="category" class="text-muted">Event Category</label>
          <select class="form-control" name="category" id="category">
            <option value="all">Select All</option>
            <option value="education">Education</option>
            <option value="technology">Technology</option>
            <option value="healthy">Health and Beauty</option>
          </select>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="form-group">
          <label for="location" class="text-muted">Location</label>
          <select name="location" id="location" class="form-control">
            <option value="jabodetabek">All Location</option>
            <option value="jakarta">Jakarta</option>
            <option value="bogor">Bogor</option>
            <option value="depok">Depok</option>
            <option value="tangerang">Tangerang</option>
            <option value="bekasi">Bekasi</option>
          </select>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="form-group">
          <label for="date" class="text-muted">Date</label>
          <input type="date" name="date" id="date" class="form-control">
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <button type="submit" class="btn btn-primary btn-block float-right" style="margin-top: 32px">Search Filter</button>
      </div>
    </div>
  </form>
</div>

<script>
  let category = document.getElementById('category');
  let locate = document.getElementById('location');
  let date_value = document.getElementById('date');

  var isValid = function() {
    if (category.value === '' || locate.value === '') {
      Swal.fire('Oops!', 'Any content filter is empty!', 'warning');
      return false;
    }
    return true;
  }
</script>
<?php
include 'database/db.php';
$q = "select * from events";
$sql = mysqli_query($c, $q);
?>

<div class="container-fluid">
  <div class="row">
    <?php foreach ($sql as $data) : ?>
      <div class="col-lg-3 col-md-3 my-2">
        <a style="color: black; text-decoration: none;" href="detail_event.php?id=<?= $data['id']; ?>">
          <div class="card" style="width: 18rem;">
            <img src="<?= $data['image_url'] ?>" class="card-img-top" alt="this is image">
            <div class="card-body">
              <div class="card-text">
                <h6><?= $data['title']; ?></h6>
                <p class="text-muted" style="font-size: .9em;">
                  <?= $data['date_e'] . ', ' . $data['jam']; ?>
                  <br>
                  <?= $data['lokasi']; ?>
                  <br>
                  <?php
                  if ($data['harga'] == 0) echo 'Gratis';
                  else echo 'Rp ' . $data['harga'] . ',-';
                  ?>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach ?>
  </div>
</div>
<div class="container mt-4">
  <p class="text-center">
    <a href="#!">See More</a>
  </p>
</div>
<?php include_once('templates/footer.php'); ?>