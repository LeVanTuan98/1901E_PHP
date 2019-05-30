<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        for ($i = 0 ; $i < 100 ; $i++) {
            echo $i."  ";
        }
        echo "<hr>";
        for ($i = 0 ; $i < 100 ; $i++) {
            if ($i % 2 == 0) {
                echo $i."  ";
            }
        }
    ?>
</body>
</html>
