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
    <h3>Data pemilihan</h3>
    <div class="tambah"><h4><a href="pemilihan2.html">[+] tambah baru</a></h4></div>
    <table border "1">
       
     <tr>
            <th>nisn ketua</th>
            <th>nama ketua</th> 
            <th>nisn wakil</th>
            <th>nama wakil</th> 
            <th>visi dan misi</th> 

        </tr>
        <?php
       $sql = "SELECT * FROM pencalonan";
       $query = mysqli_query($connect,$sql);
       
       while($pel = mysqli_fetch_array($query)){
           echo "<tr>";
           echo "<td>".$pel['nisn_ketua']."</td>";
           echo "<td>".$pel['nama_ketua']."</td>";
           echo "<td>".$pel['nisn_wakil']."</td>";
           echo "<td>".$pel['nama_wakil']."</td>";
           echo "<td>".$pel['visi_misi']."</td>";
           echo "<td>";
           echo "<a href='fromedit2.php?nisn_siswa=".$pel['nisn_ketua']."'>Edit</a> | ";
           echo "<a href='hapus2.php?nisn_siswa=".$pel['nisn_ketua']."'>Hapus</a>";
           echo "</tr>";
           echo "</td>";
        }
        ?>
       
       
        
       
</body>
</html>