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
        <h3 class="right__tableTitle">Chi tiết sản phẩm</h3>
        <div class="right__tableWrapper">
            <?PHP
            if (!empty($data)) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID Chi tiết sản phẩm</th>
                            <th>ID Sản phẩm </th>
                            <th> Màu sắc</th>
                            <th>Size </th>
                            <th>Giá mới</th>
                            <th>Giá cũ</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Xoá</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data as $value) {         ?>
                            <tr>
                                <td><?php echo $value->idProductDetail ?></td>
                                <td><?php echo $value->idProduct ?></td>
                                <td><?php echo $value->color ?></td>
                                <td><?php echo $value->size ?></td>
                                <td><?php echo $value->price ?></td>
                                <td><?php echo $value->oldPrice ?></td>
                                <td><img style="width: 50px; heigh:auto;" src="<?php echo  $IMAGE_DIR . $value->imgUrl ?>"></td>
                                <td><?php echo $value->quantity ?></td>
                                <td class="text-center">
                                    <a href="?act=products&deleteDetail=<?PHP echo $value->idProductDetail ?>" class="btn-edit">Xóa</a>
                                </td>
                                <td class="text-center">
                                    <a href="?act=products&editDetail=<?PHP echo $value->idProductDetail ?>" class="btn-edit">Sửa</a>


                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <h1> Hiện không có dữ liệu trong bảng</h1>


                    <?PHP } ?>


                    </tbody>

                </table>
                </td>
                <td class="text-center">
                    <a href="?act=products&newDetail=<?PHP echo $idPRD ?>" class="btn-edit">Thêm mới</a>
                </td>
        </div>
    </div>
</body>

</html>