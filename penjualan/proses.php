<?php
// usernam dan password
$username ='aku';
$pass     =123;
// menampung inputan user dgn post

if (isset($_POST['masuk'])){  // jika tombol masuk udah ada isinya kemudian di klik maka
    if($_POST['namauser']==$username && $_POST["passuser"]==$pass){
        header("Location: home.php");
    }
    else{
        echo  header("Location: login.php <script> alert('login gagal')</script>");
    }

}


?>