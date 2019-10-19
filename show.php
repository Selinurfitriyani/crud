<?php 
include '../databasee.php';
$databelanja = new penjualan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
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
    <?php 
        foreach($databelanja->show($_GET['id']) as $toko)
        {
            $id = $toko['id'];
            $nama_produk = $toko['nama_produk'];
            $kategori_produk = $toko['kategori_produk'];
            $jumlah_produk = $toko['jumlah_produk'];
            $harga_produk =$toko['harga_produk'];
            $deskripsi = $toko['deskripsi'];
        }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="post">
        <table class="table table-danger">
        <thead>
                <tr>
                    <th>Nama Produk</th>
                    <td><input type="text" name="nama_produk" value="<?php echo $nama_produk; ?>"readonly></td>
                </tr>
                <tr>
                    <th>Kategori Produk</th>
                    <td><input type="text" name="kategori_produk" value="<?php echo $kategori_produk; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Jumlah Produk</th>
                    <td><input type="number" name="jumlah_produk" value="<?php echo $jumlah_produk; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Harga Produk</th>
                    <td><input type="number" name="harga_produk" value="<?php echo $harga_produk; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td><textarea name="deskripsi" cols="40" required><?php echo $deskripsi; ?></textarea></td>
                </tr>
                <thead>
            </table>
        </form>
    </fieldset>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>