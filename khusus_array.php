<html>
    <head>
        <title>Khusus Array</title>
    </head>
    <body>

    
    <?
    // array tipe tabel berurut
    //ARRAY PHP
     $mahasiswa = [
                    ['nama'=>'rian','alamat'=>'medan','jurusan'=>'komputer'. '<br>'] ,
                    ['nama'=>'alfri','alamat'=>'langkat','jurusan'=>'sains' .'<br>'],
                    ['nama'=>'bibi','alamat'=>'gardu','jurusan'=>'dakwah'.'<br>'],
                    ['nama'=>'ijol','alamat'=>'tembung','jurusan'=>'komunikasi'.'<br>'],
                    ['nama'=>'gunawan','alamat'=>'marelan','jurusan'=>'koki'].'<br>',
     ];

        echo 'isi dari $mahasiswa adalah ';print_r ($mahasiswa) ; echo "<br>";
        echo 'bibi kuliah jurusan ' . $mahasiswa [2]['jurusan'] ; echo "<br>";
        echo 'juliardi alamatnya adalah '. $mahasiswa [3]['alamat']; echo "<br>";

    // mencoba metode array biasa didalam asosiativ array
        echo 'jumlah kata dari '. str_word_count($mahasiswa[1]['nama']) ; echo "<br>";
        echo 'jumlah huruf dari rian '. strlen($mahasiswa[4]['alamat']); echo "<br>";
        echo 'jumlah huruf dari alfri '. strlen($mahasiswa[1]['jurusan']); echo "<br>";
    // menampilkan key  dan value   
        // tanpa alamat yang jelas maka nilai yg ditampilkan berupa indexnya saja
        echo 'tampilkan key dari $mahasiswa '; print_r (array_keys($mahasiswa)); echo "<br>";
        // menampilkan keys pada array ke 0 yaitu nama alamat jurusan
        echo 'tampilkan key dari $mahasiswa array ke 0 '; print_r (array_keys($mahasiswa[0])); echo "<br>";
        // menampilkan value pada array ke 1 yaitu alfri langkat sains
        echo 'tampilkan value dari $mahasiswa array ke 1 '; print_r (array_values($mahasiswa[1])); echo "<br>";
    // menampilkan array secara berurut menggunakan metode nex prev
        echo 'tampilkan array pertama '; print_r(current($mahasiswa[0])); echo "<br>"; // rian
        echo 'tampilkan array setelahnya  '; print_r(next($mahasiswa[0])); echo "<br>"; // medan
        echo 'tampilkan array setelahnya '; print_r(next($mahasiswa[0])); echo "<br>"; // komputer
        echo 'tampilkan array setelahnya  '; print_r(($mahasiswa[0])); echo "<br>"; // null karena nilainya habis
        echo 'tampilkan array pertama '; print_r(current($mahasiswa[0])); echo "<br>";// komputer karena nilai terakhir yang di cari
        echo 'tampilkan array pertama '; print_r(reset($mahasiswa[0])); echo "<br>";  // kembali ke rian 
    // mencari key dengan value sebagai input   
        echo 'cari key '; print_r (array_search('alfri',$mahasiswa[1])); echo "<br>";  // nama

        // kesimpulan metode array bisa juga digunakan dalam multidimensi array dengan cara memanggil index/key
        // dengan lengkap contoh
        // $mahasiswa[index][key/index]
        // $mahasiswa [0]['nama']
    ?>




 <!--nmap
 jmap -->  









    </body>