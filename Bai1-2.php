<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>BÀI 2: String</h1>";
    $a = 'Hello';
    $$a = 'World';
    echo "<h2>$a ${$a}</h2> <br>";
    ?>
    <?php 
    //Viết trương trình tính tổng 2 số a,b cho trước và xuất ra kết quả
    echo "<h1>BÀI 3: một số phép tính cơ bản:</h1> ";
    $a = 12;
    $b = 5;
    $c = $a + $b;
    $d = $a - $b;
    $e = $a / $b;
    $f = $a * $b;
    $h = $a % $b;
    echo "<h2>Kết quả của $a + $b = $c </h2>";
    echo "<h2>Kết quả của $a - $b = $d </h2>";
    echo "<h2>Kết quả của $a / $b = $e </h2>";
    echo "<h2>Kết quả của $a * $b = $f </h2>";
    echo "<h2>Kết quả của $a % $b = $h </h2>";
    ?>
</body>
</html>