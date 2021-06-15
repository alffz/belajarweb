<?php

    // controller home
    class home extends Controller {
        private $data   = ['halaman'=>'rumahku'];
        // method index
        // controller dan method di hapus agar di sini kita gak perlu deklarasikan parameter kosong 
        // mendapatkan $nama dam $profesi. jika 
        // controller index akan dijalankan pertama kali dan 
        public function index(){
            // isi view di sini 
            // ambil nama user dari model yang berana user_model di fungsi getUser()
            // $this->model('user_model') memanggi sekaligus instansiasi class model agar getUser() bisa digunakan 
            $data['nama'] = $this->model('user_model')->getUser();
                // cari folder home/index.php
                //$data['halaman'] = 'rumah';
            $data['mahasiswa'] = $this->model('model_mahasiswa')->getMahasiswa();
                $this->view('template/header',$this->data);
                $this->view('home/index',$data);
                $this->view('template/footer');
        }
    }

?>