<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Mảng 2 chiều</h1>
<?php

    $students = array("Nguyễn Văn Tuấn","Nguyễn Văn Hùng","Nguyễn Văn Lâm","Nguyễn Văn Đức");
    echo "<br> Số phần tử của mảng : ".count($student);

    echo "<pre> Mảng chưa sắp xếp";
    print_r($students);
    echo "</pre>";

    asort($students);
    echo "<pre> Mảng sắp xếp theo A-Z";
    print_r($students);
    echo "</pre>";

    rsort($students);
    echo "<pre> Mảng sắp xếp theo Z-A";
    print_r($students);
    echo "</pre>";



?>
</body>
</html>
