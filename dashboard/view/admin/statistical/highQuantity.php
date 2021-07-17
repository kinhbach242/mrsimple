<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>


    <div class="right__table">
        <p class="right__tableTitle">SẢN PHẨM BÁN TRÊN 30</p>
        <div class="right__tableWrapper">
            <?PHP
            if (!empty($data)) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>ID Sản phẩm chi tiết</th>
                            <th>Số lượng</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php  
                        $i = 1;                     
                        foreach ($data as $value) {         ?>
                            <tr>
                                <td><?PHP echo $i++ ?></td>
                                <td><?php echo $value->idProduct ?></td>
                                <td><?php echo $value->nameProduct ?></td>
                                <td><?php echo $value->idProductDetail ?></td>
                                <td><?php echo $value->quantity?></td>
                            </tr>
                        <?php }
                    } else { ?>
                        <h1> Không có số liệu </h1>



                    <?PHP } ?>
                    </tbody>
                </table>
        </div>
        <a href="?act=products" class="right__tableMore">
            <p>Xem tất cả các sản phẩm</p> <img src="../public/assets/arrow-right-black.svg" alt="">
        </a>
    </div>
    </div>
</body>

</html>