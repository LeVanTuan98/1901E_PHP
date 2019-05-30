<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
/**
* do ... while sẽ chạy ít nhất 1 lần ngay cả khi điều kiện chạy vòng lặp là false
* từ lần thứ 2 trở đi do ... while mới check điều kiện là true thì chạy
*/
    <?php
        $i = 100;
        do {
            echo $i % 2 == 0 ? "$i " : null;
            $i++;
        } while ($i <= 10)
    ?>
</body>
</html>
