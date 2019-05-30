<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Function PHP</h1>
<div>
    <p>A PHP function is a block of code designed to perform a particular task.</p>

    <p>Hàm trong PHP là khối các câu lệnh được tạo ra để thực hiện 1 nhiệm vụ cụ thể</p>

    <p>A PHP function is executed when "something" invokes it (calls it).</p>

    <p>Hàm trong PHP được chạy khi mà nó được gọi</p>

    <p>Cú pháp hàm : function tên_hàm(arg1, arg2) { // code execute }</p>

    <p>arg1 và arg2 nó tham số được truyền vào trong hàm</p>

    <p>Gọi hàm : tên_hàm(x, y)</p>

    <p>Lệnh return trong hàm sẽ trả về giá trị và các lệnh sau return thì chắn chắn ko chạy</p>
    <hr>
    <?php
        define("pi","3.14");
        function chuViDuogTron($r) {
            return 2*$r*pi;
        }

        function dienTichHinhTron($r){
            return $r**2*pi;
        }
        $r = 5;
        echo "Chu vi đường tròn có bán kính R = $r là : ".chuViDuogTron($r);
        echo "<br>";
        echo "Diện tich hình tròn có bán kính R = $r là : ".dienTichHinhTron($r);
    ?>
</body>
</html>