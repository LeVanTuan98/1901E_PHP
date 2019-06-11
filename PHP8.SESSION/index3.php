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
<h1>Chỉnh sửa session trong PHP</h1>
<?php
// Xem tất cả session đang hoạt động
echo "Các session trước khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


// Sửa session
$_SESSION['user_name'] = 'mod' ;
// Xem tất cả session đang hoạt động
echo "Các session sau khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>
