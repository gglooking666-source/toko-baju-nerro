<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];


$status = 'pembeli';

$query = "INSERT INTO tb_user (nama, username, password, alamat, nomor_telepon, status) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "ssssss", $nama, $username, $password, $alamat, $nomor_telepon, $status);

if(mysqli_stmt_execute($stmt)){
    echo "<script>alert('Registrasi berhasil!'); 
    window.location.href='halamanlogin.php';</script>";
}else{
   echo "Error: " . mysqli_error($koneksi);
}
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
