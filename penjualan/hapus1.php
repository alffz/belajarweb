<?php
session_start();
// koneksi kedatabase
$koneksi = mysqli_connect('localhost','root','','crud');
if (isset($_SESSION['user'])==false){
    echo "<script> 
         alert('sesi telah berakhir ');
         document.location.href ='index1.php' ;
     </script> ";
     exit;
 }
// buat fungsi hapus
function hapus ($sumber){
    global $koneksi;
     mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id=$sumber");

    return mysqli_affected_rows($koneksi);  

}

// menggunakan fungsi 
// menangkap aksi user dgn $_GET

$sumber = $_GET ['delet']; // delet merupakan variabel yg menangkap aksi user subtitusi dari ID pada database

// menjalankan fungsi hapus 
if(hapus ($sumber)>0){
    echo '<script> alert("data terhapus"); document.location.href ="index1.php" ; </script> '; 
}
 






?>