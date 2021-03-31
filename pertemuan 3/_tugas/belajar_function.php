<?php
    // echo("hello");

    // Apa itu function ?
    // sekumpulan kode yang dapat dipanggi

    // kenapa kita butuh function ?
    // agar kode kita lebih powerfull, readable, dan reusable

    // macam-macam function di php ?
    // built in, user definied

    //built in ?
    // echo(date('Y'));

    // user definid ?
    // function printMyName($name = "Masih belum ada nama") {}
    // echo "My name is $name";
    // }
    
    // with return
    function printNumA() {
        return 4;
    }
    function printNumB() {
        return 5;
    }
    // kegunaan return value buat nilainya lebih reusable

    echo(printNumA() + printNumB());
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
    <!-- <h1><?php printMyName("Ivanri") ?></h1> -->
</body>
</html>