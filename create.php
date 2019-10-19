<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
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
   <div class="container">
         <div class="row" style="padding:20px;">
           <div class ="col-md-12">
             <center>
             <h2>Assalam Data Diri</h2>
             </center>    
                <div class ="card-header">Pengisian Data Diri</div>
                  <div class="card-body">
                  <!-- Isi Disini -->
                  <form action="proses.php?aksi=tambah" method="post">
                      <div class="form-group">
                      <label for="">Nama Produk</label>
                      <input type="text" name="nama_produk" class="form-control">
                      </div>
                      <div class="form-group">
                      <label for="">Kategori Produk</label>
                      <select name="kategori_produk" class="required" title="harus diisi"required><?php echo $kategori_produk; ?>
                      <option value="kecantikan">kecantikan</option>
                      <option value="Baju anak">Baju Anak</option>
                      <option value="Baju Dewasa">Baju Dewasa</option>
                      <option value="Acecoris">Acecoris</option>
                      <option value="Sepatu">Sepatu</option></select>
                      </td>
                      </div>
                      <div class="form-group">
                      <label for="">Jumlah Produk</label>
                      <input type="number" name="jumlah_produk" class="form-control">
                      </div>
                      <div class="form-group">
                      <label for="">Harga Produk</label>
                      <input type="number" name="harga_produk" class="form-control">
                      </div>
                      <div class="form-group">
                      <label for="">Deskripsi</label>
                      <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                      </div>
                      <br>
                         <div class="form-group">
                         <button type="submit" name="save" class="btn btn-primary">+ Keranjang</button>
                         </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
       </div>
    </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>