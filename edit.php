<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

$nisn_siswa = $_POST['nisn_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$ttl_siswa = $_POST['ttl_siswa']; 
$alamat = $_POST['alamat'];
$no_pemilihan = $_POST['n0_pemilihan'];

$sql = "UPDATE pemilihanosis SET nama_siswa='$nama_siswa',  ttl_siswa='$ttl_siswa', alamat ='$alamat', no_pemilihan ='$no_pemilihan' WHERE nisn_siswa = '$nisn_siswa'";

$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilanpemilihan.php');
}else{
    header('Location: edit.php?status=gagal');
}
}

?>