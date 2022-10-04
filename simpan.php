<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nisn_siswa = $_POST['nisn_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $ttl_siswa = $_POST['ttl_siswa']; 
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO pemilihanosis (nisn_siswa, nama_siswa, ttl_siswa, alamat) VALUES('$nisn_siswa','$nama_siswa','$ttl_siswa','$alamat')";

    $query = mysqli_query($connect,$sql);

    if($query){
        header('Location: tampilanpemilihan.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?>