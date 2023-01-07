<?php
if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone_number']) || empty($_POST['email']) || empty($_POST['password'])) {
    header('location: insert_form.php?ket_qua=Phai Dien Day Du Thong Tin');
    die($connect);
}

$name = addslashes($_POST['name']);
$sex = addslashes($_POST['sex']);
$date = addslashes($_POST['date']);
$address = addslashes($_POST['address']);
$phone_number = addslashes($_POST['phone_number']);
$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);
$avatar = $_FILES['avatar'];

$folder = './photos/';
$file_extension = explode('.',$avatar['name'])[1];
$file_name = time().'.'.$file_extension;
$path_file = $folder.$file_name;
move_uploaded_file($avatar["tmp_name"], $path_file);

require "../connect.php";
$sql = "insert into staff(name,sex,date,email,password,avatar,phone_number,address) values('$name','$sex','$date','$email','$password','$path_file','$phone_number','$address')";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
echo $error;
header('location: index.php?ket_qua=Them Thanh Cong');
mysqli_close($connect);
?>