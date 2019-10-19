<?php 
include '../databasee.php';
$databelanja = new penjualan();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $jumlah_produk = $_POST['jumlah_produk'];
    $harga_produk = $_POST['harga_produk'];
    $deskripsi = $_POST['deskripsi'];
    $sub_total = $jumlah_produk * $harga_produk;
}
if($aksi == "tambah")
{
    $databelanja->create($nama_produk,$kategori_produk,$jumlah_produk,$harga_produk,$deskripsi,$sub_total);
    header("location:index.php");
}elseif($aksi == "update")
{
    $databelanja->update($id,$nama_produk,$kategori_produk,$jumlah_produk,$harga_produk,$deskripsi,$sub_total);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $databelanja->delete($_GET['id']);
    header("location:index.php");
}
?>