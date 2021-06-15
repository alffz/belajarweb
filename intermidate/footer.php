<? // 2 . implode  dan explode
    $puisi='aku memang manusia biasa yang tak sempurna';
    // expldoe ,merubah kata menjadi array
        // expldoe('sparator',$acuan,limit)
        //  separator , adalh nilai yang dijadikan acuan untuk menentukan dari mana array dimulai , 
                //      sparator harus bagian dari sumber string ($puisi) 
        // limit , batas array yang ingin dibuat , sifatnya opsional jika dibuat maka array maksimal == nilai limit tersebut               
   print_r (explode(' ',$puisi,3)); // 3 array 1. aku 2.memang 3.manusia biasa yang tak sempurna
                                    // pada contoh diatas spasi jadi sparator maka terjadi  dan 3 menjadi limit array yang dibuat
    print_r(explode('k',$puisi)); // K jadi separator Array ( [0] => a [1] => u memang manusia biasa yang ta [2] => sempurna ) 

    //-------------------------------------------??

    /*  implode fungsi yang digunakan untuk mengubah array menjadi teks / string
        implode('separator',$sumber,limit)
        sparator , untuk memisahkan antar nilai array , sparatornya berasal dari luar string itu sendiri 
        limit    , batas array yang ingin di konversi menjadi string
        
    */
    $mahasiswa =['alfri','medam','programmer',24];
    echo'<br>';
    echo implode('-',$mahasiswa); // mengubah $mahasiswa menjadi string, -(minus) sbg sperator digunakan untuk memisahkan antar kata yang udah diubah
    echo'<br>';                   // alfri-medam-programmer-24'

    print_r ($mahasiswa);  echo'<br>';
    /* fungsi date , digunakan untuk menampilkan tanggal hari dan tahun, ada banyak formatnya sepert d=day=1 m=mount=1 y=year=20
       date(d-m-y), pisahkan antar format dgn -(minus)
       karena waktu bawaan laptop gak aman, set default timezone dgn fungsi date_default_timezone_set('asia/bangkok') , asia/bangkok
       adalah timezone yang ingin diatur , london untuk kota london,lebih lengkap lihat dokumentasi 

    */
    // 3. date()
    date_default_timezone_set('Asia/Bangkok');
    echo date('d-m-y <br>').'<br>';
    echo 'fungsi date <br>';
    echo date('l-m-y-z-W-Z'); echo '<br>';

    /*--------------------------------------------------------------*/
    // 4. Trim dan strip tags
         /* A. trim() digunakan untuk menghilangkan sepasi diawal dan akhir kalimat , biasanya terjadi jika user gak sengaja masukkan 
        spasi, tab \t, enter \n ,carrige return \r, Null-byte \0, vertical tab \x0b . atau angka dgn range tertentu mslkn 1-10 dst

        trim($parameter) 
        trim($parameter,range angka) => trim($parameter,0..7) hapus 0 sampai 7 jika ada
        
    */
     $quote = ' aku adalah seorang programmer ';
     $buah2an = '1 mangga';
     echo $quote .'<br>'; // tanpa trim 
     echo 'cek'. trim($quote) . 'disini'. '<br>';  // 
     echo 'cek'. trim($buah2an,'0..7'). '<br>'; // menghapus angka 1 dgn range 1..7 , 1 sampai 7
     echo 'cek'. trim($buah2an,'2..7'). '<br>'; //  angka 1 gak terhapus karena rangenya 2 sampai 7 
    $contoh=' terpesona '; 
    echo 'sebelum'. ltrim($contoh).'sesudah'.'<br>' ; // menghapus spasi di kiri
    echo 'sebelum'. rtrim($contoh).'sesudah' .'<br>'; // menghapus spasi di kanan
    // menghapus karakter tertentu trim($parameter,'karakter tertenu')
    $nama = '=andi=';
    echo 'sebelum' .trim($nama,'=').'sesudah'.'<br>'; // menghapus = yang terdapat pada parameter 
    echo 'sebelum' .ltrim($nama,'=').'sesudah'.'<br>'; // menghapus = yang terdapat disebelah kiri pada parameter 

    /* B. strip_tags 
            menghapus tags html yang terdapat pada parameter , namun bisa juga mengabaikan tags yang telah ditentukan (opsional)
            strip_tags($parameter, '<tag yang dibolehkan>')
    */ 

    $kata='jadilah orang yang <b><i> bermanfaat </i></b>';
    echo $kata.'<br>'; //bermanfaat akan bold dan italic
    echo strip_tags($kata).'<br>'; // menghapus efek bold dan italic
    echo strip_tags($kata,'<b>').'<br>'; // mengecualikan tag <b> 

    /* 5 . $_Get dan $_Post
            pada dasarnya keduanya digunakan untuk menyimpan dan mengirim data , perbedaanya $_GET data dikirim melalui url 
            sihingga data kelihata dan $_POST tidak ditampilkan pada url sehingga lebih aman. keduanya variabel tipe array sehingga
            kita dapat memodifikasinya seperti array biasa contoh $data = $_get['nama' ]
            Kelebiah
                 $_GET => simpel dapat diedit degn mudah , contoh saat menuju page 5 maka tinggal diganti urlnya
                          halaman dapat dibookmark
                          dapat dishare
                          dapat di refraseh 
                $_POST => lebih aman karena data yang dikirm tidak terlihat dan stroy parameter gak disimpan
                          dapat mengirim dgn jumlah data yang besar
                          bisa mengirim data selain texs seperti gambar , file 
    
            kekurangan 
                $_GET  => panjang data maksimal 2-8kb jika lebih muncil pesan 414 request url to long 
                          hanya dapat mengirim texs
                          karena data dikirim via url maka mudah terekspos dan kurang aman

                $_POST => data tidak disimpan pada history browser
                          gak bisa dibookmark
                          karena dianggap data sensitif maka ketika dirifraseh atau back akan muncul alert mengirim ulang data

            kapan menggunakan $_get dan $_POST? 
                --> apakah akan terjadi perubahan pada server ? seperti input nama nim dll , jika ya maka gunakan $_POST
                    jika tidak seperti pagination , menampilkan data tertentu maka gunakan $_GET
                    singkatnya 
                        $_POST untuk CREATE UPDATE DELET
                        $_GET  untuk READ
    */




?>

<html>
    <head>
        <title></title>
    </head>
      <form action="" method='get'>
        masukkan nama <input type="text" name='nama'> <br>
        masukkan umur <input type="text" name='umur'><br>
        masukkan status <input type="text" name='status'> <br>
        <input type="submit" name='submit'>
        <input type="reset" name='submit'>
      </form>
      <br>
      <form method="POST" action="" >
        masukkan kelas <input type="text" name='kelas'> <br>
        masukkan pekerjaan <input type="text" name='pekerjaan'><br>
        masukkan hobi <input type="text" name='hobi'> <br>
        <input type="submit" name='submit'>
        <input type="reset" name='submit'>
      </form>

    <body>

    </body>

<?
        if ($_GET){
            echo 'nama : '. $_GET['nama'].'<br>';
            echo 'umur : '. $_GET['umur'].'<br>';
            echo 'status : '. $_GET['status'].'<br>';
            

     } 
    if($_POST){
        echo 'kelas : '. $_POST['kelas'].'<br>';
        echo 'pekerjaan : '. $_POST['pekerjaan'].'<br>';
        echo 'hobi : '. $_POST['hobi'].'<br>';
    }
?>
	<form method="POST" action="">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	if ($_POST)
	{
		echo 'Nama: ' . $_POST['nama'];
		echo '<br>';
		echo 'Email: ' . $_POST['email'];
	}
	?>

    <?
        /* super global variable 
        adalah variabel tanpa batasan scope artinya bisa diakses dimana saja  beberapa udah dibahas 
        seperti $_GET $_POST $_SESSION, ada beberapa global variabel yaitu
    */
        // $_SERVER['value'] untuk menampilkan informasi tentang server seprti nama, ip addres , software 


       echo 'ip address '. $_SERVER['SERVER_ADDR'] . '<br>';
       echo 'nama server '. $_SERVER['SERVER_NAME'] . '<br>';
       echo 'software yang digunakan '. $_SERVER['SERVER_SOFTWARE'] . '<br>';
       echo 'nama protocol '. $_SERVER['SERVER_PROTOCOL'] . '<br>';
       echo 'nama ip client '. $_SERVER['SERVER_ADDR'] . '<br>';
       echo $_REQUEST;

    
    
    
    
    ?>