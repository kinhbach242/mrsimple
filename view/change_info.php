<div id="edit_user" class="box-content profile__wrapper">
    <h3> Chỉnh sửa hồ sơ của bạn </h3>
    <form action="index.php?act=change_info" method="Post" autocomplete="off">
        <div class="form-group">
            <input type="hidden" name="idUser" value="<?= $_SESSION['username']['idUser'] ?>">
            <label>Họ và Tên:</label></br>
        </div>
        <div class="form-group">
            <input type="text" name="fullName" class="form-control" value="<?=$_SESSION['username']['fullName']?>" /></br>
            <label>Số điện thoại:</label></br>
        </div>
        <div class="form-group">
            <input type="text" name="phoneNumber" class="form-control"  value="<?=$_SESSION['username']['phoneNumber']?>" /></br>
            <label>Địa chỉ:</label></br>
        </div>
            <input type="text" name="address" class="form-control"  value="<?=$_SESSION['username']['address']?>" /></br>
    
        <input name="change_info" class="submit_btn" type="submit" value="Sửa" />
    </form>
</div>
