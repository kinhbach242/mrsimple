<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../public/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=$PUBLIC_URL?>/css/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <?php require 'menu_data.php' ?>
                <div class="right">
                    <div class="right__content">
                    <div class="right__title">DASHBOARD</div>
                    <div class="right__cards">
        <a class="right__card" href="?act=products">
            <div class="right__cardTitle">Sản phẩm</div>
            <div class="right__cardNumber"><?= $countProducts[0]['count'] ?></div>
            <div class="right__cardDesc">Xem thêm <img src="../public/assets/arrow-right.svg" alt=""></div>
        </a>
        <a class="right__card" href="?act=user">
            <div class="right__cardTitle">Người dùng</div>
            <div class="right__cardNumber"><?= $countUser[0]['count'] ?></div>
            <div class="right__cardDesc">Xem thêm <img src="../public/assets/arrow-right.svg" alt=""></div>
        </a>
        <a class="right__card" href="?act=category">
            <div class="right__cardTitle">Loại sản phẩm</div>
            <div class="right__cardNumber"><?= $countCategory[0]['count'] ?></div>
            <div class="right__cardDesc">Xem thêm <img src="../public/assets/arrow-right.svg" alt=""></div>
        </a>
        <a class="right__card" href="?act=bill">
            <div class="right__cardTitle">Đơn hàng</div>
            <div class="right__cardNumber"><?= $countBill[0]['count'] ?></div>
            <div class="right__cardDesc">Xem thêm <img src="../public/assets/arrow-right.svg" alt=""></div>
        </a>
    </div>
                        <?php require $VIEW_NAME; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=$PUBLIC_URL?>/js/main.js"></script>
</body>
</html>