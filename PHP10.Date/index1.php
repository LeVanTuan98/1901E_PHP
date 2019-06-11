<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Unix timestamp - Thời gian Unix
    Khái niệm quen thuộc trong hệ thống Unix và lập trình PHP
    Thời gian Unix là hệ thống nhằm diễn tả 1 điểm trên trục thời gian
    Theo trục thời gian thì nó dùng số giây để xác định thời điểm
    với thời điểm gốc là 00:00:00 - 1/1/1970 (UTC)

    VD: lúc 00:00:00 - 1/1/2017 có giá trị timestamp là 1483228800
    có nghĩa là tính từ 00:00:00 - 1/1/1970 đến 00:00:00 - 1/1/2017 là 1483228800

    Trong PHP sử dụng hàm time() để lấy timestamp hiện tại.
    Để đổi dạng timestamp sang các định dạng ngày, tháng khác thì dùng hàm date()
</pre>
<?php echo "<br> Thời gian timestamp hiện tại : " . time(); ?>
<?php
/**
 * Chuyển đổi thời gian Unix timestamp sang dạng đọc được
 */
$timestamp = time();
echo "<br> Thời gian date hiện tại : " . date("H:i:s d/m/Y", $timestamp);
?>
</body>
</html>
