<?php
    class kuliah{
        protected $nama_mahasiswa = "Anto";

        public function akses_mahasiswa(){
            return $this->nama_mahasiswa;
        }
        protected function masuk_kuliah(){
            return " masuk kuliah";
        }
        public function masuk_kelas(){
            return $this->masuk_kuliah();
        }
    }

    $kuliah_anto = new kuliah();
    echo $kuliah_anto->akses_mahasiswa();
    echo $kuliah_anto->masuk_kelas();
