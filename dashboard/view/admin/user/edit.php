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
        <h2>User : <?= $getName ?> </h2>
        <!-- Trigger the modal with a button -->
        <br><br><br>
        <form action="" method="post">
            <div class="form-group">
                <label>ID User :</label>
                <?php echo $data->idUser ?>
            </div>
            <div class="form-group">
                <label> Full Name : </label>
                <?PHP echo $data->fullName ?>
            </div>
            <div class="form-group">
                <label> Email : </label>
                <?PHP echo $data->email ?>
            </div>
            <div class="form-group">
                <label> Address : </label>
                <?PHP echo $data->address ?>
            </div>
            <div class="form-group">
                <label> Phone Number : </label>
                <?PHP echo $data->phoneNumber ?>
            </div>
            <div class="form-group">
                <label> Date Of Birth : </label>
                <?PHP echo $data->dateOfBirth ?>
            </div>
            <div class="form-group">
                <label> Username : </label>
                <?PHP echo $data->username ?>
            </div>
            <div class="form-group">
                <label> Password : </label>
                <?PHP echo $data->password ?>
            </div>
            <div class="form-group">
                <label> Role : </label>
                <select name="idRole" class="form-control" value="">
                    <?PHP foreach ($data_role as $value) {  ?>
                        <option value="<?= $value->idRole ?>"><?= $value->level ?></option>
                    <?PHP } ?>
                </select>
            </div>
            <input name="update" type="submit" value="Cập nhật" class="btn-submit">
        </form>

    </div>
</body>

</html>