<?php   

require 'fungsi.php';
if (isset($_SESSION['user'])==null){
    echo "<script> 
         alert('sesi telah berakhir ');
         document.location.href ='login.php' ;
     </script> ";
     exit;
 }
 $mhs = tampil("SELECT * FROM mahasiswa");
  
// tambah data tanpa fungsi

/*    if (isset($_POST["kirim"])){
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];
        $gambar = $_POST['gambar'];

        $querydb = "INSERT INTO mahasiswa VALUES ('','$nrp','$nama','$email','$jurusan','$gambar') ";     
        $cek_data = "SELECT * FROM mahasiswa WHERE nrp='$nrp'";
        
            // gimana caranya agar data harus diisi sebelum disubmit jika ternyata  form disubmit == kosong maka gak masuk ke database
               tanpa required di tag input ?

               if(mysqli_query($conn,$querydb)){

                echo '<script> alert("data ditambah"); document.location.href ="index1.php" ; </script> ';
            }        
            else{
                echo "data gagal ditambah";
            }            
        
     }
*/

 //menggunakan fungsi

 /* setelah fungsi berhasil dibuat maka harus digunakan untuk menmabahkan sesuatu , yang ditambahkan adalah data yang di
    inputkan oleh user ditangkap menggunakan super global variabel $_GET dan atau $_POST , walaupun di form input kita hanya
    menggunakan salah satunya cotoh:
        <form action="" method="POST">
            <input type="text" name="" id="">
            <input type="text" name="" id="">
        </form>
    dalam form diatas method yang digunakan adalah POST , namung dalam memanggil fungsi kita dapat menggunakan method GET maupun POST
    contoh :
        tambah($_GET);
        tambah($_POST);
 */
if(isset($_POST['kirim'])>0){

    if (tambah($_GET)>0){
        echo 'data ditambah';
    }
    else{
        echo 'gagal tambah data';
    }


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

    <form action="" method="post" enctype='multipart/form-data'>
        <input type="hidden" name="limit" id="">
        <label for="Nrp" >Nrp</label>
        <input type="text"  name="nrp" id="nrp" required>
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="Nrp">Email</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="Nrp">Jurusan</label>
        <input type="text" name="juorusan" id="jurusan" required>
        <br>
        <label for="Nrp">gambar</label>
        <input type="file" name="gambar" id="gambar" required>
        <button type="submit" name="kirim">Tambah data</button>
    
    
    
    </form>

    
</body>
</html>