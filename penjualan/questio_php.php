
<!-- UNDONE untuk menandai pertanyaan yang belum terjawab -->
<!-- NOTED SEBELUM DEBUGGING
      1. Pastikan atribute html dan valuenya benar contoh 
         benar -> value="nilai"
         salah -> value'nilai'= , value=nilai DLL
      
 -->
<?
echo '1'; // undone
/* apakah PHP secara keseluruhan berjalan di server termasuk hal2 kecil sekalipun ?
   contoh 
   -> ketika ingin menguji suatu variabel apakah data dikirim dulu ke server ? atau bisa diproses di sisi client?
   jawaban =>

*/
echo '2';
/* gimana caranya membuat menu filter seperti limit , order by, asc desc dimana menu tersebut diset lewat front end
   contoh 
   -> urutkan berdasarkan harga terendah pada market place , dimana user tinggal klik tombol atau TextField
      dan query ORDER BY jalan tanpa rubah koding (hard code)
         jawaban =>
               buat sebuah fungsi cari($par1,$par2) dengan 2 parameter dimana isi dari masing2 parameter diambil dari inputan user
               menggunakan method get atau post.  $parameter -> menampung keyword cari  , $lim -> menampung limit data yg ditampilkan
               
*/
echo '3';
/* gimana caranya mencegah user menginputkan data yang sama kedalam database ? 
   contoh 
   -> jika username / password telah digunakan sebelumnya maka gak boleh untuk daftar lagi
         jawaban => 
            gunakan fungsi mysqli_num_rows($koneksi,$querydb) untuk mengecek datanya 
            $cekdata = mysqli_num_rows($koneksi,"SELECT username FROM masuk WHERE username='$username' OR password='$password'");
                  username  = field pada table
                  $username = inputan user    , berlaku untuk password dan $password
                  OR untuk menguji jika passwordnya sama maka gak boleh daftar jugak , ini artinya bakal sulit membuat password 
                  karena biasanya orang +62 buat password asal2an conth nama123 dll 
            cek apakah data udah ada di database

            if ($cekdata >0){
               echo "<script> alert('username atau passowd sudah digunakan') </script>";
            }
            jika $cekdata lebih dari 0 (artinya datanya udah ada ) maka tampilkan 'username atau passowd sudah digunakan'
*/
echo '4'; // undone
/* gimana caranya validasi username di frondend menggunaakan jaavscript?  
   contoh 
   -> ketika registrasi biasanya terdapat kolom untuk konfirmasi ulang password yang udah diinput sebelumnya, jika menggunakan php 
      maka proses itu berjalan di database artinya butuh koneksi dan yaa pastinya memberatkan di sisi server 
      ->> menggunakan php 
            if ($password !== $password1){
               echo "<script> alert('konfirmasi password tidak sesuai') </script>";
               return false;
            }
*/
echo '5'; // undone
/* saat user input data di form dan ketika di submit terdapat kesalahan maka user akan kembali ke halaman form dan semua data yang udah
   user inputkan akan terreset , gimana caranya supaya gak terreset sehinnga user gak capek2 harus input dari awal ?


*/
echo '6'; // undone
/* gimana caranya  menampilkan kesalahan di halaman yang sama persis dibawah area yang salah tanpa reload halaman


*/
echo '7';
/* gimana caranya menapmpilkan pemberitahuan alert("login gagal ") sebelum di redirec ke halaman login 
   atau alert("anda harus login terlebih dahulu ") seblum  redirec ke halaman login;
         jawaban => echo " alert('anda harus login terlebih dahulu ')" 
*/

echo '8'; // undone
/* singkronisasi halaman aktif dan index database
   ketika halaman 2 di load maka seharusnya data yang tampil gak dari index ke 0 melainkan sisa dari data index yang gak tertampung 
   di halaman pertama  
        contoh 
        jumlah data   = 20
        data per hlmn = 5
        maka akan ada 4 halaman untuk menampung semua data
        halaman aktif = 1 maka index data =0  - 4
        halaman aktif = 1 maka index data =5  - 9
        halaman aktif = 1 maka index data =10 - 14
        halaman aktif = 1 maka index data =15 - 19 
        gimana caranya ngebuat user bisa
            1 menentukan sendiri berapa data yang ditampilkan
            2 menentukan jenis data apa aja yang akan ditampilkan
            3 metode menampilkan seperti grid X atau linear Y ?

            
*/
/* kenapa suatu  fungsi terdapat warning ketika dipanggil di halaman tertentu padahal
   perlakuan dan isinya sama saja dgn halaman yang lain , bahkan fungsi dgn isi yang
   sama bisa jalan ?? ini sangat aneh
      jawaban  =>
            ternyata $koneksi gak didefinisikan di funsgsi.php sdngkan tampil menggunakan $koneksi sbg global variabel
            tampil() ,sedangkan alasan kenapa dia
            bisa nampil di beberapa halaman karena $koneksi sudah dideklarasikan pd halaman tersebuk 

*/
echo '8';
/* pada penulisan mode tamplating untuk kindisi berikut
    <?php  if ($hal==$halaman_aktif) : ?>
        <a href="?halama<?= $hal; ?>"  style="color: red;" > <?= $hal ;?></a>    
    <?php else : ?>
        <a href="?halama<?= $hal; ?>" > <?= $hal ;?></a>
    <?php endif ;?>

    kenapa program bagian elsenya gak jalan, style hanya jalan di halaman 1 dan gak berubah
    ketika berpindah halaman 
      jawaban =>
                     ternyata variabel  $_GET['halaman'] tdk sesuai dgn <a href="?halama", kurang huruf N
            logikanya jika $_GET['halaman'] == 1 maka tampilkan  <a href="?halama<?= $hal; ?>" > <?= $hal ;?></a>
            karena variabel $_GET['halaman'] gak sesuai dgn <a href="?halama" maka nilainya selalu 1  
         trik mencari eror gunakan var_dump() untuk mengetahui nilai sebuah variabel
*/
echo '9';
/* gimana caranya menyesuaikan pagination dgn tombol cari 
      misalkan ingin mencari rian dan ada 20 data yang sama dan ingin ditampilkan dimana limit 1 halaman adalah 5 maka
      akan ada 4 halaman untuk menampilkan seluruh data dan vagination berfungsi seperti biasayah
*/
echo '10';
/* undone
   saat menggunakan ajax ketika even dijalankan contoh KEYUP maka akana menampilkan parameter sumber dari ajax itu sendiri namun
   ketika hasil tidak di pilij saya mau hasilya tertutup otomatis seperti ketika serch di google kan ada saran pencarian yang 
   muncul otomatis ketika di klik sembarang tempat maka saran pencarian tertutup otomatis 
   jawaban  =>

*/
echo '11';
/* undone
   ajax bekerja dengan menimpah  data baru diatas data lama menggunaka file baru sebagai menampung hasilnya .
   1. apakah bisa tanpa buat file baru data ajax tetap di tampilkan?
   jawaban  = 
   2. gimana caranya data hanya tampil ketika tombol cari di klik? atau gak gunakan keyup
   jawaban  =
   3. gimana caranya data hanya tampil ketika saran pencarian di klik ?
   jawaban  =
*/
echo '12';
/* undone
   giamana caranya menampilkan pesan alert("data gak ada") jika data gak ditemukan pada ajax
   jawaban  =

*/
echo '13';
/* buat auto complit ?? 
*/

echo '14';
/* ketika tombol back atau next pada browser di klik maka url akan ditambahi dashborad seharusnya langusng ke login.php
      expextasi = localhost/mitra_medika/auth/login.php
      realita   = localhost/mitra_mediki/dashboard/auth/login.php  . 404 karena url gak menuju login.php . so why?
*/
echo '15';
/* ketika tombol tambah di klik maka $_POST['edit'] berisi informasi menuju halaman tambah  
   namun ketika tombol $_POST['tambah'] di klik menuju proses  , dan ternyata datanya udah ada maka
   redirex ke tambah.php  , maka name2 pada tambah.php undefine karena bukan berasal dari data.php;
    bagaimana mengatasinya????
*/
echo '16';
/* hipotesis 1.  proses dokumen ke halaman lain contoh edit.php hapus.php dengan 
      <button  onclick="edit()" > edit </edit>
      <button  onclick="hapus()" > edit </edit>
   fucntion pada javascriptnya 
   function edit(){
      doucment.nama_form.action  = "edit.php";
      documnet.nama_form.submit();
   }
   function edit(){
      doucment.nama_form.action  = "hapus.php";
      documnet.nama_form.submit();
   }
   1. masalah 
   A. kemarin nama_form ku pikir adalh fungsi bawaan dari javascrript sehigga menghasilkan error
      padahal itu mewakili form mana yang disubmit oleh edit() / hapus() , sehigga ketika nama <form>
      tidak dibuat maka <button> gak akan redirec ke halaman yang ingin dituju (edit.php/hapus.php)
   B. karena proses submit melalui javascript maka gak perlu ada method="post" pada <form> , jika dibuat
      akan menghasilkan erro undefine function edit() blblblbl

   hipotesis 2.  penyebab eror bukan karena hipotesis 1
                 penyebab eror bisa jadi karena  kesalahan browser 

   hipotesis 3. penyebab karena perbedaan name_form di form dan di fungsi (){
                                                                              document.NAMA_FORM.
                                                                            }
                atau bisa jadi karena javascript nya gak berjalan dengan benar
   hipotesis 4. ketika nama fungsinya di ganti program jalan dimana sebelumnya hapus() , diganti menjadi
                delet() . ini aneh aku gak ngerti kenapa begini . kenap kata2 "HAPUS" gak bisa dijadikan
                sebuah fungsi.
   hipotesis 5. mungkin nama_form gak boleh sama = nama fungsi  contoh:
                  <form name='hapus' >
                  function hapus(){
                     ........ 
                  }
*/
echo "17";
/*
   DataTable clien side gak jalan
   PERCOBAAN
   1. buat file baru dan download jquery v3.3.1 ,boostrap 3.3.7 , jquery datatable , boostrap datatable
      hasilnya kode jalan namun  ketika diimplementasikan ke dalam kode utam di data dokter.php gak jalan 
      ANALISA
      SEBAB
      mungkin karena perbedaan versi jquery dan boostrap pada page dan data tablenya
   2. coba kopikan tabel file baru ke file utama hasilnya jalan jika jquer dan boostrapnya ikut dikopikan
      ke fileutama.php . 
      ANALISA
      mungkin karena semua element sesuai ketentuan datatable
   
   KESIMPULAN AWAL datatabel client side
      1. tag <table> harus punya class='table' dan id='NamaTable' , id untuk memanggil di Jquery
            <table class="table" id='NamaTable></table> 
      2. didalam tag <table> harus ada <thead> dan <tbody> 
         <table class="table" id='NamaTable'>
            <thead class="">
            
            </thead>
            <tbody class="">
            
            </tbody>
         </table>
      3. jumlah <th> harus == <td> dan masing2 tag didalam <tr> , jika tidak akan terdapat eror
         <tr class="">
            <th class="">No</th>
            <th class="">Nama</th>
            <th class="">Alamat</th>
            <th class="">Pekerjaan</th>
         </tr>
         <tr class="">
            <td class="">1</td>
            <td class="">Rian</td>
            <td class="">Medan</td>
            <td class="">Pengusaha</td>
         </tr>

         pada contoh diatas terdapat 4  <th> dan 4 <td> , jika jumlahnya gak sama maka akan terjadi error

         contoh lengkap
         <table class="table" id='NamaTable'>
            <thead class="">
               <tr class="">
                  <th class="">No</th>
                  <th class="">Nama</th>
                  <th class="">Alamat</th>
                  <th class="">Pekerjaan</th>
               </tr>
            </thead>
            <tbody class="">
               <tr class="">
                  <td class="">1</td>
                  <td class="">Rian</td>
                  <td class="">Medan</td>
                  <td class="">Pengusaha</td>
               </tr>            
            </tbody>
         </table>
         
      4. agar DataTable clientside berjalan , harus di panggil menggunakan Jquery diaman id table menjadi
         parameternya
         $(documen).ready(function(){
            $("#Namatable").DataTable();
         });     
      
      5.  KESALAHAN YANG SEBENARNYA
          karena ID dalam sebuah halaman hanya boleh 1 maka ID hanya ID partama yang terbaca (id yang dideklarasikan
          lebhi awal ), sedangkan pada halaman fileutama.php terdapat 2 id="dokter' dimana 1 untuk MODAL 1 lagi untuk <table>
            <div class="modal fade" id="dokter"  > 
            <table class="table" id="dokter'></table> 
          maka id="dokter" pada <table> gak terbaca sehingga DataTable client side gak jalan
   
*/
echo '18';
/* 
   relasi antar tabel dengan 2 cara (yuk koding video ke 20)
   berlaku untuk tipe table innoDB
   relasi tabel digunakan untuk mengambil nilai dari 2 tabel sekaligus dimana dan ditampilkan dalam halaman yangsama
   dimana antar tabel saling berhubungan 
         -> sebelumnya pastikan filed yang ingin di relasikan di buat sebagai index(foreign key). filed yang berstatus sbg
            index akan memiliki tanda kunci berwarna abu2 disampingnya 
               "ALTER TABLE `tb_rm_obat` ADD INDEX(`id_rm`); "
         1. Designer . klik rsakit(database) -> more -> designer
            a. create relation 
            b. klik pada primery key tabel arahkan ke foreign key pada table lain
               On delet -> ketika primery key pd TABEL1 di hapus maka 
                           => cascade   , foreign key bisa diupdate
                           => set null  , jika data dihapus pada primary key maka pd table foreign key akan dikosongkan (fieldnya tetep ada)
                           => no action , gak ada efek pada foreign key
                           => restric   , data pada primery key atau sebaliknya gak bisa dihapus jika masih keduanya masih berrelasi
               
               on update -> ketika tabel primery key di update
                           => cascade   , foreign key ikut terupdate
                           => set null  , foreign key dikosongkan ?
                           => no action , gak ada efek ke foregn key ?
                           => restric   , foreign key gak bisa di update ???

            c relasi 
               -> select PRIMARY KEY kemudian arahkan ke POREIGN KEY 
               -> tb_rekammedis.id_rm  ke tb_rm_obat.id_rm , ketika tb_rekammedis.id_rm dihapus maka tb_rm_obat.id_rm terhapus(cascade)
               -> tb_obat.id_obat ke tb_rm_obat.id_obat , ketika tb_obat.id_obat dipakan di tb_rm_obat.id_obat maka id_obat gak bisa di hapus (restric)
        
         2. 
        ALTER TABLE `tb_rm_obat` ADD FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammediss`(`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE; 
         ALTER TABLE `tb_rekammediss` ADD FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien`(`id_pasien`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
*/

echo '19';
/*
      Column count doesn't match value count at row 1

*/

echo '20';
/*
       Cannot add or update a child row: a foreign key constraint fails (`rsakit`.`tb_rekammedis`, CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`))
       ternyata sebabnya karena value pada option gak terkirim akibat lupa ngasi sign = 
          salah  -> echo "<option value'".$fet_pasien['id_pasien']."'>". $fet_pasien['nama_pasien']."</option>";
               output -> <option value'5f3d0ac1e50b1'="">harmuji danjen</option> 

          benar  -> echo "<option value='".$fet_pasien['id_pasien']."'>". $fet_pasien['nama_pasien']."</option>";
               output -> <option value="5f3d0ac1e50b1">harmuji danjen</option>

            id_pasien seharusnya berada didalam atribut value , value="5f3d0ac1e50b1"  BUKAN value'5f3d0ac1e50b1'=""
*/

echo '21';
/*
      RELASI ANTAR TABEL
         -> ketika sebuah tabel ber relasi dengan tabel lainnya maka jika (CASCADE)
               salah satu isi tabel dihapus maka akan menghapus tabel lainnya 
         

*/

echo '22';
/*
   perbandingan query sql dengan dan tanpa substr($query,0,-1)
   dengan 
         INSERT INTO tb_pasien VALUES 
         ('5f64be423f438','1012','Rikardo rian','L','20200123','medan','82360053223'),
         ('5f64be423f44b','1013','Winda','P','20200124','Jakarta','81212122323'),
         ('5f64be423f453','1014','rikansyah','L','20200125','bandung','12344321'),
         ('5f64be423f45a','1015','feronika','P','20200126','langkat','878778'),
   
   tanpa
         INSERT INTO tb_pasien VALUES 
         ('5f64bf69f25dd','1012','Rikardo rian','L','20200123','medan','82360053223'),
         ('5f64bf69f25f0','1013','Winda','P','20200124','Jakarta','81212122323'),
         ('5f64bf69f25f9','1014','rikansyah','L','20200125','bandung','12344321'),
         ('5f64bf69f2601','1015','feronika','P','20200126','langkat','878778'),
*/



?>