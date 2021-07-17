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
        <h2>Chỉnh sửa loại: <?= $getName ?> </h2>
        <!-- Trigger the modal with a button -->

        <div class="modal-body">
            <br><br><br>
            <form action="" method="post">
                <div class="form-group">
                    <label>ID Loại :</label>
                    <?php echo $data->idCategory ?>
                </div>
                <div class="form-group">
                    <label> Tên loại :</label>
                    <input type="text" name="nameCategory" class="form-control" value="<?= $data->nameCategory ?>">
                </div>
                <div class="form-group">
                <label> Nhóm sản phẩm :</label>
                <select name="idGroupProduct" class="form-control" value="">
                    <?PHP foreach ($data_group as $value) {  ?>
                        <option value="<?= $value->idGroupProduct ?>"><?= $value->nameGroupProduct ?></option>
                    <?PHP } ?>
                </select>
            </div>

                <input name="update" type="submit" value="Cập nhật" class="btn-submit">
            </form>

        </div>
    </div>



</body>

</html>