<?php
    // controller About
    class About extends Controller {
        // method Index
        public function index($nama='Alfriansyah',$umur=25,$pekerjaan='programmer'){ 
            $data['nama']      = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['umur']      = $umur;
            $data['halaman']   = "about";
            // panggil folder template dan header.php
            // masing2 view yang dipanggil jika ingin mengirimkan data maka parameter data harus di ketik di setiap view
            $this->view('template/header',$data);
            $this->view('about/index',$data);
        }
        // method page
        public function page(){
            $this->view('about/page');
        }
        // method contact
        public function contact(){
            echo "hubungi kami disini ";
        }
    }
?>