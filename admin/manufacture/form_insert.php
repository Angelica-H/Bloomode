<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- thong bao loi -->
    <?php 
        include'../menu.php'
    ?>
        

    <!-- end thong bao -->

    <form action="process_insert.php" method="POST">
        Tên
       <input type="text" name="name">
       <br>
       Địa chỉ
       <input type="text" name="address">
       <br>
       SDT
       <input type="text" name="phone">
       <br>
       Ảnh
       <input type="text" name="image">
       <br>
       <button>thêm</button>
       
    </form>
</body>
</html>