<?php
$id_staff = $_POST['id_staff'];
$id_category = $_POST['id_category'];
$header = $_POST['header'];
$photo = $_FILES['photo'];
$photo_nd = $_FILES['photo_nd'];
$content = $_POST['content'];
$content_nd = $_POST['content_nd'];
$summary = $_POST['summary'];
$initialization_time = date('d/m/Y H:i:s');

$folder = './photos/';
$file_extension = explode('.',$photo['name'])[0];
$file_name = time().'.'.$file_extension;
$path_file = $folder.$file_name;
move_uploaded_file($photo["tmp_name"], $path_file);

$file_extension_nd = explode('.',$photo_nd['name'])[1];
$file_name_nd = time().'.'.$file_extension_nd;
$path_file_nd = $folder.$file_name_nd;
move_uploaded_file($photo_nd["tmp_name"], $path_file_nd);

require '../connect.php'; 
$sql = "insert into new(id_staff, id_category, header, photo, photo_nd, content, content_nd, initialization_time, summary) values('$id_staff', '$id_category','$header', '$path_file', '$path_file_nd', '$content', '$content_nd', '$initialization_time','$summary')";
mysqli_query($connect, $sql);
$error = mysqli_error($connect);
echo $error;
header('location: index.php?ket_qua=Thêm Thành Công');

mysqli_close($connect);
?>