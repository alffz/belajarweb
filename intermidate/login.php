<?php
/* contoh login sederhana
   header(Location: file.php) fungsi untuk memindahkan ke halaman tertentu jika berhasil atau gagal
    contoh kasus => buat halaman login sederhana jika username dan passwor benar maka mengarah ke home.php
                    jika salah maka mengarah ke login.php dan alert gagal login
 */
    $username = 'alfri';
    $pass = '123';

     if(isset($_GET['kirim'])){
        if ($_GET['namaa']==$username && $_GET['password']==$pass){
            echo header('Location: konten.php');
            }
        else{
            echo ' gagal login';
        }
     }
?>

<form action="" method='get'>
    <input type="text" name='namaa'>
    <input type="password" name='password'>
    <input type="submit" name='kirim'>
</form>
<br><br>
<?php
    $user = 'hilman';
    $password = '123';

    if (isset ($_POST['submit'])){

        if($_POST['namaa']==$user && $_POST['password']==$password){
           // header('Location: home.php');
           echo  "<script> alert('login berhsil')</script>";
        }
        else{
            echo  "<script> alert('login gagal')</script>";
        }}
    

?>

<form action="" method='post'>
    <input type="text" name='namaa'>
    <input type="password" name='password'>
    <input type="submit" name='submit'>
</form>

<?
    /* cookie 
        cara menyimpan data pada browser client salah 1 tujuannya untuk menyimpan data login user agar ketika login lagi gak perlu
        masukkin sandi alias langsung login, atau nyimpan pengaturan sebuah situs mislakan ketika ingin mengunjungi situs A seseorang
        biasanya menggunakan tema biru maka data ini bisa disimpan 
        setcookie(key,nilai/sumber($_GET/$_POST),waktu expired )

    */
    
    echo 'cek cookie '. $_COOKIE['$user1'];


?>