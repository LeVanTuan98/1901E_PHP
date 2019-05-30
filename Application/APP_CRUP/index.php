<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
//    Nạp CSDL
    include_once "conflig.php";

    $sqlSelect = "SELECT * FROM employees";
/*
 * mysqli_query(tham số 1, tham số 2);
 * tham số 1: Biến kết nối CSDL
 * tham số 2: Câu QUERY của SQL
 * */
    $result = mysqli_query($connection, $sqlSelect);
/*
                mysqli_result Object
                (
                    [current_field] => 0
                    [field_count] => 4
                    [lengths] =>
                    [num_rows] => 0
                    [type] => 0
                )
 * */
?>

    <div class="container">
        <div class="row">
            <div style="margin: 30px 0">
                <a href="create.php" class="btn btn-success">Create employee</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /*
                 * (mysqli_num_rows() truyền vào tham số của hàm mysqli_query()
                 * Nó dùng để đếm số bản ghi trả về của câu SQL
                 * */

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    /*
                     * $row = mysqli_fetch_assoc() truyền vào biến của mysqli_query()
                     * Nó dùng để lấy ra từng bản ghi của câu SQL
                     * $row sẽ là 1 bản ghi trong bảng
                     * Vòng lặp While sẽ chạy cho đến khi hết các bản ghi trong bảng trả về từ câu SQL
                     * */
                    while($row = mysqli_fetch_assoc($result)) {
                ?>

                        <tr>
                            <th scope="row"><?php echo $row['id']?> </th>
                            <td><?php echo $row['name']?> </td>
                            <td><?php echo $row['address']?> </td>
                            <td><?php echo $row['salary']?> </td>
                            <td>
                                <div>
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">Edit employee</a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Delete employee</a>
                                </div>
                            </td>
                        </tr>

                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
