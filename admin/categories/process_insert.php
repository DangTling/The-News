<?php
if (empty($_POST['name'])) {
    header('location: insert_form.php?ket_qua=Phai Dien Ten The Loai');
    die($connect);
}
$name = $_POST['name'];

require "../connect.php";
$sql = "insert into category(name) values('$name') ";
mysqli_query($connect, $sql);
$error = mysqli_error($connect);
echo $error;
header('location: index.php?ket_qua=Them thanh cong');
mysqli_close($connect);
?>
