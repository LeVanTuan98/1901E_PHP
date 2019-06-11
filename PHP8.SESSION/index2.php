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
    <h1>Tạo session trong PHP</h1>
    <?php
        $_SESSION['user_name'] = 'admin' ;
        $_SESSION['user_email'] = 'admin@mail.com' ;

        $Location = 'Hà Nội';
        $_SESSION['user_location'] = $Location;

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>
    <h1>Truy cập vào từng session trong PHP</h1>
    <?php
        if(isset($_SESSION['user_name'])) :
            ?>
                <p>User Name: <?php echo $_SESSION['user_name'] ?></p>
            <?php
        endif;
    ?>
    <?php
    if(isset($_SESSION['user_email'])) :
        ?>
        <p>User Email: <?php echo $_SESSION['user_email'] ?></p>
    <?php
    endif;
    ?>
    <?php
    if(isset($_SESSION['user_location'])) :
        ?>
        <p>User Location: <?php echo $_SESSION['user_location'] ?></p>
    <?php
    endif;
    ?>
</body>
</html>
