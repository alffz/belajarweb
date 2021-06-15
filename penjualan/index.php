<?php
require "fungsi.php";
$mahasiwa = dataDb("SELECT * FROM mahasiswa  ");
print_r ($mahasiwa);


?>


<html>
    <head>
        <title>Mengambil data dari database</title>
    </head>
    <body>
        <h1>Daftar mahasiswa</h1>
       
        <table border="1" callpadding="10">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>gambar</th>
                <th>Nrp</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $i=1; ?>
            <?php foreach ($mahasiwa as $key)  :   ?>
            <tr>
            <?php echo $key['id'] ?>
                <td> <?Php echo $i; ?></td> 
                <td> <a href="update.php?id=<?php echo $key['id'] ?>">Ubah</a> || <a href="hapus.php?idd=<?php echo $key['id'] ?>">Hapus</a> || <a href="tambah.php">Tambah</a>  </td>
                <td><img src="gambar/<?php echo $key['gambar'] ;?>" width="80" alt=""></td>
                <td> <?php print_r ($key ["nrp"])    ; ?> </td>
                <td> <?php var_dump ($key ["nama"])   ; ?> </td>
                <td> <?php echo $key ["email"]  ; ?> </td>
                <td> <?php echo $key ["jurusan"]; ?> </td>
            </tr>  

            <?php $i++ ;  endforeach;  ?>                    
        </table>
    </body>
</html>