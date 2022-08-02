<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (empty($_GET['id'])) {
        header('location:index.php?error:phải có mã để sửa');
    }
    $id = $_GET['id'];

    require '../connect.php';
    $sql = "select * from manufacturers where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each =  mysqli_fetch_array($result);
    include '../menu.php'
    ?>
  

    <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        Tên
        <input type="text" name="name" value="<?php echo $each['name'] ?>">
        <br>
        Địa chỉ
        <input type="text" name="address" value="<?php echo $each['address'] ?>">
        <br>
        SDT
        <input type="text" name="phone" value="<?php echo $each['phone'] ?>">
        <br>
        Ảnh
        <input type="text" name="image" value="<?php echo $each['image'] ?>">
        <br>
        <button>Sửa</button>

    </form>
</body>

</html>