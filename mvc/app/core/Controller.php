<?php
// controller ini akan jadi blue print (parent) untuk mengatur controllers pada app/controllers/

class Controller{
    // setter
    public function setdata($data){
        $this->data = $data;
    }
    // getter
    public function getdata(){
        return "datanya adalah ". $this->data ;
    }
    // nama parameter di controller dan di child parameter harus sama
    public function view($view,$data=[]){
        require "../app/views/". $view . '.php';
    }

    public function model($model){
        // panggil file modelnya 
        require "../app/models/".$model.".php";
        // karena $model berupa class maka harus di instansiasi 
        return new $model;
    }

}

?>