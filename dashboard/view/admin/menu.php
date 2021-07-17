<div class="left">
    <span class="left__icon">
        <span></span>
        <span></span>
        <span></span>
    </span>
    <div class="left__content">
        <div class="left__logo"><a href="../../index.php"><img src="../public/assets/logo-black.png " width="70px" alt="logo"></a></div>
        <div class="left__profile">
            <div class="left__image"><img src="../public/assets/kinhbach.jpg" style="object-fit:cover" alt="avatar"></div>
            <p class="left__name">MrSimple Manage</p>
        </div>
        <ul class="left__menu">
            <li class="left__menuItem">
                <a href="index.php" class="left__title"><img src="../public/assets/icon-dashboard.svg" alt="">Đơn hàng mới</a>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-tag.svg" alt="">Sản phẩm<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'product/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-edit.svg" alt="">Loại sản phẩm<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'category/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-book.svg" alt="">Nhóm sản phẩm<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'groupproduct/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-settings.svg" alt="">Thương hiệu<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'brand/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-user.svg" alt="">Phân quyền<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'role/category-con.php' ?>
                </div>
            </li>

            <li class="left__menuItem">
                <a href="?act=user&show" class="left__title"><img src="../public/assets/icon-users.svg" alt="">Người dùng</a>
            </li>
            <li class="left__menuItem">
                <a href="?act=bill&show" class="left__title"><img src="../public/assets/icon-book.svg" alt="">Đơn hàng</a>
            </li>
            <li class="left__menuItem">
                <a href="?act=comment&show" class="left__title"><img src="../public/assets/icon-book.svg" alt="">Bình luận</a>
            </li>
            <li class="left__menuItem">
                <a href="?act=rating&show" class="left__title"><img src="../public/assets/icon-book.svg" alt="">Đánh giá</a>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-user.svg" alt="">Phân tích<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'statistical/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <a href="?act=logout" class="left__title"><img src="../public/assets/icon-logout.svg" alt="">Đăng xuất</a>
            </li>

        </ul>
    </div>
</div>