<?php 
    // print_r($_GET)
    require "Tabung.php";
    $tabung = new Tabung;
    
    // $_GET['nama'] = "Muhammad Nurudin Hidayat";
    // $_GET['Usia'] = 20;
    // $_GET['asal'] = 'Lumajang';
    // var_dump($_GET);

    // if (isset($_POST['submit_button'])) {
    //     if (strlen($_POST['diameter']) > 0) {
    //         echo "login !";
    //     } else {
    //         echo "Isi diameter terlebih dahulu";
    //     }
    // }
    $luas = 0;
    $volume = 0;
    if (isset($_POST['submit_button'])) {

        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungLuas();
        $tabung->hitungVolume();
        // $diameter = $_POST['diameter'];
        // $tinggi = $_POST['tinggi'];
        // echo "diameter $diameter";
        // echo '<br>';
        // echo "tinggi $tinggi";
        // $r = $diameter / 2;
        // $luas =  3.14 * $diameter *$tinggi;
        // $volume= 3.14 * $r *$r *$tinggi;

    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>Nama<?php echo isset($_GET['diameter']) ? $_GET['diameter'] : ''; ?></h1>
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submit_button'>Hitung</button>
    </form> -->
    
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submit_button'>Hitung</button>
    </form>
    <ul>
        <li>Luas Permukaan : <?php echo $tabung-> getLuasSelimut() ?></li>
        <li>Volume : <?php echo $tabung-> getVolume(); ?></li>
    </ul>
</body>

</html>

