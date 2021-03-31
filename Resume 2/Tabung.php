<?php 
    class Tabung {
        private $diameter;
        private $tinggi;
        private $r;
        private $luas_selimut = 0;
        private $volume;
        private $phi = 3.14;

        // public function __construct($d, $t){
        //     $this->diameter = $d;
        //     $this->tinggi = $t;
        // }
        public function setDiameter($value) {
            $this->diameter = $value;
            $this->r = $this->diameter/2;
        }
        public function setTinggi($value) {
            $this->tinggi = $value;
        }
        public function hitungLuas() {
            $this->luas_selimut = 3.14 * $this->diameter * $this->tinggi;

        }

        public function getLuasSelimut() {
            return $this->luas_selimut;
        }

        public function tes(){
            echo 'tabung berhasil';
        }
        
        public function hitungVolume() {
            $this->volume = 3.14 * $this->r *$this->r *$this->tinggi;
        }

        public function getVolume() {
            return $this->volume;
        }



    }
?>