<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
/*
 * Xóa cookie bằng cách đặt thời gian sống cho nó là 1 thời gian đã qua
 * time() là lấy thời gian hiện tại
 * time() - 3600 là cách đây 1 giò
 * => Session sẽ tự chết*/
$time = time() - 3600000;
setcookie("username","",$time);
echo "<br> sau khi xóa";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";