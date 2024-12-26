<<<<<<< HEAD
<?php

include "Controller/BukuController.php";

$aplikasi = new BukuController();
$REQUEST = $_SERVER ['REQUEST_URI'];
$REQUEST = parse_url($REQUEST, PHP_URL_PATH);

switch($REQUEST){
    case '/';
    case '/index.php';
        $aplikasi->Jalankan();
    break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
    break;
    case 'index.php/buku/hapus';
        $aplikasi->hapus();
    break;

=======
<?php

include "Controller/BukuController.php";

$aplikasi = new BukuController();
$REQUEST = $_SERVER ['REQUEST_URI'];
$REQUEST = parse_url($REQUEST, PHP_URL_PATH);

switch($REQUEST){
    case '/';
    case '/index.php';
        $aplikasi->Jalankan();
    break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
    break;
    case 'index.php/buku/hapus';
        $aplikasi->hapus();
    break;

>>>>>>> d4dfba3f506ba4adcf954bb647d77fefc2f6d8c0
}