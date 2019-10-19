<?php 
// menambah / memanggil file database.php
include '../databasee.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Read Data</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">SELI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="create.php">formulir <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <h2><center>Data Pembelian Barang</center></h2>
    <a href="/penjualan/create.php">Input Data Siswa</a>
    <table class="table table-danger">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Kategori Produk</th>
      <th scope="col">Jumlah Produk</th>
      <th scope="col">Harga Produk</th>
      <th scope="col">deskripsi</th>
      <th scope="col">sub total</th>
      <th colspan="3">Aksi</th>
    </tr>
  </thead>
        <?php
            $databelanja = new penjualan();
            $no = 1;
            foreach($databelanja->index() as $toko) {
              $total_bayar += $toko['sub_total']
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $toko['nama_produk']; ?></td>
            <td><?php echo $toko['kategori_produk']; ?></td>
            <td><?php echo $toko['jumlah_produk']; ?></td>
            <td><?php echo $toko['harga_produk']; ?></td>
            <td><?php echo $toko['deskripsi']; ?></td>
            <td><?php echo $toko['sub_total']; ?></td>
            <td><a href="show.php?id=<?php echo $toko['id']; ?>">Show</a></td>
            <td><a href="edit.php?id=<?php echo $toko['id']; ?>">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $toko['id']; ?>&aksi=delete" onclick="return confirm ('apakah anda yakin mau menghapus data ini ?');">Delete</a></td>
        </tr>
        <?php }?>
        <tr>
            <th colspan= "8" align="right">Total Pembayaraan</th>
            <th colspan= "3" ><?php echo "Rp." . $total_bayar; ?></th>
        </tr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
