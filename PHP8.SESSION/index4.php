<?php
// Khởi động session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Xóa session trong PHP</h1>
<?php
//$_SESSION['user_name'] = 'admin' ;
// Xem tất cả session đang hoạt động
echo "Các session trước khi xóa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


// xóa session
unset($_SESSION['user_name']);
// Xem tất cả session đang hoạt động
echo "Các session sau khi xóa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>