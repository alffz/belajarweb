<?php

    // bangun user model nantinya di panggil dari controller

    class user_model{

        private $nama   = 'alfriansyah';

        // get nama user
        public function getUser(){
            return $this->nama;
        }
    }

?>