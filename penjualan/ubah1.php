<?php
    // deklarasi koneksi

    require 'fungsi.php';

    function ubah ($data){
        // panggil koneksi
        global $conn;

        // tangkap inputan user untuk update
        $nama    = $data['nama'];
        $nrp     = $data['nrp'];
        $jurusan = $data['jurusan'];
        $email   = $data['email'];
        $gambar  = $data['gambar'];

        $q_db    = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', jurusan='$jurusan', email='$email', gambar='$gambar' WHERE id=$id";

        // eksekusi query
        mysqli_query($conn,$q_db);

        // set output fungs 
        return mysqli_affected_rows($conn);       

    }
?>

<form action="" method="get">
        <input type="hidden" name='id' value =" <?php echo $mhs['id'] ?>">
        <label for="Nrp" >Nrp</label>
        <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp']   ?>">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']   ?>">
        <br>
        <label for="Nrp">Email</label>
        <input type="text" name="email" id="email" required value="<?= $mhs['email']   ?>">
        <br>
        <label for="Nrp">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']   ?>">
        <br>
        <label for="Nrp">gambar</label>
        <input type="text" name="gambar" id="gambar" required value="<?= $mhs['gambar']   ?>">
        <button type="submit" name="kirim">Ubah Data</button>
    
    
    
    </form>