<?php
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($_POST['remember'])) {
    $remember =  true;
} else {
    $remember = false;
}

require 'admin/connect.php';
$sql = "select * from customer where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);

$number_rows = mysqli_num_rows($result);

if ($number_rows == 1){
    session_start();
    $each = mysqli_fetch_array($result);
    $id = $each['id'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] =$each['name'];
    if ($remember) {
        $token = uniqid('user_', true);
        $sql = "update customer set token = '$token' where id = '$id'";
        mysqli_query($connect, $sql);
        setcookie('remember', $token, time()+3600*24*30);
    }
    header('location: user.php');
    exit;
}
header('location: signin.php?error=Đăng nhập lỗi chắc chắn do bạn');
?>