<?php
require '../connect.php';
$id = $_GET['id'];
$name = $_POST['name'];
$avatar_new = $_FILES['avatar_new'];
if ($avatar_new['size']>0) {
    $folder = 'photos/';
    $file_extension = explode('.',$avatar['name'])[1];
    $file_name = time().'.'.$file_extension;
    $path_file = $folder.$file_name;
    move_uploaded_file($avatar["tmp_name"], $path_file);
} else {
    $path_file = $_POST['avatar_old'];
}
$sex = $_POST['sex'];
$date = $_POST['date'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "update staff set name = '$name', sex = '$sex', email='$email', password = '$password', avatar= '$path_file',phone_number = '$phone_number', address = '$address' where id ='$id'";
mysqli_query($connect, $sql);
header('location: index.php');
mysqli_close($connect);

?>