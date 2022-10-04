<?php
include 'koneksi.php';
  
$nisn_ketua = $_GET['nisn_ketua'];
$sql = "SELECT * FROM pencalonan WHERE nisn_ketua ='$nisn_ketua'";
$query = mysqli_query($connect,$sql);
$pel = mysqli_fetch_array($query);

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
    <form action="edit2.php" method="post">
        <h3>edit data </h3>
        <p><label>nisn ketua : <input value="<?php echo $pel['nisn_ketua']?>" required="required" type="hidden" name="nisn_ketua"></label></p>
        <p><label>nama ketua : <input value="<?php echo $pel['nisn_ketua']?>" required="required" type="text" name="nama_ketua"></label></p>
        <p><label>nisn wakil : <input value="<?php echo $pel['nisn_ketua']?>" required="required" type="hidden" name="nisn_wakil"></label></p>
        <p><label>nama wakil : <input value="<?php echo $pel['nisn_ketua']?>" required="required" type="text" name="nama_wakil"></label></p>
        <p><label>visi-misi : <textarea  required="required" name="visi_misi" cols="30" rows="5"><?php echo $pel['nisn_ketua']?></textarea></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>