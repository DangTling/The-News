<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheGoodNewspaper</title>
</head>
<body>
    <?php
    require 'menu.php';
    require "admin/connect.php";
    // Phan So Trang
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    $tim_kiem = "";
    if (isset($_GET["search"])) {
        $tim_kiem = $_GET["search"];
    } 
    $sql_page = "select count(*) from new where header like '%$tim_kiem%'";
    $ket_qua_page = mysqli_query($connect, $sql_page);
    $ket_qua_mang = mysqli_fetch_array($ket_qua_page);
    $news = $ket_qua_mang['count(*)'];
    $news_on_1_page = 3;
    $pages = ceil($news/$news_on_1_page);
    $so_bai_bo_qua = $news_on_1_page * ($page - 1);
    // Thanh tim kiem
    $sql = "select * from new where header like '%$tim_kiem%' limit $news_on_1_page offset $so_bai_bo_qua";
    $ket_qua = mysqli_query($connect, $sql);
    ?>
    
    <table border="1" width="100%">
    <caption>
        <form>
            <input type="search" name="search" value="<?php echo $tim_kiem ?>"> 
        </form>
    </caption>
        <tr>
            <th>Mã</th>
            <th>Tiêu Đề</th>
            <th>Ảnh Bìa</th>
        </tr>
        <?php
        foreach($ket_qua as $each) {
            ?>
            <tr>
                <td><?php echo $each["id"] ?></td>
                <td>
                    <a href="show.php?id=<?php echo $each["id"] ?>">
                        <?php echo $each["header"] ?>
                    </a>
                </td>
                <td>
                    <img src="admin/news/<?php echo $each["photo"] ?>" alt="" height="150px">
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php 
    for($i=1;$i<=$pages;$i++){ ?>
        <a href="?page=<?php echo $i ?>&search=<?php echo $tim_kiem ?>">
            <?php echo $i ?>
        </a>
    <?php }
    ?>
    <?php mysqli_close($connect); 
    require 'footer.php';
    ?>
</body>
</html>