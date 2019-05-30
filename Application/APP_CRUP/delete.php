<?php
include_once "conflig.php";
$employee_id = $_GET['id'];
$sqlDelete = "DELETE FROM employees WHERE id = $employee_id";
if (mysqli_query($connection, $sqlDelete)) {
    echo "Record deleted successfully";
    header('Location: index.php');
    exit;
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}