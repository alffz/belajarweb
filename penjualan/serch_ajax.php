<?php
require 'fungsi.php';


// tangkap apa yang diketik di kolom pencarian dgn serch_ajax.php?cari= pada javascript
$cari      = $_GET['cari'];// berasal dari serch_ajax.php?cari=
$mahasiswa = tampil("SELECT * FROM mahasiswa WHERE nama like '%$cari%' or jurusan like '%$cari%' ");
var_dump ($mahasiswa);
?>

</table>
    <br><br>
    

    <div id='tabel'>
        <table border="1">
            <tr> 
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Nrp</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Gambar</th>
            </tr>    
            <?php $i=1; foreach ($mahasiswa as $key) : ?>
            <tr> 
                <TD><?= $i ?></TD>
                <td> <a href="hapus1.php?delet=<?php echo $key['id']; //if(hapus ($sumber)){echo 'data terhapus';}; ?>">hapus</a> || <a href="update.php?ubah=<?= $key['id'] ?>">ubah</a>  </td>
                <td><?= $key ['nama'] ?> </td>
                <td><?= $key ['nrp'] ?> </td>
                <td><?= $key ['jurusan'] ?> </td>
                <td><?= $key ['email'] ?> </td>
                <td><img src="gambar/<?= $key['gambar'] ?>" alt="gambar" width='100'> </td>
            </tr>  
            <?php $i++; endforeach  ?>
        </table>
    </div>