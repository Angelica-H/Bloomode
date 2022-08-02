<?php 

if(empty($_POST['id'])){
    header('location:form_update.php?error= chưa có thông tin tên');

};

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];

require '../connect.php';
$sql =" update manufacturers set
    name = '$name',
    address = '$address',
    phone = '$phone',
    image = '$image'
    
    where id = '$id'";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success= Cập nhật thành công');