<<<<<<< HEAD
<?php

include "Controller/BukuController.php";

$aplikasi = new BukuController();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);



switch($request){
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    case'/index.php/edit':
       
        $aplikasi->edit();
        break;
    case'/index.php/buku/update':
            $aplikasi->update();
        break;
    default:
        $aplikasi->jalankan();
=======
<?php

include "Controller/BukuController.php";

$aplikasi = new BukuController();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);



switch($request){
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    case'/index.php/edit':
       
        $aplikasi->edit();
        break;
    case'/index.php/buku/update':
            $aplikasi->update();
        break;
    default:
        $aplikasi->jalankan();
>>>>>>> d4dfba3f506ba4adcf954bb647d77fefc2f6d8c0
}