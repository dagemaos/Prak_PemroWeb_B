<?php
    //$_POST['nama'] = Ivanri;
    //if (isset($_POST['submit_btn'])) {
    //    if (strlen($_POST['diameter']) > 0) {
    //        echo "login !";
    //    } else {
    //       echo "Isi diameter terlebih dahulu";
    //    }
    //}
    
    $luas = 0;
    $volume = 0;

    //if (isset($_POST['button_submit'])) {
    //    $diameter = $_POST['diameter'];
    //    $tinggi = $_POST['tinggi'];
    //   $r = $diameter/2;

    //    $luas = 3.14 * $diameter * $tinggi;
    //    $volume = 3.14 * $r * $r * $tinggi;

    //    echo "Diameter $diameter <br/>";
    //    echo "Tinggi $tinggi <br/>";
    //}

    require'Tabung.php';

    $tabung = new Tabung;

    if (isset($_POST['button_submit'])) { 
        $Tabung->setDiameter($_POST['diameter']);
        $Tabung->setTinggi($_POSt['tinggi']);
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
    <!--<h1>Nama <?php echo isset($_GET['nama']) ? $_GET['nama'] : ''; ?></h1>
    
    <form action="" method="post">
    <input type="text" name="diameter">
    <button name="submit_btn">submit</button>
    </form> -->
    
    <form action="" method="POST">
    <label for="">Diameter Alas</label>
    <input type="text" name="diameter"> <br>
    <label for="">Tinggi Tabung</label>
    <input type="text" name="tinggi"> <br><br>
    <button>Hitung</button>
 
    </form>
    <hr>  
    <ul>
        <li>Luas selimut : <?=is_null($tabung)?'Tabung kosong':$tabung->getLuasSelimut();?></li>
        <li>Volume : </li>
    </ul>
</body>
</html>