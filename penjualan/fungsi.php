<?php 
session_start();
/* membuat fungsi tersendir agar lebih fleksibel dalam pengerjaan projek karena gak harus ketik disemua workbench
    
*/ 

// koneksi database
$conn = mysqli_connect("localhost",'root','','masuk');
$koneksi =  mysqli_connect("localhost",'root','','masuk');


function dataDb ($query){
    // set global variabel koneksi
    global $conn;
    // eksekusi queri mysql
    $result = mysqli_query($conn,$query);
    // variabel penampung nilai array dari database
    $rows = [];
    // ambil database menggunakan fetc_assoc (asosiativ array)
    while ($row = mysqli_fetch_assoc($result)){
        $rows []= $row;

    }
    // kembalikan $data_asosiativ yang bersifat array asosiativ
    return $rows;
}

// hapus

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id"); // gimana caranya mahasiswa nya bisa di subtitusi sehingga lebih fleksibel

    return mysqli_affected_rows($conn);
}

// tampil

function tampil($paramete){
    global $koneksi;
    $eksekusi_sql = mysqli_query($koneksi,$paramete);
    $hasil_sql = [];
    while ($ubah_to_fetch = mysqli_fetch_assoc($eksekusi_sql)){
        $hasil_sql [] = $ubah_to_fetch;
    }
    return $hasil_sql;

} 
// Upload
// menguji file sebelum di upload

function upload(){
    $nama = $_FILES['gambar']['name'];
    $jeni = $_FILES['gambar']['type'];
    $error = $_FILES['gambar']['error'];
    $ukuran= $_FILES['gambar']['size'];
    $sumber= $_FILES['gambar']['tmp_name'];
    $extensi = array('image/jpg','image/jpeg','image/png','image/gif');
    $tujuan = 'gambar/'.$nama;
    $nama2      = substr($nama,strpos($nama,'.'));

    // uji selected file
    if ($error ===4){
        echo "<script> alert('anda belum memilih gambar') </script>";
        return false;
    }
    // cek extensi gambar
    if (in_array($jeni,$extensi)== false){
        echo "<script> alert('anda hanya boleh mengupload gambar') </script>";
        return true;
    }

    //uji ukuran
    if ($ukuran > 1000000){
        echo "<script> alert('gambar terlalu besar') </script>";
        return false;
    }
    // jika nama file telah ada 
    if (file_exists($tujuan)){
        $nama = uniqid().$nama2;
        
    }
    move_uploaded_file($sumber,'gambar/'.$nama);
    return $nama;
}


// ubah
function ubah($data){
    global $conn;
    // mengambil inputan user
    $id          = $data['id'] ; // gak perlu  htmlspecialchars karena gak diinputkan langsung oleh user
    $nrp         = htmlspecialchars($data['nrp']); // $data['nrp'] === $_GET ['nrp'] pada form
    $nama        = htmlspecialchars($data['nama']);
    $email       = htmlspecialchars($data['email']);
    $jurusan     = htmlspecialchars($data['jurusan']);
    $gambarl     = $data['gmbrlama'];

    if ($_FILES['gambar'] ['error']===4){
        $gambardb = $gambarl;
    }
    else{
        $gambardb = upload();
    }
       
    $ubahd = "UPDATE mahasiswa SET nrp='$nrp' , nama='$nama', email='$email', jurusan='$jurusan', gambar='$gambardb' WHERE id=$id"; 

    mysqli_query ($conn,$ubahd);
    return mysqli_affected_rows($conn);
}

// registrasi
function registrasi ($parameter){
    global $conn;
    $id = $parameter["id"];
    $username = htmlspecialchars($parameter["username"]);
    $password = htmlspecialchars($parameter["password"]);
    $password1 = htmlspecialchars($parameter["password1"]);
    $cekdata  = mysqli_num_rows(mysqli_query($conn,"SELECT username FROM masuk WHERE username='$username'"));
    
    // perivikasi password
    if($password !== $password1){
        echo " <script> alert('perivikasi password salah ' ) </script>";
        return false;
    }
    // enkripsi password sebelum di insert ke database agar ketika situs terhack , hacker gak tau passwordnya
    $password = password_hash($password, PASSWORD_DEFAULT);
    //  hasil enkripsi untuk 123 $2y$10$d.UVaYorvET4ohPN/RzTw.wqMlC.5QBuK3G/fLCf46qxUjY.y6F4C

    // cek apakah data udah ada 
    if ($cekdata>0){
        echo "<script> 
                alert('username sudah terdaptar silahkan coba  yang lain ');
                document.location.href ='registrasi.php' ;
            </script> ";
    }
    else{
    $querydb = "INSERT INTO masuk VALUES ( '','$username','$password')";
    }
    mysqli_query($conn,$querydb);
    
    // mengembalikan 1 jika true(ada data yang diubah), -1 jika false(gak ada data  yg diubah)
    // ini berkaitan dgn $_POST>0 pada form
    return mysqli_affected_rows($conn);
}
function login($parameter){
    // koneksi
    global $conn;
    // tangkap inputan user
    $username = $parameter['namauser'];
    $passwoed = $parameter['password'];
    // cari username di database
    $database = ("SELECT * FROM masuk  WHERE username='$username'");
    // eksekusi cari
    $ekse     = mysqli_query($conn,$database);
    // cek apakah username tersedia 
    if (mysqli_num_rows($ekse)>0){
    // jika tersedia ubah ke bentuk asosiativ array 
    $dataU    = mysqli_fetch_assoc($ekse);
    // cek apakah $username dan $passwoed sesuai 
      if($username==$dataU['username'] && $passwoed==$dataU['password']){
        // buat sesion unutk user yang sedang aktif
        $_SESSION['user']=$dataU['username'];
        // buat cookies
        if (isset($parameter["rememberme"] )){
            setcookie('login','true',time()+200);
            //cookie();
        }
        
        echo "<script> alert('login berhasil') </script>";
        header("Location: index1.php");
        
      }
      else{
          echo "password salah";
      }
    }
    else{
        echo "username gak ketemu";
    }
   
  
}
// tambah


function tambah ($data){
    // $data adalh  $_GET atau $_POST dari form
    global $conn;
       // menangkap inputan user
       $nrp     = $_POST ['nrp']; // nilai $nrp akan berupa time saat tombol kirim di pencet
       $nama    = $_POST ['nama']; // $_POST ['nama'] berasal dari name="nama" pada form input dan $nama adlah  variabel subtitusi untuk input ke database.
       $email   = $_POST ['email'];
       $jurusan = $_POST ['juorusan'];
       $ngambar = $_SESSION['user'];
       $gambar  = $_FILES['gambar']['name'];
       $ukuran  = $_FILES['gambar']['size'];
       $jenis   = $_FILES['gambar']['type'];
       $nama2      = substr($gambar,strpos($gambar,'.'));
       $folder_asal = $_FILES ['gambar']['tmp_name'];
       $allow_jenis = array('image/jpege','image/png','image/gif');
       $cekdata     = mysqli_num_rows(mysqli_query($conn,"SELECT nrp FROM mahasiswa WHERE nrp=$nrp OR email='$email' "));
       $n_gambar    = mysqli_num_rows(mysqli_query($conn,"SELECT gambar FROM mahasiswa WHERE gambar='$gambar'"));


       // cegah input data ganda 
       if ($cekdata>0){
           echo "<script> 
           alert('nrp atau email telah terdaftar coba gunakan yang lain lagi');
           document.location.href ='tambah.php' ;
           </script> ";
           die;
       }
       // jika ada gambar dgn nama yang sama maka namanya diubah 
       if ($n_gambar>0){
           $gambar =uniqid(). $nama2;           
       }

       if(in_array($jenis,$allow_jenis)){
           if ($ukuran<=300000){
               move_uploaded_file($folder_asal, "gambar/" . $gambar);
               $sintxsql = "INSERT INTO mahasiswa VALUES ('','$nrp','$nama','$email','$jurusan','$gambar')";
               // eksekusi query
               mysqli_query($conn,$sintxsql);
           }
           else {
               echo "file terlalu besar";
           }
       }
       else {
           echo 'jenis file salah';
       }
       
      
       // kembalikan nilai eksekusi untuk $conn  1 
      return mysqli_affected_rows($conn);
    }

    function cookie($parameter,$parameter1){
        if(isset($_COOKIE["$parameter"]))
            if($_COOKIE["$parameter"]== $_COOKIE["$parameter1"]){
                $_SESSION["$parameter"]=true;
            }
    }
// cari 
function cari ($parameter){
    global $koneksi;
    $data_per_halaman   = 4;
    $jumlah_data        = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM mahasiswa"));
    $jhalaman           = ceil($jumlah_data/$data_per_halaman);
    if (isset($_GET['halaman'])){
        $halaman_aktif=$_GET['halaman'];
    }
    else {
        $halaman_aktif=1;
    }
    $data_awal = ($data_per_halaman * $halaman_aktif) - $data_per_halaman;
    $sintax_sql = "SELECT * FROM mahasiswa WHERE
                   nama LIKE '%$parameter%' OR nrp LIKE '%$parameter%' OR email LIKE '%$parameter%' OR 
                   jurusan LIKE '%$parameter%' ORDER BY nama desc";
    return tampil($sintax_sql);
}
// cari 
// fungsi cari bekerja dengan menimpa sintax sql yang bersifat asosiativ array lama dengan yang baru dan
// bersifat asosiativ array juga
// function cari ($parameter){
//     $sintax_sql = "SELECT * FROM mahasiswa WHERE
//                    nama LIKE '%$parameter%' OR nrp LIKE '%$parameter%' OR email LIKE '%$parameter%' OR 
//                    jurusan LIKE '%$parameter%' OR gambar LIKE '%$parameter%'";
//     return tampil($sintax_sql);
// }
function pagination ($parameter){
    global $conn;
    $jdhalaman     = 4;
    $jdata         = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM mahasiswa"));
    $jhalaman      = ceil($jdata/$jdhalaman);        
    $halaman_aktif = $parameter['halaman'];
    if (isset($halaman_aktif)){
        $halaman_aktif=$halaman_aktif;
    }
    else {
        $halaman_aktif=1;
    }
    $data_awal = ($jdhalaman * $halaman_aktif) - $jdhalaman;
    $mahasiswa = dataDb("SELECT * FROM mahasiswa LIMIT $data_awal, $data_per_halaman");
   return $mahasiswa;
}
//pagination($mahasiswa = dataDb("SELECT * FROM mahasiswa LIMIT $data_awal, $jdhalaman"));

?>

