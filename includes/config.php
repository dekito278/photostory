<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set('Asia/Jakarta');
session_start();

$koneksi = new mysqli("localhost", "root", "", "storyphoto");
if ($koneksi->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}


include 'koneksi.php';
// menyimpan data kedalam variabel
$id              = $_POST['id'];
$prolog          = $_POST['prolog'];
$foto        = $_POST['foto'];
$judul  = $_POST['judul'];
$caption         = $_POST['caption'];
// query SQL untuk insert data
$query="INSERT INTO mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>