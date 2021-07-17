
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Đăng nhập</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Bạn mới đến cửa hàng của chúng tôi?</h2>
                                <p>Để có thể mua hàng bạn cần tạo cho mình một tài khoản.</p>
                                <a href="?act=create_account" class="btn-header">Tạo tài khoản</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                            <?php
                                if(strlen($MESSAGE)){
                                    echo "<h5 style='color:red'>$MESSAGE</h5>";
                                }
                            ?>
                                <h3>Mr.Simple xin chào quý khách! <br>
                                    Mời quý khách đăng nhập tài khoản</h3>
                                <form class="row contact_form" action="?act=login" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="username" value=""
                                            placeholder="Tên đăng nhập">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Mật khẩu">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="selector">
                                            <label for="f-option">Ghi nhớ tài khoản của tôi</label>
                                        </div>
                                        <button type="submit" value="submit" class="submit_btn" name="login">
                                            Đăng nhập
                                        </button>
                                        <a class="lost_pass" href="?act=forgot_password">Quên mật khẩu?</a>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>
   