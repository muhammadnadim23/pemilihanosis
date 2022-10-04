<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $nisn_ketua = $_POST['nisn_ketua'];
    $nama_ketua = $_POST['nama_ketua'];
    $nisn_wakil = $_POST['nisn_wakil'];
    $nama_wakil = $_POST['nama_wakil'];
    $visi_misi = $_POST['visi_misi'];

$sql = "UPDATE pencalonan SET nama_ketua='$nama_ketua',  nama_wakil='$nama_wakil', visi_misi ='$visi_misi' WHERE nisn_ketua = '$nisn_ketua', nisn_wakil = '$nisn_wakil'";

$query = mysqli_query($connect, $sql);

if($query){
    header('Location: taampilanpencalon.php');
}else{
    header('Location: edit2.php?status=gagal');
}
}

?>