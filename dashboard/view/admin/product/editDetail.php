<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="modal-body">

            <h2>Chỉnh sửa chi tiết sản phẩm</h2>
            <br><br><br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên sản phẩm :</label>
                    <?php echo $data_prd->nameProduct ?>
                </div>
                <div class="form-group">
                    <label>Màu sắc : </label>
                    <input type="text" name="color" class="form-control"  value="<?= $data->color ?>">
                </div>
                <div class="form-group">
                    <label>Size : </label>
                    <input type="text" name="size" class="form-control"  value="<?=$data->size?>" >
                </div>
                <div class="form-group">
                    <label>Giá mới : </label>
                    <input type="text" name="price" class="form-control" required value="<?= $data->price ?>">
                </div>
                <div class="form-group">
                    <label>Giá cũ : </label>
                    <input type="text" name="oldPrice" class="form-control" required value="<?= $data->oldPrice ?>">
                </div>
                <div class="form-group">
                    <label> Ảnh :</label>
                    <input type="file" name="imgUrl" required value="">
                <div class="imgEdit" style="width:100px"> <img src="<?= $IMAGE_DIR . $data->imgUrl ?>" alt="imgProduct"></div>

                </div>
                <div class="form-group">
                    <label>Số lượng </label>
                    <input type="text" name="quantity" class="form-control" required value="<?= $data->quantity ?>">
                </div>
                <input name="update" type="submit" value="Cập nhật" class="btn-submit">
            </form>

        </div>
    </div>


</body>

</html>