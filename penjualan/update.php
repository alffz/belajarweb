<?php

require 'fungsi.php';
if (isset($_SESSION['user'])==false){
    echo "<script> 
         alert('sesi telah berakhir ');
         document.location.href ='login.php' ;
     </script> ";
     exit;
 }
var_dump($_SESSION);

    // ambil id dari url
    $id = $_GET['ubah']; // ubah adalh subtitusi id pada DB , ubah == $key['id'] pada halaman index1
   
    // ambil data dari mahasiswa 
    $mhs = dataDb("SELECT * FROM mahasiswa WHERE id=$id")[0];
    

    // ubah tanpa kondisional if

   // ubah ($_POST);
   
    /* alasan kenapa fungsi ubah() dijalankan setelah $_POST["kirim"] diklik adalah agar server tau dan mengenali
       variabel2 subtitusi di dalam fungsi ubah() itu sendir. jika tidak dibunggkus dalam if maka akan ada eror
       undifine variabel $id $nrp dst saat halaman pertama kali di load  , walaupun ubah() berfungsi dgn baik
    */
    if (isset($_POST["kirim"])){ 
        
        
            // gimana caranya agar data harus diisi sebelum disubmit jika ternyata  form disubmit == kosong maka gak masuk ke database
            
               if(ubah($_POST)>0){
                
                echo '<script> alert("data diubah"); document.location.href ="index1.php" ; </script> ';
            }        
            else{
                echo "data gagal diubah ";
            } 
        }         
            

?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah Data</title>
</head>
<body>
    <h1> ubah data </h1>

    <form action="" method="post" enctype='multipart/form-data'>
        <input type="hidden" name="id" id="nrp" required value="<?= $mhs['id'] ?>">
        <input type="hidden" name="gmbrlama" id="nrp" required value="<?= $mhs['gambar'] ?>">
        <br>
        <label for="Nrp" >Nrp</label>
        <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp'] ?>">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs['nama'] ?>">
        <br>
        <label for="Nrp">Email</label>
        <input type="text" name="email" id="email" required value="<?= $mhs['email'] ?>">
        <br>
        <label for="Nrp">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan'] ?>">
        <br>
        <label for="Nrp">gambar</label>
        <img src="gambar/<?= $mhs['gambar']?>" alt="" width='120'>
        <input type="file" name="gambar" id="gambar" >
        <button type="submit" name="kirim">ubah data</button>
    
    
    
    </form>

    
</body>
</html>






