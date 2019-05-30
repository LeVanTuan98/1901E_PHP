<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include_once "conflig.php";
$name = '';
$address = '';
$salary = '';
if (isset($_GET['id'])){
    $employee_id = (int)$_GET['id'];
    $sqlSelect = "SELECT * FROM employees WHERE id = $employee_id";
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);

    $name = isset($row['name']) ? $row['name'] : '';
    $address = isset($row['address']) ? $row['address'] : '';
    $salary = isset($row['salary']) ? $row['salary'] : '';
}


?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit employee</h1>
            <form name="edit" action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $employee_id ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $row['address']?>">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" class="form-control" name="salary" value="<?php echo $row['salary']?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

