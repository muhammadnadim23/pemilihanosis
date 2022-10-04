<?php
    include 'koneksi.php';
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
    <h3>Data Pelanggan</h3>
    <h4><a href="pelanggan.html">[+] tambah baru</a></h4>
    <table border "1">
       
     <tr>
            <th>nisn siswa</th>
            <th>nama siswa</th> 
            <th>ttl siswa</th>
            <th>alamat</th>
        </tr>
        <?php
       $sql = "SELECT * FROM pemilihanosis";
       $query = mysqli_query($connect,$sql);
       
       while($pel = mysqli_fetch_array($query)){
           echo "<tr>";
           echo "<td>".$pel['nisn_siswa']."</td>";
           echo "<td>".$pel['nama_siswa']."</td>";
           echo "<td>".$pel['ttl_siswa']."</td>";
           echo "<td>".$pel['alamat']."</td>";

           echo "<td>";
           echo "<a href='fromedit.php?nisn_siswa=".$pel['nisn_siswa']."'>Edit</a> | ";
           echo "<a href='hapus.php?nisn_siswa=".$pel['nisn_siswa']."'>Hapus</a>";
           echo "</tr>";
           echo "</td>";
        }
        ?>
       
       
        
       
</body>
</html>