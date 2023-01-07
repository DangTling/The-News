<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Bài Viết</title>
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
        $sql = "select * from new";
        $result = mysqli_query($connect, $sql);
    ?>
    <a class="add" href="insert_form.php">Thêm Bài Viết Mới</a>
    <table id="customers">
        <tr>
            <th>Mã ID</th>
            <th>Mã biên tập viên</th>
            <th>Mã thể loại</th>
            <th>Tiêu đề</th>
            <th>Ảnh bìa</th>
            <th>Ảnh thứ 2</th>
            <th>Thời gian khởi tạo</th>
            <th>Tóm tắt</th>
            <th>Chỉnh sửa bài viết</th>
            <th>Xóa Bài viết</th>
        </tr>
        <?php foreach ($result as $each): ?>
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['id_staff'] ?></td>
            <td><?php echo $each['id_category'] ?></td>
            <td><?php echo $each['header'] ?></td>
            <td>
                <img src="<?php echo $each['photo'] ?>" alt="Ảnh bìa bài báo" height="150px">
            </td>
            <td>
                <img src="<?php echo $each['photo_nd'] ?>" alt="" height="150px">
            </td>
            <td><?php echo $each['initialization_time'] ?></td>
            <td><?php echo $each['summary'] ?></td>
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