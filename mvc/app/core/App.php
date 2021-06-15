<?php

    class App {
        // nilai default $controller = "home",dengan method ="page" . ketika controller di panggil maka
        // akan otomatis mencari method index jika gak ada maka error
        protected $controller   = "home";
        protected $method       = 'index';
        protected $params       = [];
        // menjalankan GetUrl otomatis
        public function __construct(){
            $url     = $this->GetUrl();
            // controller default adalah home , jika file ini ada
            if(file_exists('../app/controllers/'. @$url[0].'.php')){
                // maka jadikan index ke [0] sebagai controller
                $this->controller = $url[0];
                // methodnya di hapus agar ketika mengambil parameter gak harus memanggil methodnya jugak 
                // gk dihapus maka => $url[controller],$url[method],$url[parameter]
                // dihapus maka    => $url[]
                unset($url[0]);    
            }
           require_once "../app/controllers/". $this->controller . '.php';
           // variabel dijadikan objek ??
           $this->controller = new $this->controller;

        // method 
        if(isset($url[1])){
            // jika ada sesuatu pada array ke [1]
            if(method_exists($this->controller,$url[1])){
                // maka jadikan dia method
                $this->method  = $url[1];
                // methodnya di hapus agar mudah mengambil nilai parameter
                unset($url[1]);
            }
            
        }

        // parameters
        // jika di url masiha ada array berarti berturut2 adalah parameter1 parameter2 dst
        if(!empty($url)){
            // isi $params dengan array values
            $this->params   = array_values($url);
        }
        // jalankan Controller, Method, dan kirimkan parameter 
        call_user_func_array([$this->controller, $this->method],$this->params);
        }

        /* mendapatkan string setelalah ?url= 
            // jika gak pake RewriteEngine on
            mvc/public/index.php?url=controller/method/parameter/            
            // jika pake RewriteEngine on
            mvc/public/controller/method/parameter/
        */
        public function GetUrl(){
            // jika isi url ada maka
            if(isset($_GET['url'])){
                // $url isi dengan $_GET['url], dan potong / terakhir
                $url    = rtrim($_GET['url'],'/');
                // membersihkan string dari sciript html , js dll contoh <p> cek </p> , akan menjadi cek
                $url    = filter_var($url, FILTER_SANITIZE_URL);
                // memecah string yg mengandung  / menjadi array
                $url    = explode('/',$url);
                return $url;
            }
        }
    }
?>