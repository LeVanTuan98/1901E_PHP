<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Các ký hiệu định dạng thời gian:
    d - ngày trong tháng (01 - 31)
    m - tháng (01 - 12)
    y - năm
    l - ngày trong tuần
    H - Giờ hệ 24h (00 -23)
    h - Giờ hệ 12h (01 - 12)
    i - Phút (00 - 59)
    s - Giây (00 - 59)
    a - AM/PM

    Hàm date('định dạng thời gian','timestamp');
    nếu không truyền timestamp thì sẽ lấy thười gian mặc định là thời gian hiện tại
</pre>
<?php
    echo '<br> date("d") : '.date("d");
    echo '<br> date("m") : '.date("m");
    echo '<br> date("y") : '.date("y");
    echo '<br> date("l") : '.date("l");
    echo '<br> date("H") : '.date("H");
    echo '<br> date("h") : '.date("h");
    echo '<br> date("i") : '.date("i");
    echo '<br> date("s") : '.date("s");
    echo '<br> date("d/m/y") : '.date("d/m/y");
    echo '<br> date("d-m-y") : '.date("d-m-y");
    echo '<br> date("H:i:s d-m-y") : '.date("H:i:s d-m-y");

?>
</body>
</html>
