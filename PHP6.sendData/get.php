<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_GET) && !empty($_GET)) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>

<h1>Form HTML</h1>
<pre>
    $_GET gửi dữ liệu qua URL
    VD mặc định: http://localhost/1901E_PHP/PHP6.sendData/get.php
    Sau khi form  có method = "get" gửi dữ liệu đi
    http://localhost/1901E_PHP/PHP6.sendData/get.php?username=ggg&password=ddd
    Lúc này php sẽ đưa tên của các ô input cùng giá trị của nó lên query string URL
</pre>
<div>
    <form action="" name="Register" method="get">
        <div>
            <label>Username</label>
            <input type="text" name="username" placeholder="Type username">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Type password">
        </div>
        <div>
            <input type="submit" value="Sign up">
        </div>
    </form>
</div>

</body>
</html>
</body>
</html>