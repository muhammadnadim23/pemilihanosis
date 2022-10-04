<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    header('Location: tampilanpemilihan.php');
}

$nisn_siswa = $_GET['nisn_siswa'];

$sql = "DELETE FROM pemilihanosis WHERE nisn_siswa='$nisn_siswa'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilanpemilihan.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>