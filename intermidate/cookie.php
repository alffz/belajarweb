<html>
    <head>
        <title>Menyimpan data dgn Cookie</title>
    </head>
    <body>

    </body>
</html>
<?
   /* cookie 
        cara menyimpan data pada browser client salah 1 tujuannya untuk menyimpan data login user agar ketika login lagi gak perlu
        masukkin sandi alias langsung login, atau nyimpan pengaturan sebuah situs mislakan ketika ingin mengunjungi situs A seseorang
        biasanya menggunakan tema biru maka data ini bisa disimpan 
        setcookie(key,nilai/sumber($_GET/$_POST),waktu expired )

    */
    // buat login sederhana
    $user1='ijol@gmail.com';
    $pass ='item';

  //  if(isset($_POST['masuk'])){ // jika $_GET = 'submit' udah diatur maka 
    //if (isset($_POST['masuk'])){
        if($_POST['nama']==$user1 && $_POST['pass']==$pass){ // jika nama sesuai = ijo dan password= item maka
        header('Location: home.php'); // masukk ke halaman home.php jika salah maka
        // membuat cookie 
        setcookie('$user1',$_POST['nama'],time()+10); // setelah 10 detik maka cookie akan terhapus otomatis 
        setcookie('background-color', '#4e79a0',$_POST['nama'], time() + (60 * 60), '/');
        }
        else{
            echo '<span style="color=red"><script> alert ("maaf email atau kata sandi salah") </script> </span>';  // kesalahan pada penulisan script html dapat membuat 
        }                    
                                                         // koding gak jalan
 echo $_COOKIE['pengguna2']
?>
        <form action="cookie.php" method='post'>
            <input type="text" name='nama'>
            <input type="password" name='pass'>
            <input type="submit" name='masuk'>
            <input type="reset" name='hapus'>
        </form>
