<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Biến trong PHP: Lưu trữ thông tin và thay đổi trong quá trình chạy</h1>
    <pre>
        Khai báo biến trong PHP như thế nào
        $Ten_bien
        Biến trong PHP thì không cần từ khóa var như trong JS
        mà phải bắt đầu bằng $ và theo sau là tên biến
        Tên biến phải viết liền, Không được dùng tiếng Việt có dấu
        Không được dùng ký tự đặc biệt như @,#,...
        Tên biến chỉ chứa các số và chữ cái từ A đến Z và ký tự _
        Tên biến có phân biệt chữ hoa, chữ thường
        Trong JS nối chuỗi bằng "+"
        Trong PHP nỗi chuỗi bằng "."
    </pre>
    <?php
        $a = 5;
        $b = 7;
        $c = $a + $b;
        echo '$c = '.$c;
    ?>
</body>
</html>

