<?php 
require'../check_admin_login.php';
require '../connect.php';
$id = $_GET['id'];
$sql = "delete from products where id ='$id'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success= xoa thanh cong');