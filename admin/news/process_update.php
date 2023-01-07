<?php
$id = $_GET['id'];
$id_staff = $_POST['id_staff'];
$id_category = $_POST['id_category'];
$header = $_POST['header'];
$photo_new = $_FILES['photo_new'];
$photo_nd_new = $_FILES['photo_nd_new'];
$content = $_POST['content'];
$content_nd = $_POST['content_nd'];
$summary = $_POST['summary'];
$initialization_time = date('d/m/Y H:i:s');

if ($photo_new['size']>0) {
    $folder = 'photos/';
    $file_extension = explode('.',$photo['name'])[0];
    $file_name = time().'.'.$file_extension;
    $path_file = $folder.$file_name;
    move_uploaded_file($photo["tmp_name"], $path_file);
} else {
    $path_file = $_POST['photo_old'];
}
if ($photo_nd_new['size']>0) {
    $folder = 'photos/';
    $file_extension_nd = explode('.',$photo_nd['name'])[1];
    $file_name_nd = time().'.'.$file_extension_nd;
    $path_file_nd = $folder.$file_name_nd;
    move_uploaded_file($photo_nd["tmp_name"], $path_file_nd);
} else {
    $path_file = $_POST['photo_nd_old'];
}

require '../connect.php'; 
$sql = "update new set id_staff = '$id_staff', id_category = '$id_category', header = '$header', photo = '$path_file', photo_nd = '$path_file_nd', content = '$content', content_nd = '$content_nd', initialization_time = '$initialization_time', summary = '$summary'";
mysqli_query($connect, $sql);
$error = mysqli_error($connect);
echo $error;
header('location: index.php?ket_qua=Sửa Thành Công');

mysqli_close($connect);
?>