<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Các phương thức xử lý chuỗi trong PHP</h1>
    <pre>
        strpos("Chuỗi", "Chuỗi con");
            Tìm chuỗi con trong chuỗi tham số thứ nhất
        => Nếu tìm được nó sẽ trả về vị trí xuất hiện đầu tiên của chuỗi con trong chuỗi.
            Nếu không tìm được thì nó trả về False
        str_replace("chuỗi search", "chuỗi thay thế", "chuỗi chủ đề")
            Dùng để thay thế văn bản
        => Hàm thực hiện tìm chuỗi search và thay thế bằng chuỗi thay thế trong chuỗi chủ đề
    </pre>
<?php
    $str = "Chao Ha Noi";
    // Hàm để dùng đếm số ký tự
    echo"<br> Hàm strlen(bien) dùng để đếm số ký tự : ".strlen($str);
    echo"<br> Hàm str_word_count(bien) dùng để đếm số từ trong chuỗi : ".str_word_count($str);
    echo"<br> Hàm strrev(bien) dùng để đảo ngược chuỗi : ".strrev($str);
    echo "",strpos("Chào Hà Nội","Hà");
    echo"<br>";
    $x = strpos("Chào Hà Nội","Đà Nẵng");
    var_dump($x);
    echo"<br>";
    echo str_replace("Hà Nội","Hồ Chí Minh","Chào TP Hà Nội ")
?>
</body>
</html>

