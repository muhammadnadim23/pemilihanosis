<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    header('Location: tampilanpencalonan.php');
}

$nisn_ketua = $_GET['nisn_ketua'];

$sql = "DELETE FROM pencalonan WHERE nisn_ketua='$nisn_ketua'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilanpencalonan.php');
}else{
    header('Location: hapus2.php?status=gagal');
}
?>