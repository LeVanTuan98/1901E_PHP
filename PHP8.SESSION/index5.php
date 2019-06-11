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
    <h1>Hủy session trong PHP</h1>
    <?php
        $_SESSION['user_name'] = 'admin' ;
        $_SESSION['user_email'] = 'admin@mail.com' ;

        $Location = 'Hà Nội';
        $_SESSION['user_location'] = $Location;

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        // Xóa toàn bộ session
        session_unset();
        session_destroy();
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>
</body>
</html>
