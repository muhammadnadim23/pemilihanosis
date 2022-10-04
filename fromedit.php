<?php
include 'koneksi.php';

$nisn_siswa =$_GET['nisn_siswa'];
$sql = "SELECT * FROM pemilihanosis WHERE nisn_siswa='$nisn_siswa'";
$query = mysqli_query($connect,$sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak di temukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h3>edit data pelanggan</h3>
        <p><label>nisn siswa : <input value="<?php echo $pel['nisn_siswa']?>" required="required" type="hidden" name="nisn_siswa"></label></p>
        <p><label>nama siswa : <input value="<?php echo $pel['nisn_siswa']?>" required="required" type="text" name="nama_siswa"></label></p>
        <p><label>ttl siswa: <input value="<?php echo $pel['nisn_siswa']?>" required="required" type="text" name="ttl_siswa"></label></p>
        <p><label>alamat : <textarea  required="required" name="alamat" cols="30" rows="5"><?php echo $pel['nisn_siswa']?></textarea></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>