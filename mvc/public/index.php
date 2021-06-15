<?php

// teknik bootstraping , memanggil 1 file  untuk memanggil seluruh file .
// file init.php akan memanggil semua file yang dibutuhkan 
require "../app/init.php";

//  cek apakah file terhubung 

    $cekApp    = new App();
    $CekControler = new Controller();
    $CekControler->setdata('100');
    echo"<br>";
    echo $CekControler->getdata();
?>
