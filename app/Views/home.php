<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    home
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!-- Bagian header, seperti judul, logo, dan menu navigasi bisa ditempatkan di sini -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url("/"); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url("/input"); ?>">Input</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Pesan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Konten utama dari halaman Anda akan ditempatkan di sini -->
    <div class="container">
      <div class="row">
        <?php
        foreach ($barang as $item) {
          $nama = $item['nama'];
          $harga = $item['harga'];
          $produksi = $item['produksi'];
        ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://img.freepik.com/free-photo/blue-splash-text-blot-against-yellow-background_23-2147910131.jpg?w=826&t=st=1699435418~exp=1699436018~hmac=a3e66304f1e46e88336e739fa71183917869f8327fb3478af138f5ca6cb4a5d2" class="card-img-top" alt="<?php echo $nama; ?> " style="max-width: 100%; max-height: 200px;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nama; ?></h5>
                <p class="card-text">Harga: Rp.<?php echo $harga; ?></p>
                <p class="card-text">Produksi: <?php echo $produksi; ?></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </main>

  <footer style="text-align: center; position: relative; bottom: 0; width: 100%;">
    <p>&copy; 2023 Redswift. Hak Cipta Dilindungi Undang-Undang.</p>
  </footer>
</body>

</html>