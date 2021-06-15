<?php
    require 'fungsi.php';
    // deklarasi id 
    $id = $_GET ['idd']; // idd adalah nilai yang didapat dari frontend
    /* menghapus menggunakan fungsi hapus(), sampai sini sebenarnya cukup cuman karena kita ingin mengetahui apakah data berhasil terhpaus
       maka fungsi hapus(), diletakkan didalam if
    hapus($id); 
    */
    if(hapus($id)>0){
        echo '<script> alert("data terhapus") </script>';
        
    }
    else{
        echo '<script> alert("data gagal dihapus") </script>';
    }




?>