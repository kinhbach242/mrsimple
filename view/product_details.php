<main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Chi tiết sản phẩm</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="product_img_slide">
                                <div class="single_product_img-main col-lg-12">
                                    <a href="#"><img src="<?= $IMAGE_DIR.$data[0]['imgUrl']; ?>" alt="product" class="img-fluid"></a>
                                </div>
                        
                                <!-- <div class="single_product_select">
                                    <div class="single_product_img col-lg-3">
                                        <a href="#"><img src="<?= $IMAGE_DIR.$data[0]['imgUrl']; ?>" alt="product" class="img-fluid"></a>
                                    </div> 
                                </div>             -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="single_product_text text-center">
                        <h3><?= $data[0]['nameProduct'];?></h3>
                        <span class="single_product_rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                            <a href="#">(Xem 126 đánh giá)</a>
                        </span>
                        <div class="single_product_price">
                            <span class="new-price">$<?= $data[0]['price'];?></span>
                            <span class="discount"> -<?= $data[0]['note'];?>%</span>
                            <span class="old-price">$<?= $data[0]['oldPrice'];?></span>
                        </div>
                        <p>
                            <?= $data[0]['description'];?>
                        </p>
                        <div class="product_color text-lg-left">
                            <p <?php if($data[0]['size']=="") echo 'style="display:none;"';else echo 'style="display:block;"'  ?> >Chọn Size:</p>
                            <div class="choose__size">
                                <?php foreach($data as $data){ if($data['size']!==""){ ?>
                                <a href="?act=productDetail&id=<?=$data['idProduct']?>&idDetail=<?=$data['idProductDetail']?>" class="choose__size-item"><?= $data['size']?>
                                    <img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/attribute.svg" alt="active">
                                </a>
                                <?php }}?>
                            </div>
                        </div>
                        <div class="card_area">
                                <div class="product_count_area">
                                    <p>Số lượng</p>
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                 
                                </div>
                                <div class="add_to_cart">
                                    <a class="btn" href="cart.php?id=<?=$data['idProductDetail']?>">Thêm vào giỏ</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content">
                    <div class="col-lg-10">
                        <div class="product__feedback">
                            <h6>Phản hồi khách hàng</h6>
                            <div class="comment-feedback">
                                <div class="comment-feedback__avatar">
                                    <div class="comment-feedback__avatar-thumb"><span>DK</span></div>
                                    <div class="comment-feedback__avatar-info">
                                        <div class="comment-feedback__avatar-wrap">
                                            <span class="name">Bạch Đường Kính</span>
                                            <span class="bought">
                                                <div class="bought-icon"></div>
                                                Mua tại Mr.Simple
                                            </span>
                                        </div>
                                        <div class="comment-feedback__avatar-date">
                                            <span class="date">Phản hồi vào Chủ nhật 30/07/2021</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-feedback__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                </div>
                                <span class="comment-feedback__title">Very good</span>
                                <p class="comment-feedback__title">
                                   Sản phẩm này đẹp và chất liệu vải tốt.
                                </p>
                            </div>
                            <!--1 feedback-->
                            <div class="comment-feedback">
                                <div class="comment-feedback__avatar">
                                    <div class="comment-feedback__avatar-thumb"><span>XN</span></div>
                                    <div class="comment-feedback__avatar-info">
                                        <div class="comment-feedback__avatar-wrap">
                                            <span class="name">Lê Xuân Ninh</span>
                                            <span class="bought">
                                                <div class="bought-icon"></div>
                                                Mua tại Mr Simple
                                            </span>
                                        </div>
                                        <div class="comment-feedback__avatar-date">
                                            <span class="date">Phản hồi vào Thứ 5 ngày 25/07/2021</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-feedback__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                </div>
                                <span class="comment-feedback__title">Very good</span>
                                <p class="comment-feedback__title">
                                    Quá đẹp. Xứng đáng 5 sao.
                                </p>
                            </div>
                            <!--1 feedback-->
                            <div class="comment-feedback">
                                <div class="comment-feedback__avatar">
                                    <div class="comment-feedback__avatar-thumb"><span>DK</span></div>
                                    <div class="comment-feedback__avatar-info">
                                        <div class="comment-feedback__avatar-wrap">
                                            <span class="name">Đăng Khoa</span>
                                            <span class="bought">
                                                <div class="bought-icon"></div>
                                                Mua tại Mr Simple
                                            </span>
                                        </div>
                                        <div class="comment-feedback__avatar-date">
                                            <span class="date">Phản hồi vào Thứ Bảy 15/08/2021</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-feedback__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                </div>
                                <span class="comment-feedback__title">Very good</span>
                                <p class="comment-feedback__title">
                                    This jacket is very very beautiful and Good fabric material
                                </p>
                            </div>
                            <!--1 feedback-->
                            <div class="comment-feedback">
                                <div class="comment-feedback__avatar">
                                    <div class="comment-feedback__avatar-thumb"><span>TH</span></div>
                                    <div class="comment-feedback__avatar-info">
                                        <div class="comment-feedback__avatar-wrap">
                                            <span class="name">Nguyễn Trà Thanh Huy</span>
                                            <span class="bought">
                                                <div class="bought-icon"></div>
                                                Mua tại Mr Simple
                                            </span>
                                        </div>
                                        <div class="comment-feedback__avatar-date">
                                            <span class="date">Phản hồi vào Thứ ba 24/11/2020</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-feedback__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                </div>
                                <span class="comment-feedback__title">Very good</span>
                                <p class="comment-feedback__title">
                                    This jacket is very very beautiful and Good fabric material
                                </p>
                            </div>
                            <!--1 feedback-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->
        <!-- subscribe part here -->
        <section class="subscribe_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe_part_content">
                            <h2>Nhận khuyến mãi & Cập nhật</h2>
                            <p>Hãy theo dõi Mr.Simple để cập nhật những thông tin mới nhất về khuyến mãi.</p>
                            <div class="subscribe_form">
                                <input type="email" placeholder="Nhập Email của bạn.">
                                <a href="#" class="btn_1">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe part end -->
    </main>