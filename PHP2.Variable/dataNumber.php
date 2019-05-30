<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Kiểu số trong PHP</h1>
    <?php
        $a = 20;
        $b = 10;
        echo "<br> Tổng = ".($a + $b);
        echo "<br> Hiệu = ".($a - $b);
        echo "<br> Tích = ".($a * $b);
        echo "<br> Thương = ".($a / $b);
        echo "<br> Mod = ".($a % $b);
        echo '<br> var_dump() : Được sử dụng để Debug xem kiểu dữ liệu và giá trị của biến <br> ';
        var_dump($a);
        echo "<br>";
        var_dump($b);
    ?>
</body>
</html>
