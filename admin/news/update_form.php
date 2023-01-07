<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Bài Viết</title>
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
        require '../features_of_admin.php';
        require '../connect.php';
        $id = $_GET['id'];
        $sql = "select * from new where id ='$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);

        $sql = "select * from category";
        $result = mysqli_query($connect, $sql);
    ?>
    <form action="process_update.php?id =<?php echo $each['id'] ?>" method="POST" enctype="multipart/form-data">
        Mã ID của Biên tập viên
        <input type="number" name="id_staff" value="<?php echo $each['id_staff'] ?>">
        <br>
        Thể Loại
        <select name="id_category" id="">
            <?php foreach($result as $once): ?>
                <option value="<?php echo $once['id'] ?>"
                <?php if($each['id_category'] == $once['id'] ){  ?>
                    selected
                <?php } ?>
                >
                    <?php echo $once['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        Tiêu Đề 
        <input type="text" name="header" id="" value = "<?php echo $each['header'] ?>">
        <br>
        Đổi Ảnh bìa mới
        <input type="file" name="photo_new">
        <br>
        Hoặc giữ ảnh bìa cũ
        <img src="./photos/<?php echo $each['photo'] ?>" alt="" height="200px">
        <input type="hiddden" name="photo_old" value="<?php echo $each['photo'] ?>">
        <br>
        Đổi Ảnh trong bài viết mới
        <input type="file" name="photo_nd_new">
        <br>
        Hoặc giữ ảnh trong bài viết cũ
        <img src="./photos/<?php echo $each['photo_nd'] ?>" alt="" height="200px">
        <input type="hiddden" name="photo_nd_old" value="<?php echo $each['photo_nd'] ?>">
        <br>
        Nội dung bài viết
        <textarea name="content" id="" cols="30" rows="50">
            <?php echo $each['content'] ?>
        </textarea>
        <br>
        Phần nội dung sau Ảnh
        <textarea name="content_nd" id="" cols="30" rows="50">
            <?php echo $each['content_nd'] ?>
        </textarea>
        <br>
        Tóm Tắt
        <textarea name="summary" id="" cols="30" rows="20">
            <?php echo $each['summary'] ?>
        </textarea>
        <br>
        <button>Sửa Bài viết</button>
    </form>
</body>
</html>