<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $month = date('m'); // Khởi tạo thời gian

        switch ($month) {
            case 1:
                echo "Mùa xuân";
                break;
            case 2:
                echo "Mùa xuân";
                break;
            case 3:
                echo "Mùa xuân";
                break;
            case 4:
                echo "Mùa hạ";
                break;
            case 5:
                echo "Mùa hạ";
                break;
            case 6:
                echo "Mùa hạ";
                break;
            case 7:
                echo "Mùa thu";
                break;
            case 8:
                echo "Mùa thu";
                break;
            case 9:
                echo "Mùa thu";
                break;
            case 10:
                echo "Mùa đông";
                break;
            case 11:
                echo "Mùa đông";
                break;
            case 12:
                echo "Mùa đông";
                break;
            default:
                echo "Không xác định mùa";
                break;
        }
    ?>
</body>
</html>