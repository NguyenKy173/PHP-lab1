<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Bài 1 : Xuất chuỗi
    echo "BÀI 1:<br>";
    echo "Lớp: WD18403 <br>";
    echo ("Môn học: PHP1 <br>");
    echo "Hello","World <br><br>";
    ?>
    <?php
    //Bài 2: Xuất biến
    echo "BÀI 2: <br>";
    $str = "Hello String";
    $a = 6;
    $b = 22.4;
    $c = $a + $b;
    echo "str = $a <br>";
    echo "integer is: $a <br>";
    echo "float is: $b <br>";
    echo "Kết quả của $a + $b là: $c <br><br>"
    ?>
    <?php 
    //Bài 3: xuất chuỗi và biến
    echo "BÀI 3:<br>";
    $color = "red";
    echo "My phone is " . $color ."<br>";
    echo "My car is " . $COLOR . "<br>";
    echo "My cat is " . $COlor . "<br>";
    ?>
</body>
</html>