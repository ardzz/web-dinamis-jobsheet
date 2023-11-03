<?php
    class kuliah{
        public $nama_mahasiswa;
        public function masuk_kuliah(){
            return " masuk kuliah";
        }
    }
    $kuliah_anto = new kuliah();
    $kuliah_anto->nama_mahasiswa="Anto";
    echo $kuliah_anto->nama_mahasiswa;
    echo $kuliah_anto->masuk_kuliah();