<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper {
            padding: 18px;

        }

        .form-input {
            display: block;
        }
        </style>
    <title>Form dengan OOP</title>
</head>
<body>
    <?php
        require_once "FormMahasiswa.php";

        $form = new Form();
        $form->setTextField('Nama',  '');
        $form->setTextField('Nim',  '');
        $form->setTextField('Prodi',  '');
        $form->setTextField('Fakultas',  '');
        $form->tampilkanForm();
    ?>
</body>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper {
            padding: 18px;

        }

        .form-input {
            display: block;
        }
        </style>
    <title>Form dengan OOP</title>
</head>
<body>
    <?php
        require_once "FormMahasiswa.php";

        $form = new Form();
        $form->setTextField('Nama',  '');
        $form->setTextField('Nim',  '');
        $form->setTextField('Prodi',  '');
        $form->setTextField('Fakultas',  '');
        $form->tampilkanForm();
    ?>
</body>
>>>>>>> d4dfba3f506ba4adcf954bb647d77fefc2f6d8c0
</html>