<?



?>

<?php echo session_save_path(); ?>

<? 
    session_start();
// membut session langus
    $_SESSION['user'] = 'alfri';
    $_SESSION['login'] = time('d');
    $_SESSION['seting'] = 'default';
    // dgn variabel
    $sesi1 = $_SESSION['nama']='rian';
   // $sesi1 = $_SESSION['lgoin_time']=time('d-m-y');

    print_r($sesi1); //rian
    echo '<br>';
    // menghapus session
    // unset() menghapus secara spesifik maupun keseluruhan
   // unset($_SESSION['user']);// menghapus  isi user 'alfri'
    print_r($_SESSION);  echo '<br>'; //Array ( [login] => 1584716111 [seting] => default [nama] => rian ) 
   // unset($_SESSION);// menghapus semua isi session
    print_r($_SESSION);
    // menghapus menggunakan session_destroy , akan menghapus semua nilai session 
   // session_destroy();
    echo $_SESSION['user'];

    // menggunakan session
    /* setelah dibuat maka session harus digunakan baru bisa tersimpan pada server maupun cookei
       cara gunakannya adalah jika user login maka session tersimpan . 

    */
$nama ='alfri';
$pass ='112';

    if(isset($_POST['masukk'])){ // jika $_POST['masuk'] udah ada maka uji
        if($_POST['nama']==$nama && $_POST['pass']==$pass){ // jika user input nama = $nama dan pass = $pass maka tampilkan dan buat sesian 
             $_SESSION['user']=$_POST['nama'];
             header('Location: beranda.php');
        }
        else {
            echo '<script> alert("login gagal")</script> ';
        }

    }

?>
    <form action="" method='post'>
    <input type="text" name='nama'>
    <input type="password" name='pass'>
    <input type="submit" name='masukk'>
    <input type="reset" name='hapus'>
</form>







