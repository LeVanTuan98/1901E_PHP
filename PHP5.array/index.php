<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
   <pre>
    Mảng chứa anh sách các kiểu dữ liệu khác nhau, chứa được nhiều giá trị
    Các kiểu dữ liệu như số, chuỗi chỉ chứa duy nhất 1 giá trị
    Để khai mảng $mang = array("A","B","C");
    Cấu truc mảng gồm: key + value
    key: là chỉ số, bắt đầu từ 0
    value: là giá trị
   </pre>
<?php
    $new_array = array("A","B","C");
    echo "<br>".$new_array[0];
    echo "<br>".$new_array[1];
    echo "<br>".$new_array[2];
//In ra cấu túc của mảng
    echo "<pre>";
    print_r($new_array);
    echo "</pre>";
//Thay đôi giá trị của mảng thông qua key
    $new_array[0]=123;
    $new_array[1]=456;
    $new_array[2]=789;

    echo "<br>".$new_array[0];
    echo "<br>".$new_array[1];
    echo "<br>".$new_array[2];

    echo "<pre>";
    print_r($new_array);
    echo "</pre>";


?>
</body>
</html>