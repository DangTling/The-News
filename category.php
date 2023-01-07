<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./assets/css/styles.css"> -->
    <link rel="stylesheet" href="./assets/css/styles_the_loai.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
    <title>TheGoodNewspaper</title>
</head>
<body>
    <?php
    require 'menu.php';
    require 'admin/connect.php';
    $id = $_GET['id'];
    $sql = "select * from new where id_category = '$id'";
    $result = mysqli_query($connect, $sql);
    ?>
    <div class="main">
        <div class="content-container">
            <div class="genre">
                <a href="#">
                    <h2>Thể Thao</h2>
                </a>
            </div>
            <div class="content-container-1">
                <div class="main-content">
                    <div class="img-1"><a href="#"><img src="https://i.pinimg.com/564x/4f/50/36/4f503664dd94b684e9e7c30f907c9a19.jpg" alt=""></a></div>
                    <div class="title-1"><a href="#"><h2>Tình bạn diệu kỳ của Tanaka và Mitoma - bộ đôi làm lên lịch sử bóng đá Nhật Bản</h2></a></div>
                </div>

                <div class="sub-content-1">
                    <div class="sub-1 sub-content-1-1">
                        <div class="imgg img-2"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                        <div class="titlee title-2"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                    </div>
                    <div class="sub-1 sub-content-1-2">
                        <div class="imgg img-3"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                        <div class="titlee title-3"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                    </div>
                    <div class="sub-1 sub-content-1-3">
                        <div class="imgg img-4"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                        <div class="titlee title-4"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                    </div>
                </div>
            </div>
            <div class="content-container-2">
                <div class="sub-content-2 sub-content-2-1">
                    <div class="imggg img-5"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                    <div class="titleee title-5"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                </div>
                <div class="sub-content-2 sub-content-2-2">
                    <div class="imggg img-6"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                    <div class="titleee title-6"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                </div>
                <div class="sub-content-2 sub-content-2-3">
                    <div class="imggg img-7"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                    <div class="titleee title-7"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                </div>
            </div>
            <div class="content-container-3">
                <div class="genre-2">
                    <a href="#">
                        <h2>Bóng Đá</h2>
                    </a>
                </div>
                <div class="content-3">
                    <div class="sub-content-3 content-container-3-1">
                        <div class="content-container-3-1-1"><a href=""><img src="https://i.pinimg.com/564x/78/fe/8b/78fe8bf148240e7ede938283d139f37b.jpg" alt=""></a></div>
                        <div class="content-container-3-1-2"><a href=""><h2>Ngôi sao Phan Văn Đước chính thức rời SLNA</h2></a></div>
                    </div>
                    <div class="sub-content-3 content-container-3-2">
                        <div class="sub content-container-3-2-1">
                            <div class="i-img img-8"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                            <div class="t-title title-8"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                        </div>
                        <div class="sub content-container-3-2-2">
                            <div class="i-img img-9"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                            <div class="t-title title-9"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                        </div>
                    </div>
                    <div class="sub-content-3 content-container-3-3">
                        <div class="list list-1"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="list list-2"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="list list-3"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="list list-4"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="list list-4"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                    </div>
                </div>
            </div>
            <div class="content-container-4">
                <div class="genre-3">
                    <a href="#">
                        <h2>Bóng Đá</h2>
                    </a>
                </div>
                <div class="content-4">
                    <div class="sub-content-4 content-container-4-1">
                        <div class="content-container-4-1-1"><a href=""><img src="https://i.pinimg.com/564x/78/fe/8b/78fe8bf148240e7ede938283d139f37b.jpg" alt=""></a></div>
                        <div class="content-container-4-1-2"><a href=""><h2>Ngôi sao Phan Văn Đước chính thức rời SLNA</h2></a></div>
                    </div>
                    <div class="sub-content-4 content-container-4-2">
                        <div class="sub content-container-4-2-1">
                            <div class="ii-img img-10"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                            <div class="tt-title title-10"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                        </div>
                        <div class="sub content-container-4-2-2">
                            <div class="ii-img img-11"><a href="#"><img src="https://i.pinimg.com/564x/4b/18/3a/4b183a8fa9b75cbad0147944f088f796.jpg" alt=""></a></div>
                            <div class="tt-title title-11"><a href="#"><span>Ngôi sao Nhật Bản buồn nẫu ruột sau trận thắng tuyển Tây Ban Nha</span></a></div>
                        </div>
                    </div>
                    <div class="sub-content-4 content-container-4-3">
                        <div class="listt list-6"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="listt list-7"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="listt list-8"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="listt list-9"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                        <div class="listt list-10"> <a href=""><span>HLV Flick khả năng chia tay ĐT Đức sau World Cup 2022</span></a></div>
                    </div>
                </div>
            </div>

            <div class="content-container-5">
                <div class="genre-4">
                    <a href="#">
                        <h2>MỚI NHẤT</h2>
                    </a>
                </div>
                <div class="content-5">
                    <div class="sub-5 sub-5-1">
                        <div class="oj-1 sub-5-1-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-1-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-2">
                        <div class="oj-1 sub-5-2-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-2-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-3">
                        <div class="oj-1 sub-5-3-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-3-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-4">
                        <div class="oj-1 sub-5-4-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-4-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-5">
                        <div class="oj-1 sub-5-5-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-5-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-6">
                        <div class="oj-1 sub-5-6-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-6-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-7">
                        <div class="oj-1 sub-5-7-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-7-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-8">
                        <div class="oj-1 sub-5-8-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-8-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-9">
                        <div class="oj-1 sub-5-9-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-9-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                    <div class="sub-5 sub-5-10">
                        <div class="oj-1 sub-5-10-1"><a href="#"><img src="https://i.pinimg.com/564x/0f/46/aa/0f46aa10caf2318eac71cfb4d9d99cdb.jpg" alt=""></a></div>
                        <div class="oj-2 sub-5-10-2">
                            <div class="text-title"><a href="#"><h2>World Cup 2022: Tương quan trước trận Argentina - Australia, 2 giờ 4/12</h2></a></div>
                            <div class="sub-text"><span>TPO - Dù đội bóng của siêu tiền đạo Lionel Messi bất ngờ bại 1-2, dưới chân Saudi Arabia ở lượt trận ra quân, nhưng Argentina vẫn cán đích ở vị trí nhất bảng C với 6 điểm. Đội bóng xứ chuột túi bị đánh giá thấp hơn và chưa thể vượt qua Argentina trong quá khứ. Trong bóng đá, bất ngờ luôn xảy ra, liệu điều đó có đúng ở trận đấu này?</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'footer.php';
    ?>
</body>
</html>