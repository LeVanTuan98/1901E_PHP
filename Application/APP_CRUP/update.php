<?php
include_once "conflig.php";
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])){
    if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['salary'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        $sqlInsert = "UPDATE employees SET name = '$name' , address = '$address' , salary = $salary WHERE id =".(int)$id;
        if (mysqli_query($connection, $sqlInsert)) {
            echo "Record updated successfully";            /**
             * hàm header được dùng để chuyển hướng url
             */
            header('location: index.php');
            exit;
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }
    }
}