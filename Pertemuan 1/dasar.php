<?php
    echo"hello world";
    $angka=1;
    $setring="hello";
    $setring2="ivanri";
    $double=1.1;
    $array=["pemro","website","kelas B","smt4"]; 
    var_dump($array);
    // <!-- penjumlahan -->
    echo $setring.$setring2;
    // <!-- perulangan -->
    foreach($array as $value) {
        echo $value ." ";
    }
    for ($i=0; $i < count($array); $i++){
        echo $value[$i] . " ";
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
    <?php for ($i=0; $i<5;$i++);?>
	<?php if($i % 2===0):?>
		<h2>Hello World</h2>
	<?php else : ?>
		<h1>
    
</body>
</html>