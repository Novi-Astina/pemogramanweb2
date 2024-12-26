<<<<<<< HEAD
<?php

require_once "Model/DaftarBuku.php";

class BukuController{
    
    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view 
        include "View/BukuView.php";
    }
=======
<?php

require_once "Model/DaftarBuku.php";

class BukuController{
    
    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view 
        include "View/BukuView.php";
    }
>>>>>>> d4dfba3f506ba4adcf954bb647d77fefc2f6d8c0
}