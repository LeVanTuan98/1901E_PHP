<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $i = 0;
        while ($i <= 100) {
            echo $i % 2 == 0 ? "$i " : null;
            $i++;
        }
    ?>
</body>
</html>