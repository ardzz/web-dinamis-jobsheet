<?php
include "DataPeminjam.php";
database::connect();

var_dump(DataPeminjam::getInstace()->show_data_peminjam_with_join());