<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Toán tử ++ vd : $a = 5; $a++; => $a là 6
        Toán tử -- vd : $a = 5; $a--; => $a là 4
    </pre>
<?php
    $a = 5;
    $a++;
    $b = 6;
    $b--;
    echo '<br> $a++ =  '.$a;
    echo '<br> $b-- =  '.$b;
    $c = 3;
    $d = 6;
    echo '<br> $c-- + --$d = '.($c-- + --$d);
?>
</body>
</html>
