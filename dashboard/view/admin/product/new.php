<!DOCTYPE html>
<html lang="en">

<head>
    <title> Thêm Sản phẩm mới</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h3> Thêm sản phẩm mới : </h3>
        <br><br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tên sản phẩm : </label>
                <input type="text" name="nameProduct" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label> Loại sản phẩm :</label>
                <select name="idCategory" class="form-control" value="">
                    <?PHP foreach ($data_ctr as $value) {  ?>
                        <option value="<?= $value->idCategory ?>"><?= $value->nameCategory ?></option>
                    <?PHP } ?>
                </select>
            </div>
            <div class="form-group">
                <label> Thương hiệu :</label>
                <select name="idBrand" class="form-control" value="">
                    <?PHP foreach ($data_brand as $value) {  ?>
                        <option value="<?= $value->idThuongHieu ?>"><?= $value->nameBrand?></option>
                    <?PHP } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Ảnh : </label>
                <input type="file" name="imgUrl" required value="">
            </div>
            <div class="form-group">
                <label>Flash Sale : </label>
                <select name="flashSale" class="form-control" value="">
                        <option value="0">Có</option>
                        <option value="1">Không</option>

                </select>
            </div>
            <div class="form-group">
                <label>Giảm giá (%): </label>
                <input type="text" name="note" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="description"> Mô tả :</label> <textarea name="description" cols="30" rows="10"></textarea>
            </div>

            <input name="update" type="submit" value="Thêm" class="btn-submit">
        </form>

    </div>

</body>

</html>