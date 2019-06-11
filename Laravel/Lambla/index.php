<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Lambda là hàm không tên</h1>
<?php
    function hello($name) {
        echo "<br> Hello".$name;
    }
    hello("Tuấn");
/*
 * Có những hàm chỉ sử dụng duy nhất 1 lần
 */
    /*
     * Gọi lambda bằng biến
     * Khi gán lambda cho 1 biến thì phải kết thúc bằng dấu ";"
     */
    $hello = function($name){
        return "<br> Hello".$name;
    };
    echo $hello("Tuấn");
    /*
     * Call Back
     * Khi thực hiện xong 1 hành động mới cho phép hành động chạy ngay đó
     * thì hành động phía sau được gọi là CallBack
     * showMessage($country)
     * Tham số truyền vào của hàm này($country) bắt buộc là 1 lambda đống vai trò là 1 callbcak của hàm showMessage()
     * Tức là hàm showMessage() chạy trước sau đó mới gọi hàm lambda $country()
     */
    function showMessage($country){
        echo "<br> Hello " . $country();
    }
    $country = function ($name){
        return $name;
    };
    showMessage(function (){
        return "Việt Nam";
    });

?>
</body>
</html>