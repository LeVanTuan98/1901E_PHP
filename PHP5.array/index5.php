<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Mảng 2 chiều</h1>
<?php
    $student1 = array("Nguyễn Văn A","Hà Nội","1/1/19");
    $student2 = array("Nguyễn Văn B","Cà Mau","12/1/19");
    $student3 = array("Nguyễn Văn C","Hồ Chí Minh","1/9/19");
    $student4 = array("Nguyễn Văn D","Hà Nội","1/6/19");
    $student = array($student1,$student2,$student3,$student4);

    echo "<pre>";
    print_r($student);
    echo "</pre>";
?>
</body>
</html>
