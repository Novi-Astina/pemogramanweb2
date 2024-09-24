<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum3</title>
</head>
<body>
    <div class ="fs-45">
        <?php
        include "Visibility.php";

        $visibility = new Visibility();
        $visibility->tampilkanData();

        echo "<br>";

        echo "Akses di luar Kelas <br>";
        echo "public: " . $visibility->public . '<br>';
        //echo "private: " . $visibility->private . '<br>';
        //echo "protected: " . $visibility->protected  . '<br>';
        echo "<br/> <br>";
        echo "<h2>Konsep Pewarisan </h2>";

        include "Mahasiswa.php";

        $mahasiswa = new Mahasiswa ("Novi Astina wijayanti");
        $mahasiswa->ucapSalam();

        $mahasiswaInggris = new MahasiswaAsing("john Walker");
        $mahasiswaInggris->ucapSalam();
        ?>
        </div>
    
</body>
</html>