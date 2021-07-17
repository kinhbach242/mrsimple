<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Product</title>
    <link rel="shortcut icon" href="../public/assets/favicon.ico" type="image/x-icon">
</head>

<body>

   
    <div class="right__table">
        <h3 class="right__tableTitle">Danh sách sản phẩm</h3>
        <div class="right__tableWrapper">
            <?PHP
            if (!empty($data)) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Loại sản phẩm</th>
                            <th>Thương hiệu</th>
                            <th>Ảnh</th>
                            <th>Flash sale</th>
                            <th>Giảm giá (%)</th>
                            <th>Mô tả</th>
                            <th>Ngày cập nhật</th>
                            <th>Xóa</th>
                            <th>Sửa</th>
                            <th>Chi tiết</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data as $value) {         ?>
                            <tr>
                                <td><?php echo $value->idProduct ?></td>
                                <td><?php echo $value->nameProduct ?></td>
                                <td><?php echo $value->idCategory ?></td>
                                <td><?php echo $value->idBrand ?></td>
                                <td><img style="width: 50px; heigh:auto;" src="<?php echo  $IMAGE_DIR . $value->imgUrl ?>"></td>
                                <td><?php echo $value->flashSale ?></td>
                                <td><?php echo $value->note ?></td>
                                <td><?php echo $value->description ?></td>
                                <td><?php echo $value->date ?></td>
                                <td class="text-center">
                                    <a href="?act=products&delete=<?PHP echo $value->idProduct ?>" class="btn-edit">Xóa</a>
                                </td>
                                <td>
                                    <a href="?act=products&edit=<?PHP echo $value->idProduct ?>" class="btn-edit">Sửa</a>
                                </td>
                                <td>
                                    <a href="?act=products&detail=<?PHP echo $value->idProduct ?>" class="btn-edit">Detail</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?PHP  } else { ?>
                <h1> Hiện không có dữ liệu trong bảng</h1>

        </div>
    <?PHP } ?>
    </div>
</body>

</html>