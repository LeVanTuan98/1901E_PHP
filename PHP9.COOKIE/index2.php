<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Để xóa COOKIE bạn cần đặt thời gian quá hạn cảu nó đã qua
    VD: đã qua 1 giờ
    time() sẽ lấy ra thời gian hiện tại
    còn time() - 3600 sẽ lấy ra thời gian cách đây 1 giờ
</pre>
<?php
// Khởi tạo Cookie
$cookie_name = "username";
$cookie_value = "admin";
$time = time() + (86400 * 30);
setcookie($cookie_name, $cookie_value, $time);
/**
 * In ra cookie trước khi xoá
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
</body>
</html>