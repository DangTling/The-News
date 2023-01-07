<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Giao Diện Quản lí Biên Tập Viên</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    border: 0;
}

#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 40px;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    text-align: center;
}

.ql_nav {
    display: flex;
    margin-bottom: 50px;
}

.ql_nav li {
    list-style-type: none;
    width: 34%;
    text-align: center;
    border: 1px solid gray;
    background-color: #04AA6D;
    padding-top: 12px;
    padding-bottom: 12px;
    padding-right: 12px
}

.ql_nav li a {
    text-decoration: none;
    color: white;
}

.add {
    text-decoration: none;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    margin: 2px;
}
</style>
<body>

    <?php
    if (isset($_GET['ket_qua'])) {
    ?>
        <span style="color: red; font-size: 40px">
            <?php echo $_GET['ket_qua'] ?>
        </span>
    <?php
    }
        include '../connect.php';
        require '../features_of_admin.php';
        $sql = "select * from staff";
        $result = mysqli_query($connect, $sql);
    ?>
    <a class="add" href="./insert_form.php">Thêm Biên Tập Viên Mới</a>
    <table id="customers">
        <tr>
            <th>Mã Nhân Viên</th>
            <th>Họ Và Tên</th>
            <th>Ảnh Đại Diện</th>
            <th>Giới Tính</th>
            <th>Năm sinh</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Sửa Thông Tin</th>
            <th>Xóa biên tập viên</th>
        </tr>
        <?php foreach ($result as $each): ?>
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['name'] ?></td>
            <td>
                <img src="<?php echo $each['avatar'] ?>" alt="Ảnh đại diện của nhân viên" height="150px">
            </td>
            <td>
                <?php echo $each['sex'] ?>
            </td>
            <td><?php echo $each['date'] ?></td>
            <td><?php echo $each['address'] ?></td>
            <td><?php echo $each['phone_number'] ?></td>
            <td>
                <a href="update_form.php?id=<?php echo $each['id'] ?>">Sửa</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $each['id'] ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <?php mysqli_close($connect) ?>
</body>
</html>