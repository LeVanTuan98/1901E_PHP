<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    // Nháy kép bao nháy đơn
$html = "<div class='container'>Thẻ Div</div>";
echo $html;
    // Nháy đơn bao nháy kép
$html = '<div class="container">Thẻ Div</div>';
echo $html;
    // Sử dụng ký tự escape (Ngoại lệ) \" => "
$html = "<div class=\"container\">Thẻ Div</div>";
echo $html;
    // Nháy bên ngoài là nháy bao chuỗi, nháy bên trong là nháy để in ra và phải có \ ở phía trước
$html = '<div class=\'container\'>Thẻ Div</div>';
echo $html;
?>
</body>
</html>

