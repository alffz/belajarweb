<?php

class model_mahasiswa{
    private $koneksi;
    // private $mahasiswa = [
    //     [
    //         "nama"=>"alfriansyah",
    //         "umur" => 23,
    //         "pekerjaan" => "programmer",
    //     ],
    //     [
    //         "nama"=>"habibi",
    //         "umur" => 24,
    //         "pekerjaan" => "ustad",
    //     ],
    //     [
    //         "nama"=>"juliardi",
    //         "umur" => 20,
    //         "pekerjaan" => "playboy",
    //     ]
        
    //     ];
    private $dbh,$stmt;
   function __construct(){
       // could not finde driver , sebabnya karena ku tulis mysqli:host , harusnya mysql:host
         $dsn = 'mysql:host=localhost;dbname=mvc';
         try{
             $this->dbh = new PDO($dsn, 'root','');
         }
             catch(PDOException $e){
                 die($e->getMessage());
             }
         
        //  $this->koneksi = $koneksi;
        //  return $data  = mysqli_query($koneksi,"SELECT * FROM mvc");
        //$this->koneksi    = mysqli_connect("localhost",'root','','mvc');

    
        // $con = mysqli_connect("localhost",'root','','mvc');
        // if (!$con) {
        //     die('koneksi gagal');
        // } else {
        //     $this->koneksi = $con;
        //     echo 'koneksi berhasil';}
        //  $this->koneksi = $koneksi;
    
   }
    // buat fungsi untuk mengambil nilai dari $mahasiswa dan buat dia berupa array()
    public function getMahasiswa(){
       // $this->stmt = mysqli_query($this->koneksi,"SELECT * FROM mvc");
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiwa');
        $this->stmt->execute();
        // kembalikan dalam bentuk fetch assoc
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $this->stmt = mysqli_fetch_assoc($this->stmt);
        // mysqli_close($this->koneksi);
    }

}

?>