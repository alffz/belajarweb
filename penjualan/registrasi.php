<?php
    // koneksi
    require "fungsi.php";

    if(isset($_POST["daftar"])){
       if( registrasi($_POST)>0){
           echo '<script> alert("berhasil daftar"); document.location.href ="login.php" ; </script> ';
       }

    }
?>

<form action="" method="post">
    <li>
        <input type="hidden" name="id">
    </li>
    <li>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
    </li>
     <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
     </li>
     <li>
        <label for="password1">Password</label>
        <input type="password1" name="password1" id="password1">
     </li>
    <button type='submit' name="daftar">Daftar</button>
</form>