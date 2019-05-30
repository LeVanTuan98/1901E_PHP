<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Mảng 2 chiều</h1>
<?php
    $student1 = array("Nguyễn Văn A","Hà Nội","1/1/19");
    $student2 = array("Nguyễn Văn B","Cà Mau","12/1/19");
    $student3 = array("Nguyễn Văn C","Hồ Chí Minh","1/9/19");
    $student4 = array("Nguyễn Văn D","Hà Nội","1/6/19");

    $group1 = array($student1,$student2);
    $group2 = array($student3,$student4);
    $student = array($group1,$group2);

    echo "<pre>";
    print_r($student);
    echo "</pre>";

    if(is_array($student) && !empty($student)){
        foreach ($student as $key_group => $group){
            echo "<br> $key_group";
            foreach ($group as $key_student => $_student){
                echo "<br> $key_student";
                foreach ($_student as $key => $value){
                    echo "<br> $key : $value";
                }
                echo "<hr>";
            }
            echo "<hr>";
        }
    }
?>
</body>
</html>
