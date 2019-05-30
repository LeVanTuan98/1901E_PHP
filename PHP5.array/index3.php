<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Toán tử ! là phủ định</h1>
<?php
    // Mảng chỉ số
    $students = array("Nguyễn Văn A","Nguyễn Văn B","Nguyễn Văn C","Nguyễn Văn D");
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    echo "<br> Dạng foreach đầy đủ";
    // Dạng foreach đầy đủ
    if (is_array($students) && !empty($students)) {
        foreach ($students as $key => $value){
            echo "<br> Key: $key ,Value: $value";
        }
    }
    // Dạng foreach rút gọn chỉ xuất ra giá trị value
    if (is_array($students) && !empty($students)) {
        foreach($students as $value) {
            echo "<br> Value: $value";
        }
    }
?>
</body>
</html>