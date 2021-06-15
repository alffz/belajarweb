<?

// variabel penampung isi cookie
$bg = '#00d100';
$font ='<b> 15px </b>';
$bg2 = '#808000';

$user1=['nama'=>'alfri','pass'=>'111'];
$user2=['nama'=>'rian','pass'=>'222'];

if (isset($_GET['masuk'])){
    if ($_GET['nama'] == $user1['nama'] && $_GET['pass']== $user1['pass']){
        echo 'berhasil login';
        setcookie('pengguna1',$bg,time()+120);
        setcookie('pengguna1',$font,time()+120);
    }
    if ($_GET['nama'] == $user2['nama'] && $_GET['pass']== $user2['pass']){
        echo 'berhasil login';
        setcookie('pengguna2',$bg2,time()+120);
        setcookie('pengguna2',$font,time()+120);
    }
    else {
        echo 'gagal login';
    }
}
?>
        <form action="" method='get'>
            <input type="text" name='nama'>
            <input type="password" name='pass'>
            <input type="submit" name='masuk'>
            <input type="reset" name='hapus'>
        </form>