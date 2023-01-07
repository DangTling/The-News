<?php
session_start();
require 'admin/connect.php';
if(isset($_COOKIE['remember'])){
    $token = $_COOKIE['remember'];
    $sql = "select * from customer where token = '$token' limit 1";
    $result = mysqli_query($connect, $sql);
    $number_row = mysqli_num_rows($result);
    if ($number_row == 1) {
        $each = mysqli_fetch_array($result);
        $_SESSION['id']=$each['id'];
        $_SESSION['name']=$each['name'];
    }
    
}
if(isset($_SESSION['id'])) {
    header('location: user.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/registerForm.css">
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="process_signin.php" method="POST" enctype="multipart/form-data">
            <div class="control">
                <input type="email" placeholder="Email" id="email" name="email">
                <span></span>
                <small></small>
            </div>
            <div class="control">
                <input type="password" placeholder="Password" id="password" name="password">
                <span></span>
                <small></small>
            </div>
            <input type="checkbox" name="remember">
            Ghi nhớ đăng Nhập
            <br>
            <button>Sign In</button>
        </form>
    </div>

</body>
</html>