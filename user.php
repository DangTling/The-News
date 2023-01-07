<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tài khoản</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;

}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width:100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 40px;
  width: 60%;
  margin:0 auto;
  display: flex;
  padding-left:7%;

}
.user_short{
    margin-right:40px;
    width: 25%;
}
.short li{
    list-style-type: none;
}
</style>
<body>
    <?php 
    include './menu.php' ;
    if (empty($_SESSION['id'])) {
        header('location: index.php');
    }
    require 'admin/connect.php';
    $id = $_SESSION['id'];
    $sql = "select * from customer where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>
    <br>
    <div class="container">
        <div class="user_short">
            <img src="<?php echo $each['avatar'] ?>" alt="" height="200px">
            <ul class="short">
                <li><span>Tài Khoản của </span></li>
                <li><p><?php echo $each['name'] ?></p></li>
            </ul>
  
        </div>
        <div class="user_content">
            <h2>Thông Tin Tài Khoản</h2>
            <br>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="id_user">Mã ID Người dùng</label>
                <input type="text" name="id_user" value = "<?php echo $each['id'] ?>">
                <br>
                <label for="user_name">Tên Người Dùng</label>
                <input type="text" name="user_name" id="" value="<?php echo $each['name'] ?>">
                <br> <br>
                <label for="user_email">Email</label>
                <input type="text" name="user_email" value="<?php echo $each['email'] ?>">
                <br> <br>
                <label for="user_date">Năm Sinh</label>
                <input type="text" name="date" value="<?php echo $each['date'] ?>">
                <br><br>
                <label for="user_password">Mật Khẩu</label>
                <input type="password" name="user_password" id="" value = "<?php echo $each['password'] ?>">
            </form>
        </div>
    </div>
    <?php
        include './footer.php';
    ?>
</body>
</html>