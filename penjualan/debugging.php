<?php 
//include "fungsi.php";
$
function tampil($paramete){
    global $koneksi;
    $eksekusi_sql = mysqli_query($koneksi,$paramete);
    $hasil_sql = [];
    while ($ubah_to_fetch = mysqli_fetch_assoc($eksekusi_sql)){
        $hasil_sql [] = $ubah_to_fetch;
    }
    return $hasil_sql;

} 



$mhs    = tampil("SELECT * FROM mahasiswa");
var_dump($mhs);
echo '<br>';
$mah    = dataDb("SELECT * FROM mahasiswa");
echo '<br>';
var_dump($mah)
?>