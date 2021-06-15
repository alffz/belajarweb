<html>
    <head>
        <title>mencampur html dan php</title>
    </head>
    <body>
        <p>catatan : jika ingin mencari methode terten namun gak tau istilahnya 
            <br> terjemahkan dulu ke bahasa inggris apa yang ingin dicari 
            <br> contoh > bagaimana MENGGABUNGKAN array ? terjemahkan MENGGABUNGKAN ke englis
            <br> yaitu merge . cek di w3school atau php.net tentang merge
        </p>
        <!-- pebedaan 
            "" kutip 2, pada kutip 2 variabel dibaca variabel-
            '' kutip 1, pada kutip 1 semua yang ada didalamnya dibaca string  -->
        <!-- 1.menggunakan echo untuk menampilkan output -->
        <? 
        echo "echo perintah untuk menampilkan sesuatu"
        ?>

        <!-- 2. mencampur html dan php , dimulai dengan membuat
                file.php
                menulis kode php diantara <?  ?>  -->
        <h4>mencampur html dan php</h4>

        <?php 
        echo 'tulisan ini dibuat dengan script php'
        ?>
        <br> <!-- belajar html -->
        <p>contoh diatas adalh mencapur php dan html <br>
        kita juga dapat mencampurya berulang kali contoh seperti dibawah ini <b>dibuat dengan tag html 
    </b><br></p>

        <!-- 3.  komentar diawali dengan // untuk komentar sebaris dan /* */  untuk multipel baris-->
        <?php
        
        // komentar sebaris
        /* komentar 
        lebih dari 
        sebaris
         */

         // 4.  variable , diawali dengan $ (dollar) pada contoh dibawah
          //      variabel angka yaitu $angka, $angka2 
         $angka=1;
        $angka2=2;
        $angka3=4;
        $hasil= $angka + $angka2;
        $hasil2= $angka2*$angka3;
        echo "<H2> hasil penjumlahan ini dibuat dengan php </h2> $absen";
        echo "1 ditambah 2 =. $hasil. <br>";
        echo "2 dikali 4 = $hasil2 <br>";
        
        ?>

        <!-- 5. tipe data, tidak perlu dideklarasikan diawal , nilai dari veriabel otomatis berupa tipe data 
                contoh $hasil=2 , otomatis $hasil bertipe data integer.
                jika terdapat penjumlahan bertipe data yang berbeda maka hasi dari penjumlahan tersebut merupakan tipedata nya
                contoh 
                $angka =10 ; integer    
                $angka2=10.5; float 
                $hasil = $angka2 + $angka ; hasilnya 20.5 , otomatis $hasil bertipe data float
                $string  = "berupa text";
                $integer = 123;  angka bulat
                $float   = 10.5; angka berkoma
                $bolean  = hanya 2 kemungkinan yaitu bernilai false atau true
                    contoh --) $x= false;
                               $y= true;
                -->
                <h3> tipe data <br></h3>
        <?php
            $salam ="hasi penjumlahan dari "; //tipe data string
            $jarak = 100;       // tipe data integer
            $berat = 50.4;      // tipe data float
            $benar = true;
            $salah = false;
            $hasil = $jarak + $berat;
            
            echo $salah;
            echo " ".$jarak-$berat . "<br>";
            echo "jarak + berat = ". $hasil;
            
        ?>

        <!-- 6.tipe data string-->
        <?php
        echo '<br>';
             $nama ="alfri";
             $alamat = "medan";
             $welcome = "selamat datang";
             echo "$welcome $nama" . "dari ". $alamat; // titik . digunakan untuk mnyambung antar string baik 
                                                       // dalama sebuah variabel atau nilai langsung
        ?> 
        <!-- 7. tipe data integer dan float-->
        <?php
            $gaji       =1000;
            $tunjangan  =2000;
            $potongan   =500;
            $hasil      = $gaji+$tunjangan-$potongan;
            echo $gaji.$tunjangan. "hasil berupa string<br> "; // hasil berupa string = 10002000
            echo "$gaji+$tunjangan". '' ."hasil berupa string <br> ";  // hasil berupa string = 1000+2000
            echo  " total gaji = ".$hasil;echo "<br>"


        ?>
        <!-- 8. operator matematika
                digunakan untuk menjumlahkan mengurangkan membagi mengkali sebuah nilai maupun variabel
                + tambah
                - kurang
                / bagi
                * kali
                % modulo
            -->
        <?
            -$awal = 10;
            $b = 3;
            $has=$awal/$b;
            $modulus=$angka%$b;
            $angka= 10;
           

            //contoh operasi matematika
            echo sprintf("%.2f", -$awal/$b+1) . "<br>";
            echo -$b .'<br>' ; // hasil akan minus -3
            echo sprintf ('%.2f',$has ).'<br>' ;
            echo sprintf('%.2f',$angka).'<br>'; // hasilnya 10.0 karena angka dibelakaung koma dibatasi 1 yaitu %.1f
                                        // walaupun $angka=10 namun di echo dengan %.f2 maka hasil = 10.00
            echo $modulus .'<br>'; // modulus nilai dengan variabel
            echo $angka%$b;         // nilia langsung  hasilnya 1 karena 10/3 = 9 sisa 1 , 1 adalah modulus dari operasi 10/3 
            
        ?>
        

<br>
<h5>fungsi matematika</h5>
<?php
# 9. fungsi matemmatika . selengkapnya buka di php.net
// ada banyak fungsi yang bisa digunakan berikut salah satunya


$angka=4;
$angka2=10;
$angka3=11;
$angka4=12;
$angka5=13;
$angka6=13.12;
$angka7=9.64;
$angka8=-10.7;
$angka9=[1.2 , 3.6 ,10.3] ;

// min (nilai1, nilai2, nilai3 , nilai4 nilai - n ) mencari nilai terendah dari nilai2 tersebut
echo "anka terkecil dari bilangan $angka3, $angka4, $angka5, $angka adalah =".  min($angka, $angka2, $angka3, $angka4, $angka5). "<br>"; //hasilnya 4 
// max (nilai1, nilai2, nilai3 , nilai4 nilai - n ) mencari nilai tertinggi dari nilai2 tersebut
echo "anka terkecil dari bilangan $angka3, $angka4, $angka5, $angka adalah =".  max($angka, $angka2, $angka3, $angka4, $angka5). "<br>"; //hasilnya 13 
// round (nilai) membulatkan nilae ke bilangan terdekat
echo "angka bulat dari $angka6 adalah = ".round($angka6)."<br>"; // hasilnya 13
echo "angka bulat dari $angka7 adalah = ".round($angka7)."<br>"; // hasilnya 10
echo "angka bulat dari $angka8 adalah = ".round($angka8)."<br>"; // hasilnya =11
echo "angka random antara $angka dan $angka2 adalah = ". rand($angka,$angka2) . "<br>"."\n";
// rand(nili1, nilai2) mencari nilai acak diantara 2 nilai
//bagaimana membulatkan angka tipe array dan membulatkannya
sort ($angka9);
echo  'pembulatan dan pengurutan dari '.'$angka9 '; echo round ($angka9);
?>


<?php
echo '' .floor(5.9) ."<br>";   // 4
echo floor(9.999)."<br>"; // 9
echo floor(-3)."<br>"; // -4
?>


<!-- 10. metode string
    digunakan untuk memannipulasi string seperti find repleace , menghitung kata atau huruf dll-->
 <br>
 <h4>10. Fungsi string</h4>
<? 
    // fungsi string dapat digunakan untuk memanipulasi string seperti memotong , menambah , mengganti , menghitung dll
    // untuk parameter nilai bisa berupa string langsung maupun $variabel berisi string
    $contoh ='aku yakin bisa';
    $text   = 'kamu juga';
    $selogan = 'merdeka';
    echo $contoh. "<br>";
    // menghitung huruf
    echo "$contoh" .'berjumlah = '.strlen($contoh.'cek') . ' huruf <br>';// 14+3=17 huruf (string langsung)
    // menghitung kata
    echo "'$contoh'" . " berjumlah =  ". str_word_count($contoh) . " kata  <br>"; // 3 kata (variabel $contoh)
    // mengganti kata tertentu
    echo " mengganti 'aku' menjadi saya = ". str_replace('aku','saya',$contoh) .'<br>'; // saya yakin bisa
    // mengulang kata 
    echo str_repeat($contoh,3 ).'<br>' ; // aku yakin bisa 
    // mengulang kata dan mengganti sebagian text ( menggabung 2 metode yaitu repeat dan replace)
    echo str_repeat(str_replace('juga','idaman',$text),4).'<br>'; // kamu idaman 4x
    // mengganti huruf dan menghitung nya sekaligus
    echo"$contoh ". strlen( str_replace('aku','diaa',$contoh)). " huruf"   // diaa yakin bisa berjumlah 15 huruf

?>
    <br>
    <h4>11 . mengenal Array</h4>

    <? // penulisan array ada dua jenis 
        $arr1= array('alfri','laki','medan',24); // jenis pertama 
        $arr2= ['habibi','laki juga','langkat',20]; // jenis keduaay
        // nilai index array pada php dapat berbeda2 tipe datanya contoh diatas index 123 bertipe string index 4 bertipe integer
        // output dengan penulisan array jenis pertama. $variabel= array ('isi array 1','isi array 2','isi array N')
        echo $arr1 .'<br>';  // echo  hanya mengeluar array
        print $arr1 .'<br>'; // print hanya mengeluar array
        print_r ($arr1) .'<br>'; //  [0] => alfri [1] => laki [2] => medan [3] => 24 . print_r mengeluarkan nilai array
        echo 'tampilkan isi dari '; echo $arr1 [0] . '<br>';

        // output dengan penulisan array jenis kedua . $variabel=['isi array 1','isi array 2','isi array N']
        echo $arr2 .'<br>' ;
        print $arr2 .'<br>' ;
        print_r ($arr2) .'<br>'; echo "<br>";

        // merubah nilai array dengan index nya
        $arr2 [0]='juliardi'; 
        print_r ($arr2 ).'<br>'; // juliardi laki juga langkat 
       



    ?>
    <br>
    <h4>12. Fungsi-Fungsi array</h4>
    <?php
    // metode  array  adalah sebuah cara yang sudah disediakan php untuk memanipulasi nilai array
    // seperti mengurutkan, menggabungkan , menghapus , menambah elemen tertentu pada nilai array
    // 
    $hewan = ['kucing','kelinci','marmut','semut'];
    $hewan1 = ['kambing','kucing','kambing','kelinci','kucing'];
    $angka  = [3,4,6,7,10,8,11,9];
    $angka2 = [10,13,2,18,17,9];
    $angka3 = [20,30,32,24,43,22];   
    //$hapurakhir= array_pop($hewan);
    //$arrterbersar= [$angka,$angka2,$angka3];
    //echo max($arrterbersar);
     echo '';
    sort($angka).'<br>' ; // metode harus dideklarasikan dahulu
    print_r ($angka).'<br>' ; echo '<br>'; // hasil terurut  3,4,6,7,8,9,10,11
    echo $angka [1] .'<br>' ;
    print_r ($angka).'<br>' ; echo '<br>'; // gimana caranya menghilangkan efek short untuk baris berikutnya?
    echo 'nilai terbesar dari '; echo '<br>';   print_r ($angka); echo 'adalah '.' '.max($angka).'<br>'; // max mencari nilai terbesar
    // membalik nilai array dari index terakhir
    print_r(array_reverse($angka));echo '<br>';  // seharusnya 9,11,8,10,7,6,4,3 namun karena diatas telah digunakan metode short maka
                                    // hasilnya 11,10,9,8,7,6,4,3 diurutkan baru dibalik / direverse
    // menghapus element terahir pada array
    // menghapus element pertama pada array
    // menghitung jumlah nilai
    echo 'jumlah nilai pada ';  print_r($hewan) ; echo " adalah ". count($hewan).' buah' ;echo '<br>';; // 4 yaitu kucing kelinci marmut dan semut
    // menampilkan nilai yang sama hanya sekali , misalkan terdapat nilai "kambing" pada lebih dari 1 index, maka 
    // yang ditampilkan hanya salah satunya\
    echo 'nila unik dari '; print_r($hewan1); echo'adalah ';print_r(array_unique($hewan1));echo '<br>';
    // mengacak nilai array. setiap kali direload maka nilai yang tampil akan berubah2 indexnya
    shuffle($hewan); 
    print_r($hewan); echo "<br>";
    // in_array digunakan untuk cek apakah terdapat suatu nilai dalam sebuah array
    echo "cek apakah dalam  $hewan terdapat "."'semut  ' = " ;
      if(in_array('semutt',$hewan))
        {
            echo "ada";            
        }
        else
        {
            echo "gak ada";
        } // hasilnya gak ada , karena di dalam $hewan gak ada "semutt" yang ada "semut"
        echo "<br>";
    //key_exists cek apakah terdapat suatu key dari sebuah array
    echo 'cek apakah terdapat key "jenis" dari $hewan =  ';
        if (key_exists("jenis",$hewan)) // akhir dari blok kode if sebelumnya adalah  if setelahnya 
            {                           // artinya ifelse dan else sebelum blok if selanjutnya bagian
                echo "ada";             // dari if sebelumnya
            }
        else
            {
                echo " gak ada";
            }
    
    echo "<br>";
    


    ?>
    <?php
       // array_search ('nilai',sumber parameter) untuk mencari nilai tertentu pada array
       // unset(sumber parameter[$varbantu]) menghapus nilai tertentu pada array
        $kendaraan 	= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus',''];
         // mencari nilai index tertentu
        $key2 = array_search('mobil',$kendaraan);
        $key = array_search('Sepeda', $kendaraan);
        // menghapus value pada array menggunakan array_search sebelumnya
        unset($kendaraan[$key]);        
        print_r ($kendaraan);echo "<br>";
        unset ($kendaraan[$key2]);
        print_r ($kendaraan) ;echo "<br>";
        print_r (array_keys($kendaraan));
        unset($kendaraan[array_search('Truk',$kendaraan)]);
        echo'hapus truk '; print_r($kendaraan); echo '<br>';
        // mencari dan menampilkan array
        echo 'tampilkan '; echo $key;
        $produk = ['modem','hardisk','Flasdisk'];
        print_r($produk);

    ?>
       <h4>13. asociativ array</h4>
       <?
        // index array dimulai dari 0 namun index tersebut juga bisa disubtitusi menjadi key 
        // contoh 
        //  => array biasa 0=alfri 1=pria 2=medan
        //  => asosiativ array nama=alfri kelamin=laki alamat=medan
        //  =>  nama , kelamin , alamat .. disebut key pengganti index 0,1,2
        //  => alfri ,laki, medan .. disebut nilai
        // sintax   =  'key' => 'nilai'
        // untuk mengambil nilainya key digunakan mengganti index
        // ------------penulisan asosiativ array cara 1-----------------
        $siswa  = ['nama'=>'ridwan','alamat'=>'tembung','pendidikan'=>'S1','umur'=>23]; 
        // ------------penulisan asosiativ array cara 2-----------------
        $siswa1 ['nama']       ='ade';
        $siswa1 ['alamat']     ='percut';
        $siswa1 ['pendidikan'] ='smp';
        $siswa1 ['umur']       = 22;
     
        // lebih simpel cara pertaama and i like more first way
        echo 'nama siswa pertama adalah  '. $siswa['nama'];  echo '<br>';
        echo 'nama siswa kedua adalah ' . $siswa1[0]; echo '<br>'; // gak bisa dipanggil menggunaka nomor index
        echo 'nama siswa kedua adalah ' . $siswa1['nama']; echo '<br>';
        echo 'umur siswa kedua adalah ' . $siswa1['umur']. ' tahun alamatnya '. $siswa1['alamat'] ; echo '<br>';
        print_r($siswa);echo '<br>';
        // gimana caranya menampilkan lebih dari 2 nilai  array? 
        // mencari nilai dari asosiativ array
        echo 'cari nama '.array_search('nama',$siswa);
       
        ?>
        <h4>14. fungsi-fungsi asosiativ array</h4>
        <?
        // sebuah fungsi bawaan yang dapat digunakan untuk memanipulasi nilai asosiativ array
        // seperti => menmpilkan key, values saja 
        //         => mengurutkan key atau value berdasarkan asc/desc
        //         => mencari key tertentu kemudai menghapusnya 
         $mobil =['merek'=>'honda','type'=>'acord','model'=>'lcgc','keluaran'=>2013];
         $motor =['merek'=>'yamaha','type'=>'xeon','model'=>'matic','keluaran'=>2017];
         $motil2 = [''];
         print_r($mobil);echo '<br>';
         // array_values(parameter) menampilkan nila array 
         echo  '1. nilai array pada $mobil adalah '; print_r (array_values($mobil)); echo '<br>';
         // array_keys(parameter) menampilkan key 
         echo '2. key array pada $mobil adalah '; print_r (array_keys($mobil));echo '<br>';
         // array_merge(parameter1,parameter2) menggabungkan nilai dan key array, bisa juga untuk mengganti nila dan key
         echo '3. menggabung nilai $mobil dan $motor'; print_r(array_merge($mobil,$motor)) ;echo '<br>';
         //note parameter 1 diganti menjadi parameter ke 2 
         echo '4. menggabung nilai $mobil dan $motor'; print_r(array_merge($motor,$mobil)) ;echo '<br>';
         // array_merge bisa juga menggunakan simbo + .$mobil+$motor , parameter1 mengganit parameter2
         echo '5. menggabung nilai $mobil dan $motor'; print_r($mobil+$motor) ;echo '<br>';
         // array_combine(parameter1,parameter2) menggabung array dimana parameter1 menjadi key dan parameter2 menjadi value
         // masing2 array harus memiliki jumlah data yang sama
         $nama    = ['alfi','habibi','salman'];
         $jurusan = ['komputer','dakwah','usuluddin'];
         $buah    = ['apel','anggur','mangga',"apel",'anggur'];
         $buah1   = ['semangka','durian','mangga','cabe'];
         $buah2   = ['berduri'=>'durian','bersisik'=>'nanas','berbulu'=>'rambutan'];
         $buah3   = ['berduri'=>'sawit','berumbi'=>'bawang','berbulu'=>'rambutan'];
         $mahs    = array_combine($nama,$jurusan);
         print_r($jurusan);echo '//////<br>';
         echo $nama [1];echo '<br>'; //habibi
         echo $buah2 ['bersisik'];echo '<br>'; // nanas
         echo '6. jurusan dari mahasiswa berikut adalah '; print_r($mahs);echo '<br>';
         // array_count_values(parameter) menghitung jumlah nila 
         echo '7. hitungg jumlah nila '; print_r(array_count_values($buah));echo '<br>';  // apel 2 anggur w mangga 1
         // array_dift(parameter1, parameter2) membandingka 2 nilai dan mengeluarkan nilai yang berbeda
         echo '8. bandingkan dan tampilkan nila array dari $buah dan $buah1 '; print_r(array_diff($buah,$buah1));echo '<br>'; 
                // apel.anggur.apel.anggur  . mangga diabaikan karena terdapat di parameter2
         echo '8. bandingkan dan tampilkan nila array dari $buah dan $buah1 '; print_r(array_diff($buah1,$buah));echo '<br>';
                // semangka,durian,cabe  
                // hasilnya akan menampilkan nilai yang tidak memiliki nilai sama diantara ke2 parameter
                // dimana nilai parameter1 jadi acuan 
         // array_dift_assoc(parameter1,parameter2) membandingkan key dan value serta menampilkan perbedaannya
         echo '9. bandingkan dan tampilkan nila array dari $buah dan $buah1 '; print_r(array_diff_assoc($buah2,$buah3));echo '<br>';
                // durian, nans, . rambutan tidak ditampilkan karena memiliki key dan value yang sama
         //array_fill(index awal, jumlah diisi , "nilainya") menambah nilai bisa berupa sting maupun lainnya
         $jurusan = array_fill(2,2,'fikih');
         echo '10. tambahkan nilai pada $jurusan';print_r($jurusan);echo '<br>';
            // kok nilai pada $jurusan gak nambah?
        $buh     = array_fill(3,2,'jambiu');
        print_r($buh); echo '<br>'; // skip
        // menampilkan dan mencari key atau value tertentu
        print_r(array_search('durian',$buah2));
        // mencari key tertentu 
        // $kdelet =array_key_exists('berduri',$buah2);
        // unset($buah2[$kdelet]);
        // print_r ($buah2);
        
        ?>
        <h4>15 Multi dimense array</h4>
        <?
        /* $var = array (
                    array('isi','isi'), array pertama 
                    array('isi','isi'), array kedua
                        );
        */
        // array      = baris
        // data array = kolom
        // multi dimensi array adalah array yang mengandung array 
        // , (koma) digunakan untuk menyambung antar array di dalam multi dimensi array
        /* mengakses indexingnya menggunakan koordinat dimana baris pertama = 0 kedua=1 dst
           kolom pertama = 0 kolom kedua =1 dst
        */
        // metode aksesnya seperti matrik pada matematika
        /*
            baris dan kolom dimulai dari 0
            jumlah digit index tergantung banyak jumlah array (baris)
            contoh :
            terdapat 3 array, tuliskan indexingnya
            00 01 02 => index array pertama. 00 data pertama 
            10 11 12 => index array kedua
            20 21 22 => index array ketiga
            ---------------------------------------
            <--latihan-->
            terdapat 2 array, tuliskan indexingnya
            00 01 02
            10 11 12
            ---------------------------------------
            terdapat 5 array 6 data, tuliskan indexingnya
            00 01 02 03 04 05
            10 11 12 13 14 15
            20 21 22 23 24 25
            30 31 32 33 34 35
            40 41 42 43 44 45
            50 51 52 53 54 55
        */
            $mmahasiswa = [
                           ['nama'=>'alfri','alamat'=>'medan','jurusan'=>'komputer','kerjaan'=>'programmer'. '<br>'],
                           'kemudian' .'<br> ',
                           'setelah itu'.'<br> ',
                           ['dosen'=>['psycolog'=>'agus','tik'=>'rian']],
                           array('nama'=>'habibi','alamat'=>'langkat','jurusan'=>'dakwah','kerjaan'=>'sales'. '<br>'),
                           array('nama'=>'gunawan','alamat'=>'tembung','jurusan'=>'koki','kerjaan'=>'masak'. '<br>'),
                           array('nama'=>'ijol','alamat'=>'percut','jurusan'=>'febi','kerjaan'=>'ojol'. '<br>'),
                                
                          ];
                            

                       
            print_r($mmahasiswa);echo '<br>';
            // keterangan [2] adalah array ke 3, ['kerjaan'] mengambil nilai kerjaan pada array ke 3 yaitu
            // masak
            echo 'gunawan kerjaannya adalah '; echo $mmahasiswa[5]['kerjaan']; '<br>';
            echo 'array ke 2 adalah ' ; echo $mmahasiswa [2];'<br> ';
            echo 'dosen tik adalah ' ; echo $mmahasiswa [3] ['dosen']['psycolog']; 
            
            // indexnya
            /* 00 [nama.alfri] 01 [alamat.medan] 02 [jurusan.komputer] 03[kerjaan.programmer]
               10 [nama.habibi] 11 [alamat.langkat] 12 [jurusan.dakwah] 13[kerjaan.seles]
               20 [nama.gunawan] 21 [alamat.tembung] 22 [jurusan.koki] 23 [kerjaan.masak]
               30 [nama.ijol] 31 [alamat.percut] 32 [jurusan.febi] 33 [kerjaan.ojol]
            */


            
        // ask 
        /* ==>gimana caranya menampilkan nilai asosiativ array menggunakan foreach
           (perulangan), agar jumlah data yang tampil bisa disesuaikan
           ==> apakah multidimensi array jenis relasi hanya bisa menampung 1 data 
           ==> double multidimensi array?
        */
            
            
            
            
            
            $kendaraan =    [['Mobil' => ['merk' => 'Toyota', 'type' => 'Vios', 'year' => '2016']]. '<br>',
                            'Sepeda'.'<br>',
                            'Truk'. '<br>', 
                            ['Motor' => ['Honda', 'Yamaha', 'Suzuki']], // value motor menjadi index
                                'Bus'
                            ];
            // gimana caranya mengeluarkan nilai array multidimensi diatas secara spesifik
            // misalkan hanya ingin menampilkan type nya aja            
            print_r ($mmahasiswa );echo '<br>';
            echo 'isi kendaraan adalah '. $kendaraan [0];echo '<br>';
            print_r($kendaraan);echo '<br>';echo '<br>';
            echo 'kendaraannya adalah ';echo $kendaraan [3]['motor'][0].'<br> ';
            echo 'kendaraannya adalah ';echo $kendaraan [0]['merk'];'<br> ';
            // gimana caranya menampilkan nilai atau value dari multidimensi asosiativ array

     

        ?>

    <h4>16 loop / perulangan </h4>

    <?
        /*perulangan / loop
            perulangan akan mengulang semua yang ada didalam block nya yaitu semua diantara 
            { kurung buka, dan } kurung tutup , string dan tag html diulang terpisah
            ada 4 jenis yaitu
            for , while, do while, foreach(untuk array)
            ada 3 parameter untuk masing2 perulangan yaitu
                nilai awal; syarat; perubahan (increment (++/--))
            for (varawal; syarat; perubahan(++/--))
            */
        
        for ($a=1; $a<5;$a++)
            {
             echo ' => '; 
             echo "perulangan ke-- $a "   ;
             echo "------------ <br>";
            }

            // a dimulai dari 1, a kecil dari 5 , a++
            // jika a = 1 cetak semua yang ada diantara kurung kurawal
            // jika a = 2 cetak semua yang ada diantara kurung kurawal
            // jika a = 3 cetak semua yang ada diantara kurung kurawal
                // dst
            // jika a = 5 stop karena 5 lebih besar dari syarat (<5)

    ?>
    <br>

    <h4>17 loop / perulangan untuk mengakses array </h4>

    <?
        // array 
        echo ' <br><br>';
        $hewan = ['kucing','kambing','semut','cicak'];
        for ($index=0;$index<=4; $index++)
            {
                echo "isi array ke $index ";
                echo $hewan[$index]. '<br>';
                // isi array ke 0 kucing
                // isi array ke 1 kambing 
                // isi array ke 2 semut
                // isi array ke 3 cicak
                // isi array ke             ( pada index ke 4 kosong karena nilai array cuman sampe index 3 ) 
            }
            // bisa juga menggunakan metode count untuk menghitung otomatis jumlah nilai array
            echo 'metode count <br><br>';
        for ($index = 0; $index < count($hewan); $index ++) // fungsi count($hewan) akan menghitung otomatis
            {                                              // jumlah nilai dari $hewan
                echo "isi array ke $index ";
                echo "$hewan[$index] <br>";
            }
            // menentukan jumlah data yang diulang
        for ($index =0; $index<count($hewan)-2; $index ++)
            {
                echo 'isi array dari 0 hingga akhir -2 adalah ';
                echo "$hewan[$index] <br>"; // kucing dan kambing , karena array yang ditampilkan kurang 2 dari akhir
                                            // dimana semut dan cicak adla array ke 3 dan 4 makanya gak ditampilkan 
            }
        // array multidimensi
        $mah    = ['nama'=>'alfri','alamat'=>'medan','jurusan'=>'komputer','kerjaan'=>'programmer'. '<br>'];
        $hewan1 = [
                    ['nama'=>'sapi','jenis'=>'mamalia','kaki'=>4], // array ke 0
                    ['nama'=>'kucing','jenis'=>'mamalia','kaki'=>4], // array ke 1
                    ['nama'=>'paus','jenis'=>'ikan','kaki'=>0],  // array ke 2
        ];
        print_r($hewan1); echo "<br>";
        for ( $index1 = 0 ; $index1<2; $index1++)
            {

                print_r ($hewan1 [$index1]);
                echo '<br>';
                // sapi dan kucing serta key dan value nya  ditampilkan 
                // paus tidak karena index <2 artinya tidak termasuk index ke 2
            // seharusnya disini ditutup dengan } kurawal tutup, cuman kita bisa set ini dibagian akhir biasanya karena lupa
         echo "<br>";
         // menampilkan index tetapi salah satu valuenya saja yang diambil berdasarkan key (nama)
        for ( $index1 = 0 ; $index1<3; $index1++)
            {
                echo 'nama dari hewannya adalah ';
                print_r ($hewan1 [$index1]['nama']);
                echo '<br>';
                // hanya  sapi kucing paus yang tampil
                // karena  yang dipanggil berdasarkan key 'nama'
            }
        // gimana caranya menggunakan methode array dalam perulangan ?
        // contoh 
            // mnampilkan data berawalan A dan diurutkan secara asc/desc
            // tampilkan hewan yang berkaki 4 saja dan diurutkan
        for ( $index1 = 0 ; $index1<=1; $index1++)
            {
                echo 'nama dari hewannya adalah ';
                print_r ($hewan1 [$index1]['nama']);
                echo '<br>';
                // hanya  sapi kucing paus yang tampil
                // karena  yang dipanggil berdasarkan key 'nama'     
            }
        foreach ($mah as $ip => $jp){
            
            echo $ip . ' ';
            echo $jp . '<br>';
        }

        // skip nilai tertntu pada proses perulangan

        for ($cek=0; $cek<=11; $cek++){
            if($cek==3){
                $cek +1; // skip 3
                continue;
            }
            elseif($cek==7){
                $cek ++; // skip 7 dan 8
                continue;
            }

           echo 'cek <br>'. $cek  ;// 0,1,2,4,5,6,8,9,10,11 skip nilai 3 dan 7
        }
        // perbedaan +1 dan ++ , +1 cek nilai setelahnya . ++ cek hingga 2 nilai setelahnya (hipotesis ini perlu pengujian lebih lanjut)
        $i = 1;
while ($i <= 10) {    
	if ($i == 5) {
		$i++;
		continue;
	}
	echo $i++; // 1234678910 - tidak termasuk nomor 5
}
    ?>

<h4>18 loop foreach  untuk array 1 dan 2 dimensi</h4>

    <?
    // PHP menyediakan foreach untuk mengakses array dimana metode subtitusi digunakan untuk memanggil key dan value 
    // kekurangannya foraceh menampilkan semua key atau value sedangkan pada for kita dapat menentukan bagian
    // tertentu saja yang ditampilkan
    
    // 1. foreach 1 dimensi ($variabel as $subtitusi_variabel)


    $transport = ['motor','kereta','pesawat','angkot'];
            echo 'jenis2 kendaraan adalah <br>';
            foreach ($transport as $kendaraan) // variabel $kendaraan adalh subtitusi dari variabel $transport gunanya untuk 
                {                              // dipanggil menggantikan variabel utama ($transport) 
                echo '=> ';
                echo $kendaraan . '<br>';    
                }
                //  mngeulang semua isi array berdasarkan syarat yang ditentukan dalam hal ini 4 kali perulangan
            for ($ind=0; $ind <=4; $ind ++) 
                {
                    print_r ($transport); echo '<br>';
                }
                // gimana caranya memanggil nilai array dari index 1  hingga 3 pada array dgn jumlah data 5 ?
    // 2. foreach array multidimensi 
          // foreach ($varutama as $var_subtitusi)
     $kendaraan1 = [
                    ['truk','bemo','kapal','becak'],
                    ['laptop','handpon','komputer','joystik'],
                    ['piring','gelas','sendok','garpu']
                ];
                
            foreach ( $kendaraan1 as $barang)
                {
                    echo 'jenis barang2nya adalah '; 
                    echo $barang[2]; // kapal,komputer,sendok ngprint index ke 2 dari masing2 array
                    echo '<br>';
                }
            foreach ( $kendaraan1 as $barang)
                {
                    echo 'jenis barang2nya adalah '; 
                    print_r ($barang[0]); // truk, laptop, piring ngprint index ke 0 dari masing2 array
                    echo '<br>';
                }
            // mengulang semua isi array pada $kendaraan1 
            foreach ( $kendaraan1 as $barang)
                {
                    echo 'jenis seluruh barang2nya adalah '; 
                    print_r ($barang); // 
                    echo '<br>';
                }
            /* foreach ( $kendaraan1 as $barang)
                {
                    echo 'jenis barang2nya adalah '; 
                    print_r ($kendaraan1); // ngeprint semua nilai array sebanyak jumlah array 
                    echo '<br>';
                }   
            */
    ?>

    <br>


    <h4>19 foreach untuk asosiatif array 1 dan multidimensi  </h4>

    <?
        // terdapat 3 parameter yang harus digunakan 
        // variabel_utama adalah variabel yang berisi nilai acuan
        // as  sebagai tol untuk mensubtitusi variabel utama 
        // $key unuk mewakili key
        // $value untuk mewakili value dari arraynya
        // $key dan $value bebas dinamakan apa aja hal ini bertujuan agar tidak terjadi kebingungan bagi deplover akibat terjadinya
        // persamaan dari subtitusi beberapa array hal ini yan membuat foreach tidak menjadikan $key dan $value sebuah standart

        $burung = ['nama'=>'kenari','kaki'=>2,'paruh'=>'pendek','sayap'=>'kecil'];
        // asosiativ array
            foreach ($burung as $bur => $burva) // $bur dan $burva subtitusi dari $key dan $value dari arraynya
                {
                    echo $bur .' ' ;
                    echo $burva.'<br>';
                }//nama kenari. kaki 2. paruh pendek. sayap kecil

        
        // multidimensi asosiativ array 
                echo '<br>';
        $alatbangunan = [
                        ['nama'=>'martil','bahan'=>'besi','jenis'=>'godam'],
                        ['nama'=>'cat','bahan'=>'caira','jenis'=>'pewarna'],
                        ['nama'=>'paku','bahan'=>'besi','jenis'=>'pengikat'],
                        ['nama'=>'gembok','bahan'=>'babet','jenis'=>'pengikat'],
        ];
        // $ser = array_search ('paku',$alatbangunan[0]['nama']); // gimana caranya mencari nilai dari multidimensi array?
        // gimana caranya menampilkan key dari multidimensi array berdasarkan valuenya?
            foreach ($alatbangunan as $istilah => $data)
                { 
                    echo $data['nama']  ; echo ' <br>'; //tampilkan value dari nama => martil,cat,paku,gembok
                     
                }
                echo '<br>';
            foreach ($alatbangunan as $istilah => $data)
                { 
                    print_r ($istilah)  ; echo ' <br>'; //tampilkan key dari martil => nama
                }
            for ($in=0; $in<4; $in++){
                print_r ($alatbangunan[$in+1]['cat']); // tampilkan array ke 1 , nama=cat bahan=cairan jenis=perwarna
                echo "<br>";
                print_r ($alatbangunan[$in+2]);
                
            }
                // perbedaan mendasar for dkk  dan foreach dalam menampilkan array adalah foreach gak bisa memilih hanya aray ke 1 yang
                // ditampilkan , FOREACH akan menampilkan semua yang diberi akses , jika itu index 0 , maka akan ditampilkan index 0 
                // dari semua array

    ?>
    <!-- belum lulus dari array -->

    <h4>20 while dan do while </h4>
    <br>
    <?php 
        echo 'WHILE <br>';
        // dalam kasusu perulangan yang gak ada batas akhirnya perulangan FOR  gak cocok digunakan untuk itu maka perulangan WHILE
        // lebih tepat. contoh => untuk mencari kata tertentu dalam sebuah dokumen maka user akan melakukan pencarian sesuka hatinya
        //                        maka kita butuh WHILE untuk mengulang syntaknya 
        //                     => game tebak angka, misalkan kita mau buat game dimana user menebak angka dari 1 - 10 , maka kita gak tau
        //                        seberapa banyak user mencoba menebaknya bisa jadi 1x 3x 5x atau 2x  maka WHILE lebih tepat digunakan 
        // syntax
        // $variabel =nilai awal ;
        // while (syarat)
        // {
        //    yang ingin ditampilkan;
        //   $variabel increment (perubahan);
        //   }
        $ulangt=['masih bayi','belajar jalan','mulai ngomong','masuk tk','sekolah bola','tamat tk','masuk sd'];
        $obat  =['batuk'=>'komik','ngantuk'=>'kopi','tbc'=>'penacol'];
        $ultah=1;
        while ($ultah<=7){
            echo "ultah ke $ultah ".$ulangt[$ultah];
            echo '<br>';
            $ultah++;  
        } // belajar jalan','mulai ngomong','masuk tk','sekolah bola','tamat tk','masuk sd'  . masih bayi gak tampil karena index 
          // awalnya dimulai dari 1 sedangkan indexing pada array dimulai dari 0
        echo "<br>";

        $num_char 	= 15;
        $text 		= 'Contoh script yang digunakan untuk memotong 50 huruf pertama dari kalimat/paragraf dengan php';
        $char  		= $text{$num_char - 2}; //ambil huruf ke 50 dari variabel $text
        while($char != ' ') {
            $char = $text{--$num_char}; // Cari spasi pada posisi 51, 52, 53, dst...
        }
        echo substr($text, 0, $num_char) . '...';


        /* DO WHILE
            kode minimal dijalankan 1 x
            kode berjalan tanpa harus  melihat syaratnya karena  DO WHILE gak ngecek syaratnya di awal

            $variabel= nilai awal;
            DO {
                    echo "yang mau diulang";
                $variabel.increment ++
            }
            WHILE (syarat);


        */

         echo ' DO WHLE <br>';
            $starr=1;
            do
            {                
            echo "ulang tahun keee $starr";
            echo $ulangt[$starr];
            echo '<br>';
            
            $starr++;
            }
            while ($starr<7);
        /* ulang tahun kee 1 belajar jalan 
           ulang tahun kee 2 mulai ngomong
           dst
        > variabel yang udah dipakai pada prulangan sebelunnya gak bisa dipake pada perulangan lainnya
        > perbedaan mendasar FOR dan WHILE/DO WHILE adalah variabel_nilai_awal bisa diletakkan dibagaian manapun pada kode'
          sedang pada FOR terletak didalam --> FOR ($I=0; ----), -->$I =0; WHILE/DO ........
        */


    
    ?>
        <!-- kalok gak dikasi } kurawal tutup  dibawah ini maka menampilkan pesan => syntax error unexpected end of file -->
            <?php 
            }
            ?> 
        <!-- ternyata penyebabnya terdapat kurung kurawal yang kurang dari salah satu baris kode diatas sehingga php memberikan
             kemudahan untuk menutup nya dibagian akhir . jika terdapat 1 atau lebih yang belum ditutup maka bisa ditutp diakhir sesuai
             jumlah kurawal yang terlupakan 
             pada kasus diatas terdapat 2 baris kode yang belum ditutup } (kurawal tutup) yaitu di line 547 dan satu lagi gak tau dimana
             ternyata 1 lagi di line 569
         -->
         <h4>21 tipe data bolean dan konversi </h4>
         <br>
    <?
        /*
            tipe data bolean adalah tipe data yang hanya bernilai TRUE(benar) atau FALSE(salah)
            tipe ini sangat simpel namun fungsinya banyak
            kedepannya bakal digunakan untuk menentukan apakah suatu statmen bernilai TRUE / FALSE
            jika TRUE maka ini jika FALSE maka itu
            umumnya digunakan dalam kondisional statment atau dicampur dgn operator logika seperti
            IF, IF ELSE, ELSEIF dll         
            $variabel = true;
            $variabel = false;

            =======================
            Konversi adalh proses perubahan tipe data menjadi TRUE atau FALSE , berikut sebabnya
            beberapa kondisi dalam PHP menjadi false seperti contoh dibawah
                $x = FALSE; // false
                $x = ""; // false
                $x = array(); // false
                ------> artinya jika $x='' $x berisi string dan atau array kosong dianggap false 

            beberapa kondisi dalam PHP menjadi TRUE
                $x = " "; // true , karena $x berisi spasi maka dianggap TRUE
                $x = 1; // true
                $x = -2; // true
                $x = "belajar"; // true
                $x = 3.14; // true
                $x = array(12); // true
                $x = "false"; // true , False pada $x dianggap string sehingga bernilai TURE
                Sx = *;
        */
        $password = true;
        $sx= ' ';
        var_dump($sx);
        $bagi = false;
            if ($password==$sx)
                {
                    echo 'berhasil masuk'; // berhasil masuk karena $sx berisi spasi maka bolean = TRUE
                }
            else
                {
                    echo 'gagal masuk';
                }
        
            // 
            echo '<br>';
            if (2*3==$bagi)
                {
                    echo'hasilnya = 6'; 
                }
            else
                {
                    echo 'hasilnya gak sesuai(salah)'; // 
                }
            // hasilnya gak sesuai( salah ). karena $bagi sendiri bernilai FALSE
            //

            $a =30;
            $b =5;

            if ($a>31){
                print ' <br> hasilnya adalah ';echo $b+$a;
            }
            else {
                echo "<br> 2.hasilnya adalah"; echo $b-$a;
            }


    ?>
    <br>
    <h4>22 operator RELASI</h4>
    <br>
    <?
        /* operator relasi digunakan untuk membandingkan antara 2 objek,syarat,variabel dll
           <   kecil dari
           >   besar dari
           <=  kecil sama dengan
           >=  besar sama dengan
           ==  sama dengan
           === sama dengan dan menguji tipe data
           !=  tidak sama dengan atau negasi
           !== tidak sama dengan dan menguji tipe datanya
        */
        // contoh
        $ind = array();
        $internet=['cerpen','bloging','SEO'];
        $www =['cerpen','bloging','SEO'];
        $design  =['friendly','canvas','methode'];
        $design1  =['friendly','canvas','methode'];
        $a  =100;
        $b  ='100';
        // 
        echo '==  ';var_dump($a==$b) ; echo '<br>'; // apakah nilai dari $a sama dengan $b. TRUE
        echo '=== ';var_dump($a===$b) ; echo '<br>'; // apakah nilai dan tipe data dari $a sama dengan $b . FALSE
        echo '!==  ';var_dump($a!==$b) ; echo '<br>';
        echo '!=  ';var_dump($a!=$b) ; echo '<br>';
        echo '<   ';var_dump($internet<$design) ; echo '<br>'; // true karena array dengan nilai adalah true (dalam aturan konversi tipe data)
        echo '==  ';var_dump($internet==$design); echo '<br>'; // apakah $internet  MEMILIKI ISI YANG SAMA DENGAN $design? FALSE
        echo '=== ';var_dump($internet===$design); echo '<br>'; // apakah $internet memiliki ISI DAN TIPE DATA YANG SAMA DENGA $design? FALSE 
        echo '!=  ';var_dump($internet!=$design); echo '<br>';  // apakah isi $internet TIDAK SAMA DENGAN isi $design ? TRUE
        echo '=='  ;var_dump($design==$design1); echo '<br>';   // apaka isi $design SAMA DENGAN $design1? TRUE
        echo '!='  ;var_dump($internet!=$www); echo '<br>';   // apakah $internet MEMILIKI ISI YANG GAK SAMA DENGAN $www ? FALSE , karena ke2 variabel isinya sama


    ?>

    <h4>23 if else dan elseif</h4>
    <?php
    echo "<br>";
    // 1. IFELSE
    // if else digunakan untuk membandingkan antara maksimal 2 kondisi , jika kondisi pertama terpenuhi maka lakukan A Jika tidak maka lakukan B
    // bisa lebih dari 1 syarat dengan menggunakan operator logik seperti (AND OR )
    // jika salah satu syarat dan atau kondisi memenuhi kriteria maka syarat dan atau kondisi berikutnya diabaikan
    // kondisi pertama harus bernilai TRUE jika bernilai FALSE maka cetak hasil lainnya  
    /* syarat bisa berupa angka ,string maupun variabel
       tujuan dari  logika ini mencari nilai TRUE atau FALSE
       operator relasi/perbandingan (== === < > != !== >= <= ) digunakan untuk membandingkan syarat

       if (syarat=true){
        echo ' cetak HASIL A';
       }
       else {
           echo 'cetak HASIL B';
       }
            jika syarat TURE cetak HASIL A jika salah cetak HASIL B
    */

     // gimana caranya mengecek bebrapa nilai sekaligus sebagai sebuah syarat ? Contoh
     // CPNS lulus jika , tinggi >174cm nilai MM=80 atitude = baik , jika salah satu gak terpenuhi maka gagal. apakah ini fungsi elsif?
       $tinggi= 174;
        if ($tinggi>=170)
            {
                echo "selama kamu lulus masuk tni karena tinggi mencukupi";
            }
        else
            {
                echo"maaf kamu gak lulus tni karena kurang tinggi";
            }

    // cari banyak uang dari raka dan nila
    echo "<br>";
    $uraka = 10000;
    $urian = 9000;

    if ($uraka > $urian){
        echo '1 uang uraka lebih banyak dari uang rian';
        }
    else 
        {
            echo "2 uang rian lebih sedikit dari uang raka";
        } //  uang uraka lebih banyak dari uang rian
        echo "<br>";
        $absen=6;
        $kuis=9;
        $uts=3;
        $uas=8;
        // menguji lebih dari satu syarat dgn or ||
        // jika salah satu syarat TRUE maka hasilnya TRUE
        if ($absen > 9 || $kuis > 7 )  { 
            echo 'boleh ujian';
             } 
        else  {
            echo 'gak boleh';
            } // boleh ujian karena salah satu syarat true $kuis > 7 

        // menguji lebih dari satu syarat dgn && and 
        // TRUE jika semua syarat benar
        if ($absen > 9 && $kuis > 7 )  { 
            echo 'boleh ujian';
            }
        else  {
            echo 'gak boleh';
            } // gak boleh ujina karena salah satu syarat salah 



        // 2. ELSEIF
        /* pada ELSEIF kita bisa menguji lebih dari  2 KONDISI
           misal ingin menguji beberapa pernyataan untuk satu kasus
           contoh => rian dapat grade A jika nilainya 90 , grade B jika nilainya 70 , grade C jika nilainya 60 ,D jika nilainya 50
                     dibawah 50 grade E
           jika menggunakan IFELSE kita hanya bisa menguji sampai grade B saja karena IFELSE hanya dapat menguji 2 PERNYATAAN/STATMEN

           if(syarat)       // kondisi ke-1
           { statmeny}
           elseif(syarat)   // kondisi ke-2
           {statmen}
           elseif(syarat)   // kondisi ke-3
           {statmen}
           else
           {statmen}        // kondisi ke-n

        */
        echo '<br> Fungs Elseif <br>
        rian dapat grade A jika nilainya 90 , grade B jika nilainya 70 , grade C jika nilainya 60 ,D jika nilainya 50
        dibawah 50 grade E. nilai Rian = 59  <br>';
        $nilai_Rian=59;

        if($nilai_Rian >=90){
            echo 'A';
             }
        elseif($nilai_Rian >=70){
            echo 'B';
             }
        elseif($nilai_Rian >=60){
            echo 'C';
            }
        elseif($nilai_Rian >=50){
            echo "D";
             }
        else{
            echo "E";
            }
        // jika menggunakan ifelse
        echo '<br> Menggunakan IfElse <br>';
        if ($nilai_Rian >= 90){
            echo "A";
        }
        else{
            echo "B";
        }

      /*  else{
            echo "C";
        }
        */ // pernyataan C gak bisa ditampilkan atau eror karena IFELSE hanya menguji maksimal 2 pernyataan
        /*--------------------------<>----------------------------------*/
        // penting dipahami penggunaan <kecil dari >besar dari . tanpa menggunakan operator ini maka nilai yang dicek terbatas
        // pada nilai yang jadi syarat BUKAN NILAI DIANTARANYA . contoh IF($nilai_Rian==90) if($nilai_Rian==80) if($nilai_Rian==70)
        // maka pernyataan diatas hanya mengecek jika nilainya 90,80,70 tidak termasuk nilai diantaranya sprti 71 71 84 85 dll contoh
        $nilai_Rian1 =85;
        echo '<br> nilainya adalah ';
        if($nilai_Rian1 ==90){
            echo 'A';
             }
        elseif($nilai_Rian1 ==70){
            echo 'B';
             }
        elseif($nilai_Rian1 ==60){
            echo 'C';
            }
        elseif($nilai_Rian1 ==50){
            echo "D";
             }
        else{
            echo "E";
            }
            // hasilnya E , karena 85 tidak terdapat dipengujian. inilah yang dimaksud tidak menguji nilai diantara syarat2
    ?>

<br>
<h4>24 if bercabang (nested if)</h4>
<br>
<?php
/* if bercabang digunakan untuk mencari nilai dimana kita dapat menggunakan lebih dari 1 varibel sebagai kondisi
   pengujian
   => jika kondisi 1 true maka cek kondisi 2 , jika kondisi 2 true cetak hasil A jika kondisi 2 false cetak B
      jika kondisi 1 false maka cek kondisi 3 
   => jika kondisi 3 true cek kondisi 4 , jika kondisi 4 true cetak A jika kondisi 4 false cetak B
      jika kondisi 3 false cek kondisi 5 
   => jika kondisi 5 true cetek A jika false cetak B
   
   analogi diatas untuk 2 kali nested if yaitu pada kondisi 1 dan 3 sedangkan pada kondisi 5 adalah if biasa
   kita dapat membuat nested if sesuka hati tergantung seberapa rumit logika yang ingin dibangun , misalkan
   sebenarnya kita dapat membuat kondisi 2 sampai 5 berada didalam kondisi 1 , artinya if di dalam if didalam if
   di dalam if didalam if dan seterusnya
*/   
    $umur  = 1  ;
    $menikah = 'belum';
    
    if ($umur >=17){
        if($menikah=='sudah'){ // $menikah bernilai TRUE karena berupa variabel yang ada isinya (lihat bagaian 21. tipe data bolean dan konversi)
            echo 'jadilah suami yang baik'; // <= hasilnya  karena $umur TRUE dan $menikah TRUE
        }
        else{
            echo 'ok buatlah ktp mu'; // <= hasilnya  karena $umur TRUE dan $menikah FALSE
        }
    }
    else{
        echo 'maaf kamu belum cukup umur <br>';
    }
    echo "<br>";

if ($umur >19 || $menikah=='sudh'){
    echo 'boleh daftar pns <br>';
}
else {
    echo 'belum boleh daftar ';
}

// doa jofis
    echo '-----------------<br>';
    $aku = 0;
    $kamu = 'kamu';
    $kita = $aku && $kamu;
    if($kita == true){
         echo 'alhamdulillah berjodoh ';
    }
    else {
        echo 'ya Allah tolong jodohkan';
    }
    echo '<br>';
    var_dump($kita);

?>
<br>
<h4>25.Tentang operator</h4>
<br>

<?
    // A. assigment
    /* x += y  -> x= x + y
       x -= y  -> x= x - y
       x *= y  -> x= x*y
       x /= y  -> x= x / y
       x %= y  -> x= x % y  // modulus sisa bagi

    */
     $x = 20; $y=3;
     
     echo '1. x / y '. $x / $y; echo '<br>'; // 6,66
     echo "2. x +=y ". $x += $y; echo '<br>'; // 23
     echo '3. x -=y '. $x -= $y; echo '<br>'; // 20
     echo '4. x *=y '. $x *= $y; echo '<br>'; // 60
     echo '5. x /=y '. $x /= $y; echo '<br>'; // 6,66 oke yg ini belum paham
     echo '4. x %=y '. $x %= $y; echo '<br>'; // 2  ( 20 / 3 = 6 , 6x3=18 , 20-18= 2; 2 adalah sisa hasil bagi(modulus) dari 20/3)

     // B. String operator
     // . untuk menyambung antar text 
        $a = 'aku seorang programmer ';
        $b = 'yang akan membangun startup bernama Arena Sport';

        echo $a.$b. '<br>';
        echo $a. '<br>';

    // .= -> $a + $b untuk menyambungkan texjuga

        echo $a .= $b . '<br>';

    // C. ternery 
    // untuk mempersingkat koding namun gak teknik ini gak bisa diterapkan kesemua kondisi
    // $var ? 'ekspresi1' : 'ekspresi2;
        $kehadiran = 5  ;
       echo 'alfriansyah ';  echo   $kehadiran >4 ? 'boleh ikut ujian' : 'gak boleh ikut ujian'. "<br>"; 
            // jika kehadiran lebih besar dari 4 boleh ikut ujian jika tidak maka gak boleh
            // contoh diatas dapat dibuat juga dengan operator logika IF . kalau belum terbiasa dengan koding sebaiknya gunakan
            // cara biasa karena metode ternary agak sulit untuk pemula

    // D. null collapsing   (??) diperkenalkan di PHP 7 pantesan disini eror mulu
    //    jika $var1 terbukti ada nilainya maka tampilkan nilai tersebut jika tidak subtitusi (ganti) dgn nilai yang ditentukan
    //    namun null collapsing tidak menguji apakah nilainya benar atau salah , dia hanya menguji ada atau tidak nilainya
    //    kondisi yang di uji dapat berupa string, nilai maupun variabel
        $kerjaan1 = 'pengusaha';
        $kerjaan2 = 'bisnismen';

        // echo $kerjaan1 = $kerjaan1 ?? $kerjaan2; 
        // echo $color = $color ?? "red";

    echo "<br>";
    
        $average = 70;
        echo 'nilai kamu ';
        switch ($average){
            case  (90) : 
                echo 'Grade A';
                break;
            case (80) : 
                echo 'Grade B';
                break;
            case (70): 
                echo 'Grade C';
                break;
            case (60) : 
                echo 'Grade D';
                break ;
            default :
                echo 'E';
        }


?>
<br>
<h4>26.Switch Case</h4>
<br>
    <?
    /*Switch (yang diuji) , berpungsi untuk menentukan variabel/nilai(true/false) yang di uji 
    case (syarat) , berfungsi untuk menguji syarat baik berupa variabel,nilai(true/false) jika hasilnya true tampilkan statmennya
    echo untuk  menampilkan statmennya
    break , menghentika proses uji apakah bernilai true atau false , jika true maka proses berhenti jika false cek kondisi berikutnya
    default, hasil yang ditampilkan jika ternyata tidak ada kondisi yang terpenuhi, jika default tidak diset sementara nilai
    yang memenuhi syarat gak ada maka gak akan ada yang ditampilkan
    /  switch (yang diuji(variabel,fungsi dll)){
        case(syaratnya):
            echo "output jika syarat terpenuhi";
            break;
        case():
            echo;
            break
        default:
            echo;
        }
    */
      echo 'contoh 1 mencari grade nilai';      
    $average = 70;
     echo 'nilai kamu ';
    switch ($average){
        case  90 :              // jika $average adalh 90 grade A jika tidak uji case 2
            echo 'Grade A';
            break;
        case (80) :             // jika $average adalh 80 grade A jika tidak uji case 3 dst
            echo 'Grade B';
            break;
        case (70): 
            echo 'Grade C';
            break;
        case (60) : 
            echo 'Grade D';
            break ;
       
    }
    echo '<br> hari ini adalah hari : ';
    $hari = [1=>'senin',2=>'selasa',3=>'rabu',4=>'kamis',5=>'jumat',6=>'sabtu',7=>'minggu'];

      switch ($hari[5]){
        case ($hari[1]):
            echo $hari[1];
        break;
        case ($hari[2]):
            echo $hari[2];
        break;
        case ($hari[3]):
            echo $hari[3];
        break;
        case ($hari[4]):
            echo $hari[4];
        break;
        case ($hari[5]):        // hasilnya jumat
            echo $hari[5];
        break;
        case ($hari[6]):
            echo $hari[6];
        break;
        default:
            echo 'minggu';
    }
    echo '<br> tampilkan hari ';//menggunakan variabel bantu ($yaum) untuk mencari nilai arrray menggunakan if , pada switch gak perlu
    $yaum=$hari[3];
    if($yaum==$hari[1]){
        echo $hari[1];
    }
    elseif($yaum==$hari[2]){
        echo $hari[2];
    }
    elseif($yaum==$hari[3]){
        echo$hari[3];
    }
    else{
        echo 'kamis';
    }
    echo '<br>';
    var_dump($yaum).'<br>';
    echo 'cari jenis kereta yang tepat. perkotaan = beat, pantai = vixion, bukit = trail,kampung= supra x <br>';

    $kend = [ ['kota'=>'beat','pantai'=>'vixion','kampung'=>'supra x'],
              ['kota'=>'vario','pantai'=>'gl pro','kampung'=>'shogun sp']  

];

    echo 'tipe kendaraan untuk di kota adalah kereta ';
        $kotaa = $kend[0]['pantai'];
        if($kotaa==$kend[0]['kota']){
            echo $kend[0]['kota'];
        }
        elseif($kotaa==$kend[0]['pantai']){
            echo $kend[0]['pantai'];
        }
        else{
            echo $kend[0]['kampung'];

        }
    echo '<br> tipe kendaraan dipantai adalahh ';
    switch ($kend[1]['pantai']){
        case 'kota':
            echo $kend[1]['kota'];
        break;
        case 'pantai':
            echo $kend[1]['pantai'];
        break;
        default;
            echo $kend[1]['kampung'];
    }
 echo siswa('andi','langkat',20);
// gimana caranya mencari nilai array dan mengujinya menggunakan perulangan? kalau seperti diatas kan masih manual dicek satu-satu
   
    ?>
<br>
<h4>27.Fungsi</h4>
<br>
   <?
    /*
        => fungsi adalah sebuah instruksi yang dibuat agar bisa digunakan berkali2 sebenarnya ada banyak fungsi bawaan pada php seprti
        print_r, echo, min, max strlend, count, array_merge dll . kita juga dapat mendeklarasikan fungsi sendiri sesuai keinginan
        agar dapat digunakan sebuah fungsi harus dipanggil
        => komponen pada fungsi 
            - function  , syntax yang wajib untuk mendeklarasikan sebuah fungsi
            - nama fungsi 
            - parameter (nilai acuan), tanpa parameter fungsi tetap bisa dibangun namun agar lebih flexibel sebaiknya dibuat , parameter
              bisa dibuat semaunya . parameter berupa variabel 
            - return , untuk menghentikan dan menampilkan hasil dari fungsi jika syarat bernilai TRUE atau kondisi merupakan nilai default
                       return gak bisa menampilkan output secara langsung , karenanya cocok digunakan untuk membangun fungsi, untuk me
    */
    
    // 1. fungsi sederhana tanpa parameter
    function selamat(){
        echo '--------selamat datang ';
        echo 'para pemenang-------<br>'; 
        
    }
    echo selamat().'<br>'; // memanggil fungsi selamat. menampilkan selamat datang para pemenang

    //2.  fungsi dengan parameter. nilai fungsi dapat diinputkan sendiri sebelum dipanggil
     function siswa ($nama,$alamat,$umur){
         echo $nama.' '. $alamat.' '.$umur;
     }

   echo siswa('rian','medan',21); // 3 parameter $nama $alamat $umur ketiganya harus diisi sesuai yang sudah dideklarasikan 
     selamat();

    function cari($k_kunci){
        echo $k_kunci;
    }

    echo cari('integral').'<br>'; // 1 parameter yaitu $k_kunci


    // 3. menggunakan return, untuk menmpilkan hasilny harus di echo/ print_r dll
     function luas_lingkaran($panjang,$lebar){
        $luas = $panjang * $lebar;
        return $luas;
     }

     function rata2($mtk,$biologi,$bing,$fisika){
         $n_rata2= ($mtk+$biologi+$bing+$fisika)/5;
         return $n_rata2;
     }
     $arry= 12;
     $af  = 10;
     echo 'nilai rata2 harid adalah ' . rata2(70,40,78,90). '<br>';
    echo 'luas lingkaran adalah '.luas_lingkaran($arry,$af).'<br>';
//    4.  Scope (jangkauan variabel )
/*      pd dasarnya variabel didalam sebuah fungsi hanya terbaca/berlaku didalam fungsi tersebut 
        sebuah variabel akan menjadi asing jika tidak dideklarasikan dalam sebuah fungsi akibatnya variabel tersebut tdk bisa
         di gunakan 
         namun variabel diluar lingkup fungsi dapat digunakan apabila bersifat global dengan cara menambahkan 
         global  diikuti variabelnya  contoh :
            global $varibel1 , $variabel2 ; 
        jika lebih dari 1 variabel maka setiap variabel dipisah dengan tanda koma (,);
*/
     $buku = 2000;
     $beli = 3;
        function hitung(){
            global $buku,$beli;
           $total = $buku * $beli;
           return $total; 
        }

   echo 'jumlah yang harus dibayar Rp '. hitung().'<br>'; 
   
   // $buku dan $beli tidak dideklarasikan didalam fungsi hitung namun dapat dioperasikan karena didefinisikan sbg variabel global pd fungsi
   // tapi sepertinya ini gak fleksibel karena nilai harus diinput haya dari text editor (hard code) CMIIW
        function jumlah ($buku,$beli){
            $total = $buku * $beli;
            return $total;
        }
    echo 'total bayar '.jumlah(3000,4).'<br>'; // pada fungsi biasa lebih fleksibel karena nilai bisa diletakkan didalam parameter
         
//  5. Anonymous function (fungsi tanpa nama) / variabel yang jadi fungsi 
/*  biasanya fungsi ini diletakkan dalam varibel ,umumnya digunakan untuk fungsi sekali pakai
    karena berupa variabel maka nilai dapat dioper dgn variabel lainnya contoh
        $var_fungsi ();
        $oper =$var_fungsi; $oper berisi nilai dari $var_fungsi
*/  
    $selamat = function (){
        echo 'selamat datang  di indonesia  <br>';
    };
    $selamat(); // $selamat adalah sebuah fungsi 
    // mengoper nilai 
    $salam =  $selamat; // isi dari $salam adalah $selamat . artinya $salam mewarisi nilai $selamat

    echo 'assalamaualaikum'.$salam();

// fungsi didalam fungsi
// function test($callback){
// 	echo 'Hai ' . $callback();
// }
 
// test(function(){
// 	$x = 10;
// 	return ($x + 1);
// });


function faktorial($angka) {

  if ($angka <2 || $angka<0  ) {
    return $angka;
  } else {
  // memanggil dirinya sendiri
  return ($angka * faktorial($angka-1));
  }
}
$n = -4; 
// memanggil fungsi
echo "faktorial 5 adalah " .faktorial($n) ;

$a= 5;
$fal = $a * ($a-1);
 echo '<br> faktorial dari <br>'.$fal;

 echo '<br>';
 function nama_bulan($bulan, $tahun = 2016 ) {
	echo $bulan . ' ' . $tahun;
}1
//nama_bulan('Januari',2011);
    ?>
<br>
<h4>28.Callback Function</h4>
<br>
    <?
    /* 1. memanggil fungsi didalam fungsi
       2. Memanggil fungsi setelah fungsi lainnya dijalankan 
       jika fungsi sebelumnya ternyata bukan sebuah fungsi maka hanya fungsi pertama yang berjalan
       3. fungsi yang dibuat dan dieksekusi didalam fungsi lain
       4. parameter fungsinya adalh fungsi lainnya
       5. 
       function nama_fungsi ($callback){      // $parameter akan disubtitusikan oleh fungsi lainyya($asal)
           echo "isi fungsi";
           $callback;
       }
        $asal = function(){
            echo 'isi';
        }
        echo nama_fungsi($asal) // $asal adalh $callback
    */
    function setnama($callback){
            echo 'nama kamu ';
            $callback();
        }
    $tnama =function (){
         
        echo 'alfri';
    };
    setnama($tnama);
    /* 6. lebih dari 1 parameter pada fungsi utama , gunanya agar nilai subtitusi bisa berpariasi , contoh sebelumnya isi $tnama hanya
          diinputkan didalamnya,dengan lebih dari 1 parameter maka kita bisa mengisi nilai fungsi nya dengan variabel diluar fungsi 
          itu sendiri
        function ($callback){
            echo 'nama dia '
            call_user_fun($callback,$parameter_lainnya);
        }
        $asal =function ($parameter_lainnya){
            echo $parameter_lainnya;
        }
    */
    echo "<br>";
    $sub_tujuan =' surga'; 
    function kehidupan ($callback){
             echo 'jalan menuju ';
        call_user_func($callback,'roma italia ', 'ada banyak'); // roma italia merupakan subtitusi dari $tujuan
                                                                // ada banyak  merupakan subtitusi dari $banyak
        };// gimana caranya roam italia / ada banyak, bisa diinput kan dari luar fungsi  supaya lebih fleksibel seperti
          // pada fungsi umumnya?

    $jalan= function($tujuan,$banyak){
            echo $tujuan , $banyak;
        };
    $ruang = function ($text){
        echo $text;
    };
    $tex='cek';

    kehidupan($jalan);
    echo '<br>';
 

    /* 7. karena parameter dari callback harus berupa fungsi pd contoh diatas $jalan . maka jika bukan fungsi maka program akan 
          tetap menampilkan isi dari fungsi utama namun error dgn pesan function '$blabalbal' not found atau error sejenis
          kita dapat ngecek dan memberi peringatan jika parameternya bukan fungsi. dgn bantuan is_callable() dan bantuan IF
            if (is_callabel($callback)){     // cek apakah subtitusi dari $callback merupakan fungsi
                call_user_func($callback) 
            }
            echo " subtitusi dari $callback bukan fungsi "
        }
    */
    // contoh
    kehidupan($tex); // error karena  bukan merupakan fungsi 
    echo '<br>';
    function hari ($callback){ // $callback subtitusi untuk $c_hari
        echo 'hari ';
        if(is_callable($callback) ){ // apakah $callback($c_hari) merupakan fungsi
            call_user_func($callback,'ini adalah hari senin'); // jika ya jalankan fungsi hari dan fungsi $c_hari 
        }                               
        else {
            echo ' bukan fungsi';} // jika tidak jalankan fungsi hari dan tampilkan isi ELSE
       // $callback();
    }

    $c_hari = function ($t){ // $text subtitusi  dari 'ini adalah hari senin' 
        echo $t;
    };

    function cekk ($callback){
         echo 'hari ini ';
        if (is_callable($callback) ){
            echo 'hari jumat';
        }
        else{
            echo 'bukan fungsi';
        }
    }

    hari($c_hari); // hari senin
    echo '<br>';
    hari($cek); // hari bukan fungsi. karena $cek bukan fungsi manapun
    echo '<br>';
    cekk ($c_hari); // hari ini hari jumat. cekk gak perduli apakah $c_hari punya subtitusi apa gak karena dia hanya ngecek fungsi atau tidak
    echo '<br>';
    cekk ($cek); // hari ini bukan fungsi , karena $cek1 bukan fungsi manapun

    /* fungsi $hari sebenarnya terjadi ketidak konsistenan ketika digunakan pada fungsi cekk karena $text pada $c_hari jadi 
        tidak jelas kegunaannya , fungsi diatas belum bisa dikatakan sebuah fungsi yang baik karena masih berbenturan jika di
        gunakan untuk memanggil fungsi lainnya ($callback)
    */

  // die( ' ngetes')
  
    ?>  
<br>
<h4>29. Php.ini </h4>
<br>

<?
    /* PHP.ini adala file php yang berisi pengaturan default dari php didalamnya terdapat setingan untuk mengatur hal2 yang umum pada
       php seperti 
       => display_eror = on/off , jika on maka program yang error akan ditampilkan jika off maka program yang eror gak dikasi tau
       => short_open_tag = on/ off, jika ON maka <? ?> gak error jika OFF maka error 
       DLL
    pada setiap aplikasi web server berbeda2 lokasi PHP.INI nya , pada appserve buka file:///C:/AppServ/php5/php.ini  
    setelah file terbuka cari pengaturan yang mau di ubah . agar lebih mudah gunakan CTRL+F untuk mencari nya
    */
?>
<br>
<h4>30. DIE & Var_Dump</h4>
<br>
    

<?
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y);
echo '<br>';
$a = $x = array("a" => "red", "b" => "green"); 
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y); // apakah $x dan $y berbeda?  true  karena $x dan $y berbeda 
echo '<br>';
var_dump($x==$y);  // apakah $x dan $y sama ? false karena $x dan $y berbeda
echo '<br>';
var_dump($x == $a); // apakah $x dan $a sama ? true karean $x dan $a sama 

// union of $x and $yArray ( [a] => red [b] => green [c] => blue [d] => yellow ) 
    /* DIE() DAN vAR_DUMP() adalah sebuah fungsi biasa yang juga membutuhkan parameter digunakan untuk debugging (mencari error)
       =>   die() berfungsi untuk menghentikan script pada baris dimana dia di tulis gunanya untuk mencari tahu pada bagian mana 
            program yang eror,  jadi die() disisipkan diantara baris program 
            bisa juga untuk menampilkan pesan jika sesuatu yang di bandingkan bernilai false , digabung  dengan Logika dan or
    */

    /* => var_dump() digunakan untuk menampilkan detail dari suatu variabel dan atau menacari tau apakah variabel tersebut bernilai
          true atau false
    */

    $file = 'baca.txt';
    fopen($file,'r') or die ('file gak ditemukan');
    echo $x;
    var_dump($x == $a);
?> 
<?
    echo '<br> cek kondisi terkini';

?>

    <?php
        /* cari algoritma unuk memilih istri berdasarkan syarat2 berikut , setiap syarat memiliki nilai tersendiri
           solehah
           cantik
           pandai masak 
           penurut
           manja
           cuek
           cerewet
        // */    
        // echo'mencari istri yang sesuai <br>';
        // $istri =['solehah'=>5,'cantik'=>2,'p_masak'=>3,'penurut'=>3,'manja'=>4["],'cuek'=>-2,'cerewet'=>-1];
        // $istri1 =['solehah','canti','p_masak','penurt','manja','cuek','cerewet'];

        //   if($istri ['solehah']==true & ['cantik']==true & ['cerewet']==true){
        //     echo 'nilainya adalah= ';  print_r ($istri['solehah']+$istri['cantik']+$istri['cerewet']);
        //     }
        //     else {
        //        echo 'nilainya adalah= ';     print_r ($istri['solehah']+$istri['cantik']+$istri['cerewet']);
        //     };

        // lampu lalulintas 
        // terdapat lampu lalulintas di 2 simpang masing2 simpang memiliki 3 lampu yaitu merah kuning hijau 
        // jika salah satu lampu pada simpang menyala maka lampu lainnya harus menyala dengan warna yang berbeda pada simpang lainnya
        /*

            simp1=merah 1,kuning1, hijau1
            simp2=merah 2,kuning2, hijau2

            jika simp1.m1 menyala maka sk1,sh1 mati & simp2 h2 hidup k2.m2 mati
        */
        // percobaan  dibawah ini belum  berhasil sepenuhnya ! karena lampu lalu-lintas gak sesederhana ini 
            // echo '<br> lalulintas <br>';
            // $lalulintas =[['merah1'=>'menyala','kuning1'=>'mati','hijau1'=>'mati'],
            //               ['merah2'=>'menyala','kuning2'=>'menyala','hijau2'=>'menyala']
            //             ];
            //         if($lalulintas [0]['merah1']=='menyala'& $lalulintas [0]['kuning1']=='mati' & $lalulintas [0]['hijau1']=='mati'){
            //             echo    "jalan di simpang 1 dan berhenti di simpang 2";
            //         }
            //         else{
            //             echo 'jalan di simpang 2 dan berhenti di simpang 1'; 
            //         }
            //     echo $lalulintas[0]['kuning1']. '<br>'


            

 

         
        // ------------------------<><><><>-----------------------------------------

        // echo 'amembuat segitiga <br>';gjnh
        // /*
        //     $num_char merupakan jumlah karakter vertikal dan horizontal
        //     untuk kerapiansikan nilai ganjil misal 27 atau 31 
        // */
        // $num_char 	 = 29; 
        // // onehalf_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
        // $onehalf 	 = floor($num_char / 2);
        // $onehalf_var = $onehalf;
        // $char1 		 = 'n';
        // $char2 		 = '*';

        // echo '<div style="font:bold 16px courier new; line-height:10px">';
        // // loop baris
        // for ($row = 1; $row <= $num_char; $row++)
        // {
        //     // loop kolom
        //     for ($col = 1; $col <= $num_char; $col++)
        //     {
        //         $char =	$col > $onehalf_var && $col <= ($num_char - $onehalf_var) ? $char2 : $char1;
        //         echo $char;	
        //     }
        //     $row <= $onehalf ? $onehalf_var-- : $onehalf_var++;	
        //     echo '<br/>';
        // }
        // echo '</div>';

    ?>

      
            
</body>
</html>


                                                     










 


