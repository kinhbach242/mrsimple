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
        <h2>Sửa thương hiệu: <?= $getName ?> </h2>

        <br><br><br>
        <form action="" method="post">
            <div class="form-group">
                <label>ID Thương hiệu :</label>
                <?php echo $data->idThuongHieu ?>
            </div>
            <div class="form-group">
                <label> Tên thương hiệu :</label>
                <input type="text" name="nameBrand" class="form-control" value="<?= $data->nameBrand ?>">
            </div>


            <input name="update" type="submit" value="Cập nhật" class="btn-submit">
        </form>

    </div>

</body>

</html>