<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $age = 19;
        if ($age > 18) {
            echo $age." Đã đủ tuổi trưởng thành";
        } else {
            echo $age." Chưa đủ tuổi trưởng thành";
        }
        echo "<br>";
        $diem = 7.6;
        if ($diem > 9){
            echo "Xuất sắc";
        } elseif ($diem > 8) {
            echo "Giỏi";
        } elseif ($diem > 6.5) {
            echo "Khá";
        } elseif ($diem > 5) {
            echo "Trung bình";
        } else {
            echo "Yếu";
        }
    ?>
</body>
</html>