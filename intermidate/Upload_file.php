<?php
    // mengapload file 
    /* move_upload_file($asal,'tujuan/'.$parameter_lainnya), $asal adalh folder asal file dan $tujuan adlh folder tujuan
       enctype  , atribut html wajib untuk menghandl proses pemindahan file
       $_POST , karena yang dipindah file maka gak bisa pake $_GET

       sebelumnya harus dipahami bahwa setiap file memiliki informasi seperti nama, type/jenis, direktori, error, ukuran yang berbentuk
       multidimensi asosiatif array maka untuk menampilkan detailnya gunakan var_dump($_FILES) atau print_r($_FILES);
        Array ( [picture] => Array ( [name] => simpan.txt [type] => text/plain [tmp_name] => C:\Windows\Temp\php4364.tmp [error] => 0 [size] => 2221 ) ) 
    */
    $file= [
            ['picture'=>[ 'name' => 'simpan.txt' ,'type' => 'text/plain', 'tmp_name' => 'C:\Windows\Temp\php4364.tmp' ,'error' => 0 ,'size' => 2221  ]]
    ];
   echo ($file[0]['picture']['name']); // contoh memanggil nilai asosiativ multidimensi array
   // echo'd';
   //die();
    if(isset($_POST['kirim'])){  // kirim subtitusi dari index awal array yg merupakan subtitusi dari $_POST pada input type html
        $nama = $_FILES['picture']['name'];
        $folder_asal = $_FILES ['picture']['tmp_name'];

        move_uploaded_file($folder_asal, "gambar/" . $nama);
        echo 'gambar udah pindah';
    }
    else{
        echo 'gambar gak terupload';
    }
 print_r ($_FILES);

/* if(isset($_POST['cek'])){
     print_r($_FILES['cek_gambar']);
 }
 else{
    echo'<script> alert("pilih file terlebih dahulu") </script>';
 }*/fl
?>

<form action="" method='post' enctype='multipart/form-data'>
    <input type='text' name='g_nama'>
    <input type="file" name='picture'>
    <input type='submit' name ='kirim' value='pindahin gambar'>

</form>

<?
    /* menguji file sebelum dikirim apakah sesuai ketentuan atau tidak contoh 
        file harus jpg/npg ukuran maksimal 1mb dll
    */

    // uji apakah $_POST['upload'] ada nilainya    
    if( isset($_POST['upload'])){
        // buat variabel penampung nilai array dari file
       // $andom_nama = str_r
        //$r_nama_f   = md5()
        $milliseconds = round(microtime(true) * 1000);
        $nama       = $_FILES['pilih_file']['name'];
        $asal_file  = $_FILES['pilih_file']['tmp_name'];
        $ukuran     = $_FILES['pilih_file']['s=ize'];
        $jeni       = $_FILES['pilih_file']['type'];
        $error      = $_FILES['pilih_file']['error'];
        $nama2      = substr($nama,strpos($nama,'.')); // .extensi   agar file yang diupload sesaui extensinya
        $nama_f     ="gambar/" . $nama;
        echo $nama2;
        //$extensi= array('image/jpege','image/png','image/gif') 
        // uji apakah erro nya gak ada dan ukuran karang dari 500kb dan jenisnya image/jpeg atau gif atau png 
        if($error == 0  ){
            if($ukuran <= 1000000*2){
               // if(in_array($jeni,$extensi) ){ menggunakan metode array dalam mengambil extensi file
                if($jeni=='image/jpeg' || $jeni=='image/png' || $jeni=='image/gif'){ // jika jenis file adalh jpeg atau png atau gif maka upload
                   if(file_exists($nama_f )){ // jika nama file udah ada maka kita ganti namanya
                    //$nama_f = str_replace('.jpg','',$nama_f); // menghilangkan .extensi (jika gak dipake .extensi sekalian di random pada kode d bahaw ini)
                    $nama_f = $nama_f. base64_encode($milliseconds)."$nama2"; // besok BUAT PSEODE CODE DAN FLOWCHATNYA
                   
                    move_uploaded_file($asal_file,$nama_f  ); 
                    echo ' file berhasil terupload'; //
                }}
                else{
                    echo    "format file gak sesuai";
                }
            }
            else {
                echo 'ukuran terlalu besar';
            }
        }
        else {
            echo ' terdapat erro pada file';
        }

    } ;
// md5


// $str=rand($n_file,$n_file); 
// $result = md5($str); 
// echo 'hasilnya '.$result; 
// $target_file = $target_dir ;
//  generateRandomString();



?>

<form action="" method='post'enctype='multipart/form-data'>
    <input type="file" name='pilih_file'>
    <input type="submit" name='upload'>
</form>