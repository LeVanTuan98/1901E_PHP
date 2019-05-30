<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng trong PHP có 3 kiểu chính:
        1.  Mảng chỉ số => có key là các số nguyên
        2.  Mảng kết hợp => có key là số hoặc chữ
        3.  Mảng đa chiều => Mảng chứa mảng
    </pre>
<?php
    $mangChiSo = array("Nguyễn Văn A","Nguyễn Văn B","Nguyễn Văn C");
    echo "<pre>";
    print_r($mangChiSo);
    echo "</pre>";

    $mang_chi_so_1 = array(0 => "Nguyễn A", 2 => "Nguyễn B", 1 => "Nguyễn C");
    echo "<pre>";
    print_r($mang_chi_so_1);
    echo "</pre>";

    $mang_ket_hop = array("hà nội" => 8000000, "hochiminh" => 12000000, "danang" => 2000000);
    echo "<pre>";
    print_r($mang_ket_hop);
    echo "</pre>";
?>
</body>
</html>