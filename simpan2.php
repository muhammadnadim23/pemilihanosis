<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nisn_ketua = $_POST['nisn_ketua'];
    $nama_ketua = $_POST['nama_ketua'];
    $nisn_wakil = $_POST['nisn_wakil'];
    $nama_wakil = $_POST['nama_wakil'];
    $visi_misi = $_POST['visi_misi'];

    $sql = "INSERT INTO pencalonan (nisn_ketua, nama_ketua, nisn_wakil, nama_wakil, visi_misi) VALUES('$nisn_ketua','$nama_ketua','$nisn_wakil','$nama_wakil','$visi_misi')";

    $query = mysqli_query($connect,$sql);

    if($query){
        header('Location: tampilanpencalonan.php');
    }else{
        header('Location: simpan2.php?status=gagal');
    }
}
?>