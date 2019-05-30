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
    if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])){
        if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['salary'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];

            $sqlInsert = "INSERT INTO employees (name, address, salary) VALUE ('$name','$address',$salary)";
            if (mysqli_query($connection, $sqlInsert)) {
                echo "New record created successfully";
                /**
                 * hàm header được dùng để chuyển hướng url
                 */
                header('location: index.php');
                exit;
            } else {
                echo "Error: " . $sqlInsert . "<br>" . mysqli_error($connection);
            }
        }
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create employee</h1>
                <form name="create" action="#" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" >
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <input type="text" class="form-control" name="salary" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
