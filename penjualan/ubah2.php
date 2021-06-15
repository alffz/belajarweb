<?php   

require 'fungsi.php';

    // fungsi tambah

       echo "<a href='https://webapi.bps.go.id/v1/api/domain' value='prov'> bps</a> ";
       $id = $_POST['ubah'];
    if (isset($_POST["kirim"])){
        
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];
        $gambar = $_POST['gambar'];

        $q_db    = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', jurusan='$jurusan', email='$email', gambar='$gambar' WHERE id=$id";
        $cek_data = "SELECT * FROM mahasiswa WHERE nrp='$nrp'";
        
            // gimana caranya agar data harus diisi sebelum disubmit jika ternyata  form disubmit == kosong maka gak masuk ke database
           
               if(mysqli_query($conn,$q_db)){
                
                echo '<script> alert("data ditambah"); document.location.href ="index1.php" ; </script> ';
            }        
            else{
                echo "data gagal ditambah";
            }          
            
        
}
 //menggunakan fungsi

 function tambah ($data){
     global $conn;

     

 }

?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1> Tambah data </h1>

    <form action="" method="post">
        <label for="Nrp" >Nrp</label>
        <input type="text" name="nrp" id="nrp" required>
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="Nrp">Email</label>
        <input type="text" name="email" id="email" required>
        <br>
        <label for="Nrp">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" required>
        <br>
        <label for="Nrp">gambar</label>
        <input type="text" name="gambar" id="gambar" required>
        <button type="submit" name="kirim">Tambah data</button>
    
    
    
    </form>

    
</body>
</html>