<?php
include 'config.php';
$id              = $_POST['id'];
$prolog          = $_POST['prolog'];
$foto        = $_POST['foto'];
$judul  = $_POST['judul'];
$caption         = $_POST['caption'];
// query SQL untuk insert data
$query="INSERT INTO upload_photo SET id='$id',prolog='$prolog',foto='$foto',judul='$judul',caption='$caption'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:upload.php");
$target_dir = "databasephoto/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Maaf, file sudah ada.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Maaf, ukuran foto anda terlalu besar.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Maaf, hanya JPG, JPEG, PNG & GIF File yang dibolehkan.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Maaf, file Anda tidak diunggah.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Maaf, ada kesalahan saat mengunggah file Anda.";
    }
}
?>