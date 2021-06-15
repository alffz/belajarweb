<?
    /* disini kita akan buat halaman beranda yang mengingat session
    */
    session_start(); // wajib untuk memulai session 

    if (isset($_SESSION['user'])){
        echo 'beranda '. $_SESSION['user'];
    }
    else {
        echo 'anda harus login';
    }
echo ''

?>

<a href='logout.php '> Log Out </button></a>