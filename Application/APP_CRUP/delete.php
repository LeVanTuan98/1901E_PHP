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
}
if (isset($_POST['action']) && ($_POST['action'] == 'delete')) {
    if ( isset($_POST['id']) && ($_POST['id'] > 0 )) {
        $id = $_POST['id'];
        $sqlDelete = "DELETE FROM employees WHERE id = $id";
        if (mysqli_query($connection,$sqlDelete)) {
            header('Location: index.php');
            exit;
        } else {
            echo "Error deleting record: " . mysqli_error($connection);
        }

    }
}



?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete employee</h1>
            <form name="delete" action="" method="post">
                <input type="hidden" name="id" value="<?php echo $employee_id ?>">
                <input type="hidden" name="action" value="delete">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                </div>
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

