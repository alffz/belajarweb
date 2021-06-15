<?php
echo "Jum'at 25-12-2020";
// 1 pendahuluan
// membuat sebuah class , class nama_class { isi class disini }

// 2 class dan objek
// class
class motor {

    /* isi class baik berupa properti dan method bisa diisi disini */
}

// membuat sebuah objek berdasarkan class yang udah didefinisikan sebelumnya 
// diawali dengan keywoard new nama_class()

//  objek
$mobil1 = new mobil();

// $mobil1 adalah sebuah objek dimana sifat dan prilakunya didefinisikan pada class mobil()

/* 3 properti dan method  */

// properti -> adalah sebuah variabel yang menyimpan data dari sebuah class 
/* sebuah mobil memiliki properti seperti , nama, warna, merek, tahun keluar dll */

// method -> adalah sebuah prilaku/function dari sebuah class 
/* sebuah mobil memiliki method --> BelokKanan(), Maju(), Mundur(), TambahKecepatan() dll

contoh class dari sebuah mobil */

    class mobil {
        // properti  dengan nilai default 
        public $merek = "Honda";
        public $type  = "Crv";
        public $warna = "merah", $Cc    = 1300, $tahun = 2018;
        // properti dengan nilai NULL 
        public $berat,$ukuran,$dll;

        // method, fungsi dari sebuah mobil seperti bergerak , berhenti , maju , mundur dll

        // method maju
        public function maju (){
            echo $bergerak = "bergerak ke depan";
        }

        // method mundur
        public function mundur(){
            /*      $this           */
            // memanggil properti yang ada pada class dgn $this
            // karena lingkup variabel maka dibutuhkan $this untuk memanggil variabel pada class yang sama                
            return "$this->merek dengan type $this->type";
        }
        public function spesifikasi(){
            /*      $this           */
            // memanggil properti yang ada pada class dgn $this
            // karena lingkup variabel maka dibutuhkan $this untuk memanggil variabel pada class yang sama                
            return "$this->merek dengan type $this->type";
        }
        
        // tambah kecepatan kecepatan
        public function TambahKecepatan(){

        }

        // dan lain lain
    }

    /* Visibility (hak akses) ada 4 yaitu public, privat, prtected dan default dimana default dari visibility
        adalah public. */


    // Menakses properti dari sebuah class pada objek menggunakan -> (mines lebih besar dari)
    // $objek->nama_properti;
        // membuat objek mobil
        $mobil1 = new mobil();
        echo 'merek dari mobilnya adalah '. $mobil1->merek; echo '<br>'; // $mobil1 adalh objeknya dan merek adalah properti
        echo 'berat dari mobilnya adalah '. $mobil1->berat; echo '<br>'; // NULL karena nilai defaultnya gak di set pada class mobil
        // memberi nilai pada properti 
        echo 'berat dari mobilnya adalah '. $mobil1->berat=200; echo ' Kg <br>'; // nilainya menjadi 200  dari sebelumnya NULL 
        
    // mengakses dan memberi niali sebuah method
    // $objek -> method();
        // membuat objek 
        $mobil2 = new mobil();
        // memanggil isi method maju(), 
         $mobil2-> maju(); echo '<br>';
         echo 'merek mobilnya adalah '. $mobil2->mundur();
    

    // mengganti propeti dari sebuah method 
    $mobil3 = new mobil();
    $mobil3->merek = "Cevrolet";
    $mobil3->type = "G4Rx";
    echo "<br>";
    echo "mobil 3 mereknya adalah ". $mobil3->spesifikasi();

    $mobil4 = new mobil();
    echo "<br>";
    // menampilkan nilai default dari merek dan type pada class
    echo "mobil 4 mereknya adalah ". $mobil4->spesifikasi();

    echo "<br>4. Constructor";
    /* constructor adalh method spesial yang dijalankan pertama kali ketika sebuah objek di buat
       berfungsi untuk merubah nilai properti secara lebih fleksibel dan rapi
       biasanya digunakan untuk menyimpan nilai yang harus di dekalrasikan terlebih dahulu
    */

    class hewan {
        // properti2 ini tidak memiliki nilai default dan kita ingin memasukkan nilai defaultnya dari fungsi __construct
        public $jenis , $warna, $kaki, $lingkungan,$nama;

        // CiriHewan akan dijalankan setelah fungsi __construct walaupun faktanya fungsi CiriHewan dideklarasikan terlebihdahulu
        public function CiriHewan(){
            // $this->nama untuk menangkap isi properti $nama dst
            return "hewan ini bernama <b>$this->nama</b> berkaki <b>$this->kaki</b> berwarna <b>$this->warna</b> dan berasal dari jenis <b>$this->jenis</b> tinggal di  <b>$this->lingkungan</b>  ";
        }

        // membangun fungsi __construct dan mensubtitusi nilai yang diinputkan ke dalam properti class
        public function __construct($jenis_hewan='mamalia', $warna_hewan='cokalt hitam',$jumlah_kaki=4,$lingkungan_hidup='darat',$nama_hewan='sapi'){
            // menangkap inputan user dan mensubtitusikan ke dalam properti class
            // $this->jenis_hewan = $jenis , untuk mensubtitusi nilai $jenis_hewan ke dalam $jenis 
            $this->jenis      = $jenis_hewan;
            $this->warna      = $warna_hewan;
            $this->kaki       = $jumlah_kaki;
            $this->lingkungan = $lingkungan_hidup;
            $this->nama       = $nama_hewan;
        }


    }
    echo '<br>';
    // buat objek hewan 
   $hewan1     = new hewan("karnivora","bening","0","air tawar","ikan");
   echo $hewan1->CiriHewan();

    class buku {
        // properti 
        // public $judul,
        //        $penulis ,
        //        $penerbit ,
        //        $harga   ;
        // fungsi __construct untuk mendapatkan nilai dari luar
        // jika sudah deklarasikan properti didalam __construct maka gak perlu dideklarasikan lagi pada class utama , dan visibilitynya
        // mengikuti visibility __construct nya 
        // harus dikasih nilai default jika properti di deklarasikan di dalam __construct?
        public function __construct($judul='negeri para bedebah',$penulis='tere liye',$penerbit= "gramedia",$harga= 10000){
            $this->judul_buku = $judul;
            $this->penulis_buku= $penulis;
            $this->penerbit_buku= $penerbit;
            $this->harga_buku = $harga;

            // $this->judul_buku , adalah properti yang akan dipakai di fungsi lainnya , dimana ini akan mensubtitusi $judul 
            // $judul            , adalah 
        }
        // tampilakn properti tertentu
        public function tentangbuku(){
            return "judul bukunya <b>$this->judul_buku</b> penulisnya adalah <b>$this->penulis_buku</b> dan penerbitnya adalah <b>$this->penerbit_buku</b> ";
           
        }
        
    }
    echo '<br>';
    // objek buku 
    // jika gak ada parameternya maka yang ditampilkan nilai default pada __construct
    $buku1 = new buku();// judul bukunya negeri para bedebah penulisnya adalah tere liye dan penerbitnya adalah gramedia
    echo 'buku1 '. $buku1->tentangbuku();
    echo '<br>';
    // jika ada parameternya maka itu yang ditampilkan        
    $buku2 = new buku('anak singkong','Chairul tanjung','kompas',555);
    echo 'buku2 '. $buku2->tentangbuku(); // buku2 judul bukunya anak singkong penulisnya adalah Chairul tanjung dan penerbitnya adalah kompas

    echo "<br>5. Objek type";
    /* adalah sebua tipe data yang bertipe objek, atau dengan kata lain objek sebagai tipe data . tipe data sting int char dll biasanya 
       hanya menyimpan 1 data untuk dirinya sendiri , sedangkan tipe data objek bisa menyimpan tipe data lainnya maupun sebuah fungsi
       (mirip seperti array) pada contoh sebelumnya diatas $buku1 dan $buku2 adalah sebuah tipe data objek yang berisi properti dan
       method sama namun dengan nilai yang  berbeda(setiap objek berisi data yang berbeda)
    */
    // contoh lain, membuat objek untuk menampilkan data dari objek lainnya
        class JenisHewan{
            public function animal($hewan){
                // $hewan disini harus sama dengan class hewan yang udah di deklarasikan diatas
                return "jenis hewannya {$hewan->jenis} hidup di {$hewan->lingkungan} dan berkaki {$hewan->kaki} disebut dengan {$hewan->nama}";
            }
        }
        echo    '<br>';
        echo "Objek Type <br> ";
    // JenisHewan juga merupakan sebuah tipe data objek yang berisi informasi dari objek hewan
    // insktansi objek JenisHewan
        $jehewan    = new JenisHewan();
        var_dump($jehewan);
        $hewan3 = new hewan('karnivora','','2','darat','Ayam');
        echo '<br>';
        echo 'menampilkan ciri2 hewan dengan class lain => '. $jehewan->animal($hewan3);
    
    
    echo "<br> 6. inheritance / pewarisan bagian 1";
    // mewarisi sifat dari Class Parent yang visibilitnya Public
    // dibuat dengan menambahkan keywoar extends
    // berguan untuk menambahkan fungsionalitas/kegunaan dari Class induk 
    // inheritance mencari method pada child terlebih dahulu jika gak ada baru di cari di parentnya 
    // contoh 
    /*      terdapat sebuah objek1 untuk menampilkan isi dari objek lainnya (objek2) dimana objek yang ditampilkan lebih dari 1 dan memiliki
            properti yang berbeda .contoh kambing memiliki jenis bulu dan kupu-kupu memiiki warna sayap 
            kedua properti ini (jenis bulu dan sayap ) adalah berbeda maka jika objek1 berisi properti yang dimiliki masing2 objek 
            maka ini gak jadi masalah . 
                contoh => class animals{
                                public function __construct($ukuran,$jenis,$lingkungan,$bulu){
                                    #code here
                                }
                            } 
                            class diatas relevan untuk kambing tetapi tidak relevan untuk kupu2  , karena kupu2 gak punya bulu maka
                            seharusnya class kupu2 sebagai berikut
                          class animals{
                              public function __construct($ukuran,$jenis,$lingkungan,$warna_sayap){
                                  #code here
                              }
                          }
                          sebenarnya kita bisa tambahkan properti untuk masing2 hewan tapi in bakalan sulit dan gak efektif 
                          class animals{
                              public function __construct($ukuran,$jenis,$lingkungan,$bulu,$warna_sayap){
                                    #code here
                                }
                          }
                atau kita bangun class untuk masing2 hewan dan ini juga gak efektif , padahal umumnya hewan memiliki ciri2 yang sama 
                seperti  jenis , makanan, berkembangbiak , jumlah kaki dll. maka kita bisa gunakan konsep pewarisan utnuk mewarisi 
                ciri2 hewan yang sama dan membuat child untuk properti nya yang berbeda

            membuat chield dgn keyword extends . class class_induk extend class_child
        */
        // contoh tanpa child class 
        class barang{
            // 
            public function __construct($merek,$ukuran,$warna,$benang,$plastik,$jenis){
                $this->merek = $merek;
                $this->ukuran= $ukuran;
                $this->warna = $warna;
                $this->benang = $benang;
                $this->plastik= $plastik;
                $this->jenis  = $jenis;
            }

        }
        class infobarang{
            public function infob($barang){
                $infoo = "merek {$barang->merek} ukuran {$barang->ukuran} yg berwarna {$barang->warna} terbuat dari ";
                if($barang->jenis == 'baju'){
                    $infoo .= " {$barang->benang}";
                }else{
                    $infoo .= " {$barang->plastik}";
                }
                return $infoo;
            }
        }
        // class infobarang mememcahkan masalah ketika objek memiliki ciri2 yang berbeda melalui logika if
        $barang1    = new barang("puma",'27','merah','nilon','null','baju');
        $ibarang    = new infobarang();
        // 
        echo "<br>";
        echo $ibarang->infob($barang1);
        echo "<br>";

    echo "<br>";
    echo "7. Inheritance bagian 2 ";
    echo "<br>";
        // buat class utama
        class elektronik {
            public function __construct($nama,$warna,$batrai,$berat,$chipset,$dinamo,$tabung){
                $this->nama     = $nama;
                $this->warna    = $warna;
                $this->batrai   = $batrai;
                $this->berat    = $berat;
                $this->chipset  = $chipset;
                $this->dinamo   = $dinamo;
                $this->tabung   = $tabung;
            }
            public function keterangan(){
                // 
                $ket    = "nama barang {$this->nama} warnanya {$this->warna}  dengan berat {$this->berat} ";
                return $ket;
            }

        }

        /*  buat class child dari elektronik */

        // processor untuk menampung elektronik yang memiliki dinamo
        class handphon extends elektronik{
            public function getinfo(){
                $ket     = "Handphon : {$this->keterangan()} dengan batrai {$this->batrai} bertenaga {$this->chipset} ";
                return $ket;
            }
        }


        // dinamo untuk menampung elektronik yang memiliki processor
        class mesincuci extends elektronik{
            public function getinfo(){
                $ket    = "mesin cuci : {$this->keterangan()} berdinamo {$this->dinamo} ";
                return $ket;
            }            
        }

        // batrai untuk elektronik yang memiliki batrai 
        class kereta extends elektronik {
            public function getinfo(){
                $ket    = "kereta : {$this->keterangan()} berdinamo {$this->dinamo}";
                return $ket;
            }
        }
        /* dan lain2 , child dibuat karena gak semua elektronik memiliki properti  yang sama , seperti mesin cuci gak punya processor 
           dan batrai (untuk saat ini) dll */

        // menggunakan child 

        $galaxyA12  = new handphon ("galxyA12","dark blue","5000","156 g",'Snapdragon 445','','');
        echo $galaxyA12->getinfo();
        echo "<br>";
        $polytron   = new mesincuci ("paw 9933","cream putih","","10 kg",'','Dn 35 Watt','stenles');
        echo $polytron->getinfo();

        echo "<br>";
        echo "8. Overriding/mengambil alih";
        echo "<br>";
        /* pada kasus dimana nama function pada Parent dan Child sama maka PHP akan mengeksekusi fungsi berualng2 hingga terjadi 
           rekursif , contoh 
                        class parent {
                            public funtion info(){

                            }
                        }

                        class child extends parent{
                            public function info{
                                return "{$this->info()}"
                            } 
                        }
            ketika child di jalankan maka akan terjadi rekursif karena funtion info() pada child dan parent memiliki nama yang sama
            untuk mengatasi ini bisa dilakukan teknik overriding
                    contoh 
                        class child extends parent{
                            return parent::info();
                        }
            parent::info(), jalankan fungsi info() yang ada pada parent
        */
        // class parent
        class elektronik1 {
            public function __construct($nama,$warna,$batrai,$berat,$chipset,$dinamo,$tabung){
                $this->nama     = $nama;
                $this->warna    = $warna;
                $this->batrai   = $batrai;
                $this->berat    = $berat;
                $this->chipset  = $chipset;
                $this->dinamo   = $dinamo;
                $this->tabung   = $tabung;
            }
            public function keterangan(){
                // 
                $ket    = "nama barang {$this->nama} warnanya {$this->warna}  dengan berat {$this->berat} ";
                return $ket;
            }

        }
        // class child
        class handphon1 extends elektronik1{
           
            public function keterangan(){
                // parent::keterangan() == $this->keterangan() 
                $ket    = "handphon : ". parent::keterangan()." besar batrai {$this->batrai} MAH processornya {$this->chipset}";
                return $ket;
            }
        }

        // tampilkan class handphon1
        $focophon   = new handphon1('PhocoPhone','white','4500','170 gr','Snapdragon 770','','');
        echo $focophon->keterangan();
        
        /* pada contoh diatas saat mengisi nilai dari child class masih ada variabel yang harus diisi dng nilai kosong karena pada 
           fungsi construct di parent di definisikan . pada hanphon $dinamo dan $tabung gak dipake . untuk mengatasi ini bisa juga
           digunakan overiding dgn membuat construct sendiri pada child nya , sesuai karakteristik child jika ada fungsi padanya maka
           fungsi di parentnya di abaikan 
        contoh 
        */
        class elektronik2 {
            public function __construct($nama='',$warna='',$berat='',$batrai=''){
                $this->nama     = $nama;
                $this->warna    = $warna;
                $this->batrai   = $batrai;
                $this->berat    = $berat;
            }
            public function keterangan(){
                // 
                $ket    = "nama barang <b>{$this->nama}</b> warnanya <b>{$this->warna}</b>   ";
                return $ket;
            }

        }

        class handphon2 extends elektronik2{
            public function __construct($nama,$warna,$batrai,$berat,$chipset){
                $this->chipset  = $chipset;
                parent::__construct($nama,$warna,$batrai,$berat);
            }
            public function keterangan(){
                $ket    = "Handphon :". parent::keterangan()." dengan processor {$this->chipset}";
                return $ket;
            }
        
        }
        class kereta2 extends elektronik2 {
            // ambil data dari construct parent
            public function __construct($nama,$warna,$batrai,$berat,$sasis,$Cbs){
                $this->sasis    = $sasis;
                $this->Cbs      = $Cbs;
                parent::__construct($nama,$warna,$batrai,$berat);
            }

            // return hasil yang diingikan
            public function keterangan(){
                $spsifikasi = "Kereta : ". parent::keterangan(). "dengan berat <b>{$this->berat}</b>". " dan Sasis <b>{$this->sasis}</b> serta mendukung {$this->Cbs}";
                // pareng::keterangan() merujuk pada fungsi keterangan di class parent
                // $this->berat merujuk pada $berat di class parent ini bisa d lakukan karena kereta extends elektronik2
                return $spsifikasi;
            }
        }

        // cek
        echo "<br>";
        $Apple12    = new handphon2('Apple 12','Greyy','4600','200 gr','Abionic C4');
        echo $Apple12->keterangan();
        // var_dump($Apple12);
        echo "<br>";
        $beat       = new kereta2('Beat Pop','putih hitam','89 Kg','Gsx Xtream','full Crome','Cbs');
        echo $beat->keterangan();

    echo "<br>";
    echo "9. Visibility (Acces modifier)";
    echo "<br>";

    class Fruit {
        public $name;
        private $color;
        protected $weight;
        
        public function __construct($nama,$color,$weight){
            $this->weight = $weight;
            $this->name   = $nama;
            $this->color  = $color;
        }
        // public bisa diakses dari objek maupun class mana aja 
        public function berat(){
            return $this->weight;
        }
        //  
         function nama(){
            return $this->nama ;
        }
        // protected , dapat diakses dari class utama maupun turunannya , namun tidak dari objek secara langsung
        protected function warna(){
            return $this->warna;
        }

      }


      class buah1 extends Fruit{
          // setter harus bersifat public karena akan di akses dari luar class 
          public function __construct($nama,$color,$weight){
              parent::__construct($nama,$color,$weight);
          }
          // getter 
          public function cek(){
            return $this->weight;
          }
      }

      // public
      $buah     = new buah1('kates','kuning','0.5 kg');
      echo "<br>";
      // mengakses private properti dengan child 
      echo  $buah->cek();// 0.5
      //merubah nilai properti langsung
      echo $buah->color=3; // 3 , bisa karena diakses dari childnya 
      
      // buat objek baru 
      echo "<br>";
      $buah1     = new Fruit('1 kg','Jambu','hijau');
      // public 
      echo $buah1->berat(); // jambu
      // mengakses properti langsung yang bersifat 
    //   echo $buah1->color; // error Cannot access private property Fruit::$color , karena $color priviate
    

    /* kesimpulannya private properti bisa diakses dari childnya jika fungsinya di child bersifat public
       properti gak bisa diakses bahkan di class nya jika bersifat protected
    */

    echo "<br>";
    echo "10. Setter dan Getter";
    echo "<br>";
    /* Setter adalah fungsi untuk mendefinisikan menangkap dan mengisi properti ditandai dengan
       $this->propert = properti-To_function , Contoh
            public function __construct($nama,$umur,$alamat){
                $this->nama     = $nama;
                $this->umur     = $umur;
                $this->alamat   = $alamat;
            }
        Getter adalh fungsi yang digunakan untuk mengolah data properti ditandai dengan 
        return $this->properti , contoh
            public function getinfo()
                $info   = "namanya {$this->nama} umrunya {$this->umur} alamtnya {$this->alamat} ";
                return $info;
            }

        pada intinya Setter dan Getter bertugas untuk mengisi dan mengakses data kedalam objek. pada contoh diatas
        udah diterapkan Setter dan Getter
        Setter dan Getter juga digunakan untuk mengakses dan mengubah nilai melalui method yang propertinya 
        bersifat Private sehingga gak bisa diakses langsung walaupun sebenarnya bisa aja diakses langsung
        jika menggunakan public , ini juga dialkukan untuk validasi contoh : praktek            
    */

    class game{
        // deklarasi private properti
        private $N_game,$pengembang,$tipe;
        // setter
        public  function setinfo($N_game='',$pengembang='',$tipe='')
            {
            $this->nama       = $N_game;
            $this->pengembang = $pengembang;
            $this->tipe       = $tipe;
        }
        // getter 
        public function getinfo(){
            $info   = "Game <b>{$this->nama}</b> dikembangkan oleh <b>{$this->pengembang}</b> dengan tipe <b>{$this->tipe}</b> ";
            return $info;
        }

    }

    // instansiasi objek game
    $clasRoy    = new game();
    // menggunakan setter untuk mengisi Properti
    $clasRoy->setinfo("Clash Royale",'Supercall','Battel');
    // menampilakn dgn fungsi getter
    echo $clasRoy->getinfo(); // Game Clash Royale dikembangkan oleh Supercall dengan tipe Battel

    echo "<br>";
    echo "11. Static Keyword";
    echo "<br>";
    /*  mengakses properti dan method tanpa instansiasi class 
        biasanya digunakan untuk nilai yang  bersifat tetap seperti tour guide pada app, halaman 
        titik 2 dua kali :: untuk mengakses nilai static
        keyword self untuk mengakses properti atau method yang bersifat static , karena $this gak bisa di pake
        kecuali setelah objek di instansiasi 
        cara akses , nama_class::properti atau nama_class::method()
        contoh : membuat objek
    */
            class buku1 {
                public static $angka =1;
                 
                public static $nama_buku ='hujan',$pengarang='tere liye';
                
                public static function get_name(){
                    return "nama bukunya <b>". self::$nama_buku ."</b> dikarang oleh <b>". self::$pengarang."</b>" ;
                }
                public static function tambah(){
                    return self::$angka ++;
                }
            }
            
            // memanggil properti dan method tanpa instansiasi objek
            echo buku1::$nama_buku; // hujan
            echo "<br>";
            echo buku1::get_name(); // nama bukunya hujan dikarang oleh tere liye 
            echo "<br>";
            // properti dan method static akan tetap menambah nilai ( nilai gak direset)  walaupun objek yang di instansiasi berbeda contoh 
            echo buku1::tambah(); // 1 
            echo buku1::tambah(); // 2
            echo buku1::tambah(); // 3
            $objek  = new buku1();
            echo $objek->tambah(); // 4 padahal objek berbeda 
            echo $objek->tambah(); // 5 
            $objek1 = new buku1();
            echo $objek1->tambah(); // 6 


    echo "<br>";
    echo "12. Constanta (nilai yang tidak berubah)";
    echo "<br>";        
    /* sebuah variabel yang nilainya gak berubah-ubah 
       deklarasi 
            define ('variable','value');
            const varibel = 'value' ;
        perbedaanya define() gak bisa di masukkan di dalam class , atau hanya bisa di deklarasikan di awal sebagai veriabel global
        const seperti variabel umunya bisa digunakan di mana aja 
    */
            // 0822 7633 5443 wanda hamidah
            
    class alat {
        const KUNCI = 'kunci t';
        
        public function alatnya(){
            return $this->KUNCI;
        }
    }
    
    echo alat::KUNCI;
    const barang = 'mangkok';

    /* ada banyak magic method php contoh
         __FILE__ = Mengetahui file yang sedang di pakai 
                  => echo __FILE__ , C:\xampp\htdocs\OOP_unpas\class_objek.php 
        __LINE__  = mengetahui pada baris kode
                  => echo __LINE__ , 611
        dan lain-lain 
    */
    echo "<br>";
    echo"17. NameSpace ";
    /* 
        namespace wajib dideklarasikan di bagian paling awal kode 
        digunakan untuk menghindari erorr akibat penulisan nama class yang sama
        class coba{
            public function cek(){

            }
        }

        class coba {
            public function run(){

            }
        }

        kasus diatas class coba ada 2 maka ini akan erorr, untuk mengatasinya digunakan methode namespace 
        pada dasarnya kita menulis class dalam 1 file.php 
        cara mengguanak ]
            namespace vendor\nama_class;

        cara instansiasi 
         new vendor\nama_class() 
        $produk  = new vendor\coba();
        $produk->run();              

    */  
    
    
    ?>