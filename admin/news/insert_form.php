<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Bài Viết Mới</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;

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
}
</style>
<body>

    <?php
        require '../features_of_admin.php';
        require '../connect.php';
        $sql = "select * from category";
        $result = mysqli_query($connect, $sql);
    ?>
    <br>
    <div>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        <label for="id_staff">Mã ID của Biên tập viên</label>
        <input type="text" name="id_staff">
        <br>
        Thể Loại
        <select name="id_category" id="">
            <?php foreach($result as $each): ?>
                <option value="<?php echo $each['id'] ?>">
                    <?php echo $each['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <label for="header">Tiêu Đề</label>
        <input type="text" name="header" id="">
        <br> <br>
        <label for="photo">Ảnh Bìa</label>
        <input type="file" name="photo">
        <br> <br>
        <label for="photo_nd">Ảnh Trong Bài Viết</label>
        <input type="file" name="photo_nd">
        <br><br>
        <label for="content">Nội dung bài viết</label>
        <input type="text" name="content" id="" ></input>
        <br><br>
        <label for="content_nd">Phần nội dung sau Ảnh</label>
        <input type="text" name="content_nd" id="" ></input>
        <br><br>
        <label for="summary">Tóm Tắt</label>
        <input type="text" name="summary" id="" ></input>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>