<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Comment trong PHP</h1>
    <pre>
        Comment thì không chạy mà chỉ dùng để giải thích code cho các lập trình viên
        <b>Phân biệt sự khác nhau khi echo giá trị 1 biến bằng nháy đơn và nháy kép</b>
        Nếu trong nháy kép có "$a" thì PHP sẽ in ra giá trị biến đó
        Nếu trong nháy đơn có '$a' thì PHP sẽ hiểu đó là 1 chuỗi bình thường
    </pre>
    <?php
        /*
         *Comment nhiều dòng
         */
        //Comment 1 dòng
        $a = 5;
        echo 'Nháy đơn : giá trị biến $a = '.$a;
        echo "<br>";
        echo "Nháy kép : giá trị biến $a = ".$a;
    ?>
</body>
</html>
