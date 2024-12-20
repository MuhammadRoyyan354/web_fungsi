<?php
error_reporting(0);
$bil1 = 32;
$bil2 = 4;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
    rel="stylesheet"
    href="./css/bootstrap-5.3.1-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Relasi dan Fungsi</a>
      <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link btn me-2 mb-1" href="index.php#video">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn me-2 mb-1" href="index.php#materi">Materi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn me-2 mb-1" href="index.php#kalkulator">Kalkulator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn me-2 mb-1" href="index.php#soal">Soal</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="video">
    <div class="container mt-5">
      <div class="l-1">
        <div class="l-2 text-center mb-2">
          <label for="" class="fw-semibold fs-4">Relasi</label>
          <label for="" class="fw-semibold mt-3">Link Youtube Relasi</label>
          <a href="https://youtu.be/21z64T1r12g" target="_blank" class="fw-semibold text-primary">Silahkan Klik Disini</a>
        </div>
        <div class="l-2 text-center">
          <label for="" class="fw-semibold fs-4">Fungsi</label>
          <label for="" class="fw-semibold mt-3">Link Youtube Fungsi</label>
          <a href="https://youtu.be/W_545mfDfFI" target="_blank" class="fw-semibold text-primary">Silahkan Klik Disini</a>
        </div>
      </div>
    </div>
  </section>

  <section id="materi">
    <div class="container mt-5">
      <div class="l-1">
        <div class="l-2">
          <a href="./materi/presentasirelasi (1).pptx" onclick="href='./materi/presentasirelasi (1).pptx'" class="btn">Download Materi</a>
        </div>
      </div>
    </div>
  </section>

  <section id="kalkulator">
    <div class="container mt-5">
      <div class="l-1">
        <div class="l-2">
          <h3 class="fw-semibold text-center">Kalkulator</h3>
          <form action="./processing/port-1.php" method="post">
            <label for="jumlah" class="fw-semibold text-white fs-6">Jumlah Anggota</label>
            <input
              type="number"
              name="jumlah"
              placeholder="Masukkan Jumlah Anggota Himpunan"
              class="form-control mb-2 fw-semibold"
              required />
            <input type="submit" value="Mulai" name="mulai" class="btn mb-2" />
          </form>

          <form action="./processing/port-1.php?jumlah=<?= $_GET['jumlah'] ?>
          " method="post">
            <input type="number" name="bil1" placeholder="Masukkan Bilangan 1" class="form-control mb-2 fw-semibold" required>
            <input type="number" name="bil2" placeholder="Masukkan Bilangan 2" class="form-control mb-2 fw-semibold" required>
            <input type="submit" value="Tambahkan" name="tambahkan" class="btn mb-2">
          </form>

          <form method="post">
            <?php
            $new;
            for ($i = 0; $i < $_GET['jumlah']; $i++) {
            ?>
              <input
                type="number"
                name="anggota<?= $i ?>"
                placeholder="Masukkan anggota ke-<?= $i ?>"
                class="form-control mb-2 fw-semibold"
                value="<?= $new[$i] = $_POST['anggota' . $i] ?>"
                required />
            <?php } ?>
            <input type="hidden" name="jumlah" value="<?= $_GET['jumlah'] ?>">
            <p></p>
            <input
              type="submit"
              value="Generate"
              name="generate"
              class="btn mb-2" />
            <p></p>
            <label class="fw-semibold text-white fs-5 mb-2">Hasil Dari Generate</label>
            <?php
            if (isset($_POST['generate']) || $_GET['jumlah'] != '') {
              $bil1 = $_GET['bil1'];
              $bil2 = $_GET['bil2'];
              header('location:index.php#kalkulator');
              for ($i = 0; $i < $_GET['jumlah']; $i++) {

                $new[$i] = $_POST['anggota' . $i];
                $hasil[$i] = $new[$i] + $bil1 - $bil2;

            ?>
                <p class="fw-semibold text-white mb-1 fs-6">
                  <?= $i + 1 . ". " . $new[$i] . ' + ' . $bil1 . ' - ' . $bil2 . ' = ' . $hasil[$i] ?>
                </p>
              <?php } ?>
            <?php } ?>
            <input type="submit" value="Reset" name="reset" class="btn-reset mt-2 mb-1">
          </form>
        </div>
      </div>
    </div>
  </section>

  <section id="soal">
    <div class="container mt-5">
      <div class="l-1">
        <div class="l-2">
          <h3 class="fw-semibold text-center">Soal</h3>
          <form method="post">
            <span class="fw-semibold">
              <?php $x = 0;
              $soal = 'f(x) = x + ' . $bil1 . ' - ' . $bil2 . ' = ';
              $hasil = $x + $bil1 - $bil2;
              $pesan = 'karena ' . $x . ' + ' . $bil1 . ' = ' . $x + $bil1 . ' dan ' . $x + $bil1 . ' - ' . $bil2 . ' = ' . $hasil;
              ?>
              1. <?= $soal ?>
              <p>x = <?= $x ?></p>
            </span>
            <input type="number" name="jawaban" placeholder="Masukkan Jawaban" class="form-control fw-semibold mb-2">
            <input type="submit" value="Cek Jawaban" name="cek1" class="btn">
            <?php
            if (isset($_POST['cek1'])) {
              if ($_POST['jawaban'] == $hasil) {

                echo 'jawaban anda benar ' . $pesan;
              } else if ($_POST['jawaban'] != "" && $_POST['jawaban']  !=  $hasil) {
                echo 'jawaban anda salah ' . $pesan;
              }
            }
            ?>
          </form>
          <form method="post">
            <span class="fw-semibold">
              <?php $x = 2;
              $soal = 'f(x) = x + ' . $bil1 . ' - ' . $bil2 . ' = ';
              $hasil = $x + $bil1 - $bil2;
              $pesan = 'karena ' . $x . ' + ' . $bil1 . ' = ' . $x + $bil1 . ' dan ' . $x + $bil1 . ' - ' . $bil2 . ' = ' . $hasil;
              ?>
              <?= $x ?> <?= $soal ?>
              <p>x = <?= $x ?></p>
            </span>
            <input type="number" name="jawaban" placeholder="Masukkan Jawaban" class="form-control fw-semibold mb-2">
            <input type="submit" value="Cek Jawaban" name="cek2" class="btn">
            <?php
            if (isset($_POST['cek2'])) {
              if ($_POST['jawaban'] == $hasil) {

                echo 'jawaban anda benar ' . $pesan;
              } else if ($_POST['jawaban'] != "" && $_POST['jawaban']  !=  $hasil) {
                echo 'jawaban anda salah ' . $pesan;
              }
            }
            ?>
          </form>
          <form method="post">
            <span class="fw-semibold">
              <?php $x = 3;
              $soal = 'f(x) = x + ' . $bil1 . ' - ' . $bil2 . ' = ';
              $hasil = $x + $bil1 - $bil2;
              $pesan = 'karena ' . $x . ' + ' . $bil1 . ' = ' . $x + $bil1 . ' dan ' . $x + $bil1 . ' - ' . $bil2 . ' = ' . $hasil;
              ?>
              <?= $x ?> <?= $soal ?>
              <p>x = <?= $x ?></p>
            </span>
            <input type="number" name="jawaban" placeholder="Masukkan Jawaban" class="form-control fw-semibold mb-2">
            <input type="submit" value="Cek Jawaban" name="cek3" class="btn">
            <?php
            if (isset($_POST['cek3'])) {
              if ($_POST['jawaban'] == $hasil) {

                echo 'jawaban anda benar ' . $pesan;
              } else if ($_POST['jawaban'] != "" && $_POST['jawaban']  !=  $hasil) {
                echo 'jawaban anda salah ' . $pesan;
              }
            }
            ?>
          </form>
          <form method="post">
            <span class="fw-semibold">
              <?php $x = 4;
              $soal = 'f(x) = x + ' . $bil1 . ' - ' . $bil2 . ' = ';
              $hasil = $x + $bil1 - $bil2;
              $pesan = 'karena ' . $x . ' + ' . $bil1 . ' = ' . $x + $bil1 . ' dan ' . $x + $bil1 . ' - ' . $bil2 . ' = ' . $hasil;
              ?>
              <?= $x ?> <?= $soal ?>
              <p>x = <?= $x ?></p>
            </span>
            <input type="number" name="jawaban" placeholder="Masukkan Jawaban" class="form-control fw-semibold mb-2">
            <input type="submit" value="Cek Jawaban" name="cek4" class="btn">
            <?php
            if (isset($_POST['cek4'])) {
              if ($_POST['jawaban'] == $hasil) {

                echo 'jawaban anda benar ' . $pesan;
              } else if ($_POST['jawaban'] != "" && $_POST['jawaban']  !=  $hasil) {
                echo 'jawaban anda salah ' . $pesan;
              }
            }
            ?>
          </form>
          <form method="post">
            <span class="fw-semibold">
              <?php $x = 5;
              $soal = 'f(x) = x + ' . $bil1 . ' - ' . $bil2 . ' = ';
              $hasil = $x + $bil1 - $bil2;
              $pesan = 'karena ' . $x . ' + ' . $bil1 . ' = ' . $x + $bil1 . ' dan ' . $x + $bil1 . ' - ' . $bil2 . ' = ' . $hasil;
              ?>
              <?= $x ?>. <?= $soal ?>
              <p>x = <?= $x ?></p>
            </span>
            <input type="number" name="jawaban" placeholder="Masukkan Jawaban" class="form-control fw-semibold mb-2">
            <input type="submit" value="Cek Jawaban" name="cek5" class="btn">
            <?php
            if (isset($_POST['cek5'])) {
              if ($_POST['jawaban'] == $hasil) {

                echo 'jawaban anda benar ' . $pesan;
              } else if ($_POST['jawaban'] != "" && $_POST['jawaban']  !=  $hasil) {
                echo 'jawaban anda salah ' . $pesan;
              }
            }
            ?>
          </form>
          <?= $skorAkhir ?>
        </div>
      </div>
    </div>
  </section>
  <script src="./css/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>