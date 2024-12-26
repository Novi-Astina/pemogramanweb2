<<<<<<< HEAD
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemograman Web', 'Emelly W', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldyy Munir', 'Andy Publisher', '2020'),
            new Buku('Kalkulus', 'Robertt T.', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'Jamess W.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;

    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
        
    }


=======
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemograman Web', 'Emelly W', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldyy Munir', 'Andy Publisher', '2020'),
            new Buku('Kalkulus', 'Robertt T.', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'Jamess W.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;

    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
        
    }


>>>>>>> d4dfba3f506ba4adcf954bb647d77fefc2f6d8c0
}