<?php

// membuat koneksi ke database
    $koneksi = mysqli_connect('localhost','root','','crud');
    require 'fungsi.php';
    $mhs = tampil("SELECT * FROM mahasiswa limit 3");
    if(isset($_COOKIE["login"])){
        if($_COOKIE["login"]=='tupe'){
          $_SESSION['user'] = true;
        }
      }
    // jika user belum login    
    if (isset($_SESSION['user'])==false){
       echo "<script> 
            alert('anda harus login ');
            document.location.href ='login.php' ;
        </script> ";
        exit;
    }
    var_dump ($_SESSION);
    echo '<br>';
    var_dump ($_COOKIE);
    echo '<br>';
    // uji apakah koneksi berhasil
    if ($koneksi){
        echo 'konksi berhasil';
    }

    // ambil data dari tabel mahasiswa2  dgn syntax sql
    $limit = 100;
     $data = "SELECT * FROM mahasiswa ORDER BY id asc limit  $limit";

    // eksekusi query koneksi dan syntax sql
     $hasil = mysqli_query($koneksi,$data);
    
    /* sebelum menampilkannya data dari database wajib di fron end data wajib diubah ke bentuk array asosiativ 
      menggunakan mysqli_fetch_assoc
    */
   // $hasildb = mysqli_fetch_assoc($hasil); // $hasildb sudah berupa asosiativ array yang memiliki $key dan $value
    // menampung nilai dalam variabel array kosong
    

    /*print_r ($hasil);
    echo '<br>';
    var_dump($hasildb);// multidimensi asosiativ array   
       array(4) { ["id"]=> "0" ["nama"]=>"riska" ["alamat"]=>"dairi" ["semester"]=>"4" }
     array (4) maksudnya jumlah field yg ada di database yaitu ID NAMA ALAMAT dan SEMESTER 
    */
    // tampung dahulu nilainya di array kosong ($fixdata) agar bisa di ambil $key nya menggunakan foreach 
    $fixdata = [];
    while ($hasildb = mysqli_fetch_assoc($hasil)){
        $fixdata [] = $hasildb;
        
    }// sampai sini $fixdata bersifat asosiatif array siap digunakan untuk foreach data ke frontend  

    // membungkus query dalam fungsi sehinnga bisa digunakan berkali2, fungsi ini == cara diatas cuman lebih rapi dan efektif

    $mhs = tampil("SELECT*FROM mahasiswa  limit 5");
 

?>


<html lang[]="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <a href="logout.php">keluar</a>
    <h2>Menampilkan data dari Database</h2>
    <p>menggunakan mysqli_fetch_assoc yang menghasilkan output asosiativ array</p>
    <p><b>ditampilkan tanpa menggunakan fungsi</b></p>
    <form action="" method='get'>
        <label for="">nama</label>
        <input type="checkbox" name='limit' >     
    </form>
    <table border="1" > 
    <!-- gimana caranya subtitusi ORDER BY nama dan LIMIT angka -->
    <!-- tambah data -->
        <a href="tambah.php">tambah data</a>
        <!-- <form action="" method='post'>
            <label for="limit"></label>
            -->
        
        
        </form>
        <tr> 
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
            
        <!-- menampung data dari database  -->
        <?php $i=1;  foreach ($fixdata as $key) :  ?>
        <tr>
            <!-- masukkan key masing2 field database -->
            <td > <?php echo $i; ?></td>
            <td> <a href="hapus1.php?delet=<?= $key['id'] ?> ">Hapus</a> -- <a href="update.php?ubah=<?= $key['id'] ?>">Updata</a></td>
            <td> <img src="gambar/<?= $key['gambar'] ?>" alt="gambar" width='100'></td>  <!-- ?ubah= / ubah adalh subtitusi untuk $_GET di halaman update.php -->
            <td><?php echo $key['nrp'] ?></td> 
            <td><?php echo $key['nama'] ?></td>
            <td><?php echo $key['email'] ?></td>
            <td><?php echo $key['jurusan'] ?></td>
        </tr>
        <?php $i++; endforeach   ;  // gimana caranya agar notifikas data terhapus berada dihalaman yg saman        ?>       
        
        
    </table>
    <br><br>
    <p><b>ditampilkan menggunakan fungsi tampil()</b></p>
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
        <?php $i=1; foreach ($mhs as $key) : ?>
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
    <form action="get">
            <button type='submit' id='tombol'></button>
            
    </form>
            <h1 id='tombol'>tes</h1>
    <script type="text/JavaScript">
    var tombol = document.getElementById('keyword');
            tombol.addEventListener('click', function(){
                alert("klik saya");
            })
    </script>
</body>
</html>