<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/dantri.css">
    <title>TheGoodNewspaper</title>
</head>

<body>
    <?php
    require 'menu.php';
    $id = $_GET['id'];
    require 'admin/connect.php';
    $sql = "select * from new where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>
    <div class="container_reading">
        <div class="reading_screen">
            <div class="hientai">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li>-</li>
                    <li>Chính trị</li>
                </ul>
            </div>
            <div class="Title">
                <h1><?php echo $each['header'] ?></h1>
            </div>
            <?php
            // $sql ="select * from staff where id = '$id'"
            ?>
            <div class="author-wrap">
                <div class="author-avatar">
                    <span> <img src="https://st.ntcdntempv3.com/data/sites/1/useravatars/1047799.jpg?v=287" alt=""> </span>
                </div>
                <div class="author-name">
                    <a href=""> <b>Sơn Nguyễn</b> </a>
                </div>
                <time class="author-time" datetime="2022-11-29 11:07"><?php echo $each['initialization_time'] ?></time>
            </div>
            <div class="box"></div>
            <h2 class="description"><?php echo $each['summary'] ?></h2>
            <div class="noidung">
                
                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                <p><?php echo nl2br($each['content']) ?></p>
                
                <img src="admin/news/<?php echo $each['photo_nd'] ?>" alt="">
                <p><?php echo nl2br($each['content_nd'])?></p>
                
                
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar_header">
                <p>Đọc nhiều trong các mục khác</p>
            </div>
            <div class="side_content">
                <?php
                $sql = "select * from new where id = 16";
                $result = mysqli_query($connect, $sql);
                $each = mysqli_fetch_array($result);
                ?>
                <div class="side_item">
                    <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                    <ul class="side_title">
                        <li>
                            <h1>1.</h1>
                        </li>
                        <li>
                            <h2>
                                <a href="detail.php?id=<?php echo $each['id'] ?>"><?php echo $each['header'] ?></a>
                            </h2>
                        </li>
                    </ul>
                </div>
                <?php
                $sql = "select * from new order by id desc limit 4";
                $result = mysqli_query($connect, $sql);
                $count = 1;
                foreach ($result as $each):
                ?>
                    <div class="side_item1">
                        <ul class="side_title">
                            <li>
                                <h1><?php 
                                $count++;
                                echo $count; 
                                ?>.</h1>
                            </li>
                            <li>
                                <p>
                                    <a class="side_tt" href="detail.php?id=<?php echo $each['id']?>"><?php echo $each['header'] ?></a>
                                </p>
                            </li>
                            <li>
                                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                            </li>
                        </ul>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
    </div>
    <div class="more">
        <div class="tinlienquan">
            <div class="lienqua_header">
                <h3 class="lienqua_header__">Tin Liên Quan</h3>
                <div class="noidung_lq">
                    <?php
                    $sql = "select new.* , category.name as name_category
                    from new join category on new.id_category = category.id where new.id = 18";
                    $result = mysqli_query($connect, $sql);
                    $each = mysqli_fetch_array($result);
                    ?>
                    <ul>
                        <li>
                            <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                        </li>
                        <li class="ctn">
                            <h3 class="ctn_content">
                                <a href="detail.php?id=<?php echo $each['id'] ?>"><?php echo $each['header'] ?></a>
                                <p><?php echo $each['summary'] ?></p>
                            </h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dangquantam">
            <div class="lienqua_header">
                <h3>Đáng quan tâm</h3>
                <?php
                $sql = "select new.* , category.name as name_category
                from new join category on new.id_category = category.id order by id limit 5";
                $result = mysqli_query($connect, $sql);
                foreach ($result as $each):
                ?>
                <div class="noidung_lq">
                    <ul>
                        <li>
                            <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                        </li>
                        <li class="ctn">
                            <h3>
                                <a href="detail.php?id=<?php echo $each['id'] ?>"><?php echo $each['header'] ?></a>
                                <p><?php echo $each['summary'] ?></p>
                            </h3>
                        </li>
                    </ul>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <?php 
    require 'footer.php';
    ?>
    -----
</body>

</html>