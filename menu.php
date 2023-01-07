<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style_header.css">
    <title>TheGoodNewspaper</title>
</head>
<body>
    <?php
        require './admin/connect.php';
   
    ?>
    <div id="header">
        <div id="search-box-and-logo">
            <a href="index.php">
                <img id="logo-web" src="assets/img/logo.png" alt="LOGO" />
            </a>
            <ul id="search-box">
                
                <?php
                if (empty($_SESSION['id'])) { ?>
                    <li id="dang-ky"><a href="signup.php">Đăng ký</a></li>
                    <li id="dang-nhap"><a href="signin.php">Đăng nhập</a></li>
                <?php
                } else {?>
                    <li><a href="signout.php">Đăng Xuất</a></li>
                    <li>Xin Chào <a href="user.php"><?php echo $_SESSION['name'] ?></a></li>
                <?php
                }
                ?>
                <li id="search" ><a href="search_result.php" class="kinh-lup ti-search"></a></li>
            </ul>
        </div>
        
        <?php
        $sql = "select * from category";
        $result = mysqli_query($connect,$sql);
        ?>
        <div id="nav-menu-bar">
            <ul id="menu-bar">
                <?php foreach ($result as $each): ?>
                    <li id="topic-2"><a href="category.php?id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
        
    </div>
    
    <?php mysqli_close($connect); 
    ?>
</body>
</html>