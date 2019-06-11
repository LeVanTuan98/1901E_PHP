<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> Truyền tham chiếu và truyền tham trị cho function</h1>
<pre>
    Truyền tham trị là chỉ truyền giad trị
    Truyền tham chiếu là 2 biến cùng tham chiếu đến 2 ô nhớ
    => Khi 1 biến thay đối thì biến kia cũng thay đổi theo
    Truyền tham chiếu trước tên biến phải có dấu &
    function truyenthamchieu(&$d) {
        $d = $d * 2;
    }

</pre>

<?php
// truyen tham tri
function truyenthamtri($b) {
    /**
     * biến b tính toán trong hàm
     * không liên quan đến cái biến được truyền trong hàm
     */
    $b = $b * 2;
    echo '<br> $b trong hàm là : ' . $b;
}
$a = 5;
truyenthamtri($a);
echo '<br> $a là : ' . $a;
// truyen tham chieu
function truyenthamchieu(&$d) {
    $d = $d * 3;
    echo '<br> $d trong hàm là : ' . $d;
}
/**
 * hiểu $c và $d sẽ tham chiếu đến cùng 1 ô nhớ
 * khi mà biến $d bị thay đổi thì biến $c cũng bị thay đổi theo
 * và ngược lại
 */
$c = 10;
truyenthamchieu($c);
echo '<br>$c là : ' . $c;
?>
</body>
</html>
