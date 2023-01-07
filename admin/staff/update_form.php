<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Biên tập viên</title>
</head>
<body>
    <?php
        if (empty($_GET['id'])) {
            header('location:index.php?ket_qua=Phai Truyen Ma De Sua Ban Oi');
            exit;
        }
        if (isset($_GET['ket_qua'])) {
    ?>
    <span style="color: red; font-size: 40px">
        <?php echo $_GET['ket_qua'] ?>
    </span>
    <?php
        }
        include '../features_of_admin.php';
        require '../connect.php';
        $id = $_GET['id'];
        $sql = "select * from staff where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
    ?>
    <form action="process_update.php?id=<?php echo $each['id']?>" method="POST" enctype="multipart/form-data">
        Họ và Tên
        <input type="text" name="name" value="<?php echo $each['name'] ?>">
        <br>
        Giới Tính
        <input type="radio" name="sex" id="" value="Nam" checked>Nam
        <input type="radio" name="sex" id="" value="Nữ">Nữ
        <br>
        Năm Sinh
        <input type="text" name="date" value="<?php echo $each['date'] ?>">
        <br>
        Địa Chỉ
        <textarea name="address" id="" cols="30" rows="10"><?php echo $each['address'] ?></textarea>
        <br>
        Điện Thoại
        <input type="text" name="phone_number" value="<?php echo $each['phone_number'] ?>">
        <br>
        Ảnh đại diện mới
        <input type="file" name="avatar_new">
        <br>
        Hoặc giữ ảnh cũ
        <img src="./photos/<?php echo $each['avatar'] ?>" alt="" height="200px">
        <input type="hiddden" name="avatar_old" value="<?php echo $each['avatar'] ?>">
        <br>
        Tên đăng nhập tài Khoản nội bộ
        <input type="email" name="email" value="<?php echo $each['email'] ?>">
        <br>
        Mật Khẩu tài khoản nội bộ
        <input type="password" name="password" id="" value="<?php $each['password'] ?>">
        <br>
        <button>Sua Thong Tin</button>
    </form>
    <?php mysqli_close($connect) ?>
</body>
</html>