<<<<<<< HEAD
<?php

require_once "Buku.php";
require_once "Database/Database.php";

class DaftarBuku{

    public function getData(){
        $db  = new database();
        $koneksi = $db->getKoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                array_push($daftar_buku, $buku);

            }
        }

        return $daftar_buku;
    }


    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
        
    }


=======
<?php

require_once "Buku.php";
require_once "Database/Database.php";

class DaftarBuku{

    public function getData(){
        $db  = new database();
        $koneksi = $db->getKoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                array_push($daftar_buku, $buku);

            }
        }

        return $daftar_buku;
    }


    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
        
    }


>>>>>>> d4dfba3f506ba4adcf954bb647d77fefc2f6d8c0
}