<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
    <title>TheGoodNewspaper</title>
</head>
<body>
    <?php 
    require 'admin/connect.php';
    
    ?>
    <div id="main">
        <div id="content-container">
            <?php
            $sql = "select * from new limit 1;";
            $result = mysqli_query($connect, $sql);
            $each = mysqli_fetch_array($result);
            ?>
            <div id="main-content">
                <div id="main-bulletin" class="bulletin">
                    <a href="detail.php?id=<?php echo $each['id'] ?>">
                        <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                    </a>
                </div>
                <a  id="main-title" href="detail.php?id=<?php echo $each['id'] ?>">
                    <h1><?php echo $each['header'] ?></h1>
                </a>
            </div>


            <div id="sub-content">
                <?php
                $sql = "select * from new limit 4;" ;
                $result = mysqli_query($connect, $sql);
                foreach ($result as $each):
                ?>
                <div class="sub-bulletin">
                    <a class="sub-title" href="detail.php?id=<?php echo $each['id'] ?>">
                        <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                        <h4><?php echo $each['header'] ?></h4>
                    </a>
                </div>  
                <?php endforeach ?>
            </div>

            
            <div class="sub-content-2">
                <?php 
                $sql = "select * from new where id >= 14 limit 2;";
                $result = mysqli_query($connect, $sql);
                foreach ($result as $each):
                ?>
                    <div class="sub-bulletin-2">
                        <a class="sub-title-2" href="detail.php?id=<?php echo $each['id'] ?>">
                            <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                            <h4><?php echo $each['header'] ?></h4>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>

            <div class="sub-content-3">
                <div class="sub-3-1">
                    <?php
                    $sql = "select * from new where id=16 ;";
                    $result = mysqli_query($connect, $sql);
                    $each = mysqli_fetch_array($result);
                    ?>
                    <div class="sub-3-1-1">
                        <a class="abc" href="detail.php?id=<?php echo $each['id'] ?>">
                            <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                            <h2><?php echo $each['header'] ?></h2>
                        </a>
                    </div>
                </div>      
                <div class="sub-3-2">
                    <?php
                    $sql = "select * from new where id >= 15 limit 4;";
                    $result = mysqli_query($connect, $sql);
                    foreach ($result as $each):                    ?>
                    <div class="subb-3-2">
                        <a class="" href="detail.php?id=<?php echo $each['id'] ?>">
                            <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                            <h4><?php echo $each['header'] ?></h4>
                        </a>
                    </div>
                    <?php endforeach ?>
                    
                </div>

            </div>

            <div class="sub-content-4">
                <div class="sub-4-1">
                    <?php
                    $sql = "select new.* , category.name as name_category
                    from new join category on new.id_category = category.id order by id desc limit 6;";
                    $result = mysqli_query($connect, $sql);
                    
                    foreach ($result as $each):
                    ?>
                    <div class="subb-4-1">
                        <a class="" href="detail.php?id=<?php echo $each['id'] ?>">
                            <h4><?php echo $each['header'] ?></h4>
                            <div class="subbb">
                                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                                <div>
                                    <p><?php echo $each['name_category'] ?></p>
                                    <span><?php echo $each['summary'] ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="sub-4-2">
                    <?php
                    $sql = "select new.* , category.name as name_category
                    from new join category on new.id_category = category.id limit 1";
                    $result = mysqli_query($connect, $sql);
                    
                    foreach ($result as $each):
                    ?>
                    <div class="sub-4-2-1">
                        <a href="detail.php?id=<?php echo $each['id'] ?>">
                            <h2><?php echo $each['name_category'] ?></h2>
                            <div>
                                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                                <h3><?php echo $each['header'] ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php endforeach ?>

                    <div class="sub-4-2-2">
                        <ul>
                            <?php
                            $sql = "select * from new limit 6;";
                            $result = mysqli_query($connect, $sql);
                            foreach ($result as $each):
                            ?>
                                <li class="list-1"><a  href="detail.php?id=<?php echo $each['id'] ?>"><?php echo $each['header'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <?php
                    $sql = "select new.* , category.name as name_category
                    from new join category on new.id_category = category.id where new.id > 10 limit 1";
                    $result = mysqli_query($connect, $sql);
                    
                    foreach ($result as $each):
                    ?>
                    <div class="sub-4-2-3">
                        <a href="detail.php?id=<?php echo $each['id'] ?>">
                            <h2><?php echo $each['name_category'] ?></h2>
                            <div>
                                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                                <h3><?php echo $each['header'] ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <div class="sub-4-2-4">
                        <ul>
                            <?php
                            $sql = "select * from new order by id desc limit 6;";
                            $result = mysqli_query($connect, $sql);
                            foreach ($result as $each):
                            ?>
                                <li class="list-7"><a  href="detail.php?id=<?php echo $each['id'] ?>"><?php echo $each['header'] ?></a></li>
                            <?php endforeach?>
                        </ul>
                    </div>

                </div>
                

                </div>
                <div class="sub-content-5">
                    <div class="sub-5 sub-5-1">
                        <?php
                        $sql = "select new.* , category.name as name_category
                        from new join category on new.id_category = category.id where new.id = 17";
                        $result = mysqli_query($connect, $sql);
                        $each = mysqli_fetch_array($result);
                        ?>
                        <a class="sub-5-1-1" href="detail.php?id=<?php echo $each['id'] ?>">
                            <h2><?php echo $each['name_category'] ?></h2>
                            <div>
                                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                                <h3><?php echo $each['header'] ?></h3>
                            </div>
                        </a>

                        <div class="subb-5 sub-5-1-2">
                            <ul>
                                <?php
                                $sql = "select * from new order by id desc limit 2;";
                                $result = mysqli_query($connect, $sql);
                                foreach ($result as $each):
                                ?>
                                <li class="list-7"><a  href="detail.php?id=<?php echo $each['id'] ?>"><?php echo $each['header'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>

                    <div class="sub-5 sub-5-2">
                        <?php
                        $sql = "select new.* , category.name as name_category
                        from new join category on new.id_category = category.id where new.id = 18";
                        $result = mysqli_query($connect, $sql);
                        $each = mysqli_fetch_array($result);
                        ?>
                        <a class="sub-5-2-1" href="detail.php?id=<?php echo $each['id'] ?>">
                            <h2><?php echo $each['name_category'] ?></h2>
                            <div>
                                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                                <h3><?php echo $each['header'] ?></h3>
                            </div>
                        </a>
                        <div class=" subb-5 sub-5-2-2">
                            <ul>
                                <?php
                                $sql = "select * from new order by id limit 2;";
                                $result = mysqli_query($connect, $sql);
                                foreach ($result as $each):
                                ?>
                                <li class="list-7"><a  href="detail.php?id=<?php echo $each['id'] ?>">Tổng biên tập VietNamNet giữ chức Cục trưởng Cục Thông tin đối ngoại</a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-3">
                        <?php
                        $sql = "select new.* , category.name as name_category
                        from new join category on new.id_category = category.id where new.id = 15";
                        $result = mysqli_query($connect, $sql);
                        $each = mysqli_fetch_array($result);
                        ?>
                        <a class="sub-5-3-1" href="detail.php?id=<?php echo $each['id'] ?>">
                            <h2><?php echo $each['name_category'] ?></h2>
                            <div>
                                <img src="admin/news/<?php echo $each['photo'] ?>" alt="">
                                <h3><?php echo $each['header'] ?></h3>
                            </div>
                        </a>
                        <div class="subb-5 sub-5-3-2"">
                            <ul>
                                <?php
                                $sql = "select * from new where id>=14 limit 2;";
                                $result = mysqli_query($connect, $sql);
                                foreach ($result as $each):
                                ?>
                                <li class="list-7"><a  href="detail.php?id=<?php echo $each['id'] ?>"><?php echo $each['header'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            


        </div>
    </div>
    
    
    
</body>
</html>