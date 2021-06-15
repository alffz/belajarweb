<?php

    // koneksi ke database
   // $conn = mysqli_connect("localhost",'root',"","crud");
   require "fungsi.php";

    // uji apakah tabel ada
    $result = mysqli_query($conn,"SELECT * FROM mahasiswa");
    if( !$result){
        echo mysqli_error($conn);
    }
    $result1 = mysqli_query($conn,"SELECT * FROM mahasiswa");
    $result2 =mysqli_query($conn,"SELECT * FROM mahasiswa");
    $result3 =mysqli_query($conn,"SELECT * FROM mahasiswa");
    $result4 =mysqli_query($conn,"SELECT * FROM mahasiswa");
    $result5 =mysqli_query($conn,"SELECT * FROM mahasiswa LIMIT 3");
    $result6 =mysqli_query($conn,"SELECT * FROM mahasiswa LIMIT 4");
    $result7 =mysqli_query($conn,"SELECT * FROM mahasiswa LIMIT 4");

   /* ambil data (fetch) dari konkesi  ada banyak cara , data yang diambil dari database ditampilkan bertipe array yang memiliki index
      dan cara memanggilnya sama seperti memanggil array begitupun fungsi2 array dapat juga digunakan , berikut beberapa caranya :
   */
   // 1.  mysqli_fetch_row -> mengembalikan data bersifa array numerik (index berupa angka yang dimulai dari 0)
        echo "1. mysqli_fetch_row -> mengembalikan data bersifa array numerik (index berupa angka yang dimulai dari 0)<br>";
        $mhs = mysqli_fetch_row($result); 
        echo 'menampilkan isi database dengan mysqli_fetch_row  : ';print_r($mhs);// Array ( [0] => 1 [1] => 1813 [2] => alfri [3] => alffz@gmail.com [4] => komputer [5] => kaka.jpg )  
        echo '<br>'; 
        // menampilkan nilai berdasarkan indexnya
        echo 'jurusannya adalah: ' ; print_r($mhs[4]); echo '<br><br><br>'; // 4 adlh nomor index dari field jurusan di database

   // 2.  mysqli_fetch_assoc -> mengembalikin data bersifat array asosiativ dimana id menjadi key dan record menjadi value
        echo "2. mysqli_fetch_assoc -> mengembalikin data bersifat array asosiativ dimana id menjadi key dan record menjadi value <br>";
        $mhs1 = mysqli_fetch_assoc($result1);
        echo 'menampilkan isi database dengan mysqli_fetch_assoc : ';print_r($mhs1); echo '<br>'; 
            // Array ( [id] => 1 [nrp] => 1813 [nama] => alfri [email] => alffz@gmail.com [jurusan] => komputer [gambar] => kaka.jpg ) 
        // karena bersifat asosiativ kita dapat menampilkan datanya dgn memanggil key nya 
        echo "jurusannya adalah: "; print_r($mhs1["jurusan"]); echo '<br>';
        echo "nrp nya  adalah: "; print_r($mhs1["nrp"]); echo '<br><br><br>';

    /* 3. mysqli_fetch_array -> mengembalikan data bersifat array numerik dan array asosiativ , artinya kita dapat memanggil record 
          dengan cara numerik $mhs [2] dan $mhs1['nama'] , lebih fleksibel . namun cara ini tidak efektif untuk data yang besar 
          karena akan memperlambat proses output .
    */  echo '3. mysqli_fetch_array -> mengembalikan data bersifat array numerik dan array asosiativ <br> ';
        $mhs2 = mysqli_fetch_array($result2);
        echo "menampilkan dengan mysqli_fetch_array : "; print_r ($mhs2); echo '<br>';
            /*     hasilnya array numerik dan asosiatv, kita bisa memanggil dgn 2 cara numerik maupun asosiativ 
                    [0] => 1
                    [id] => 1

                    [1] => 1813
                    [nrp] => 1813

                    [2] => alfri
                    [nama] => alfri
                    
                    [3] => alffz@gmail.com
                    [email] => alffz@gmail.com

                    [4] => komputer
                    [jurusan] => komputer

                    [5] => kaka.jpg
                    [gambar] => kaka.jpg
            */
        echo "asosiativ jurusannya adalah : "; print_r($mhs2["jurusan"]); echo '<br>'; // komputer
        echo "indexing jurusannya  adalah: "; print_r($mhs2[4]); echo '<br><br><br>'; // komputer

    /* 4. mysqli_fetch_object -> menampilkan dengan cara objek , bersifat asosiatv array . 
          cara manggilnya $mhs -> nama_field . menggunakan tanda ->
    */  echo '4. mysqli_fetch_object -> menampilkan dengan cara objek , bersifat asosiatv array <br>';
        $mhs3 = mysqli_fetch_object($result3);
        // print_r ($mhs->0); erorr kanena bersifat indexing
        echo "namanya : "; print_r ($mhs3->nama);    echo '<br>'; // alfri
        echo "jurusan : "; print_r ($mhs3->jurusan); echo '<br>'; // komputer

        // biasanya mysqli_fetch_assoc paling bagus digunakan

    /* contoh diatas hanya menampilkan 1 data teratas padahal kita punya banyak data didalam databasenya, untuk
       itu kita butuh PERULANGAN agar data yang ditampilkan sesuai keingina
    */

    while($mhs4=mysqli_fetch_assoc($result4)){
        print_r ($mhs4['jurusan']);echo '<br>';
    }
    echo '<br>';

    for($i = 0; $i= $mhs5=mysqli_fetch_assoc($result5); $i++){
        print_r ($i['nama']);echo '<br>';
    }
    $mhs7= mysqli_fetch_assoc($result7);
    var_dump ($mhs7[1]['nama']);
    
?>


<html>
    <head>
        <title>Mengambil data dari database</title>
    </head>
    <body>
        <h1>Daftar mahasiswa</h1>
        <table border="1" callpadding="10">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>gambar</th>
                <th>Nrp</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php  $i=1; ?>
            <?php  while ($a = $mhs6=mysqli_fetch_assoc($result6)): ?>
                
            <tr>
                <td><?php echo $i ;?></td> 
                <td> <a href="">Ubah</a> || <a href="">Hapus</a> </td>
                <td><img src="gambar/<?php echo $mhs6['gambar'];?>" width="80" alt=""></td>
                <td><?php echo $mhs6["nrp"] ;?></td>
                <td><?php echo $mhs6["nama"]; ?></td>
                <td><?php echo $mhs6["email"] ;?></td>
                <td><?php echo $mhs6["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile ; echo 'isi dari '; var_dump ($mhs6) ?>
            
        </table>
    </body>
</html>