<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Biên Tập Viên Mới</title>
</head>
<style>
*{
    font-size:100%;
    margin: 0;
    padding: 0;
    border:0;
}
input[type=text],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
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

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  font-size:larger;
}

input[type=submit] {
  background-color: #45a049;
}

</style>
<body>
    <div>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        <label for="name">Họ và Tên</label>
        <input type="text" name="name">
        <br> <br>
        <label for="fname">First Name</label>
        <input type="radio" name="sex" id="" value="Nam" checked>Nam
        <input type="radio" name="sex" id="" value="Nữ">Nữ
        <br> <br>
        <label for="fname">Năm Sinh</label>
        <input type="text" name="date">
        <br>
        <label for="fname">Địa Chỉ</label>
        <input type="text" name="address" id="" >
        <br>
        <label for="fname">Số Điện Thoại</label>
        <input type="text" name="phone_number">
        <br>
        <label for="fname">Ảnh đại diện</label>
        <input type="file" name="avatar">
        <br>
        <br>
        <label for="fname">Email</label>
        <input type="text" name="email">
        <br> <br>
        <label for="fname">Mật Khẩu</label>
        <input type="password" name="password" id="">
        <br>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>