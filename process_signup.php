<?php
require 'admin/connect.php';
$name = $_POST['name'];
$sex= $_POST['sex'];
$date = $_POST['date'];
$avatar = $_FILES['avatar'];
$email = $_POST['email'];
$password = $_POST['password'];

$folder = './photos/';
$file_extension = explode('.',$avatar['name'])[1];
$file_name = time().'.'.$file_extension;
$path_file = $folder.$file_name;
move_uploaded_file($avatar["tmp_name"], $path_file);

$sql = "select count(*) from customer where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows= mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1) {
    header('location:signup.php?error= Email đã đăng kí, vui lòng dùng email khác');
    exit;
}
$sql = "insert into customer(name,sex,date, email, password, avatar) value('$name','$sex','$date', '$email', '$password', '$path_file')";
mysqli_query($connect, $sql);

$sql = "select id from customer where email = '$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];

session_start();
$_SESSION['name'] = $name;
$_SESSION['id'] = $id;
header('location: user.php');

mysqli_close($connect);
?>