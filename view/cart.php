
  <main>
  <?php
 
  $cart=(isset($_SESSION['cart']))? $_SESSION['cart'] : [];
  // var_dump($cart);
  // var_dump($_SESSION['username']);
  // session_destroy();
    // die(); 
  
  ?>

      <!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Giỏ hàng</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <form action="cart.php">
      <section class="cart_area section_padding">
        <div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">ID</th>
                    <th scope="col">Tên SP</th>
                    <th scope="col">Size</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $total_price = 0; ?>
                <?php foreach($cart as $k =>$v):
                 $total_price += ((float)$v['price'] * (int)$v['quantity']);            
                //  $total_price += ($v['price'] * $v['quantity']);
                ?>
                  <tr>
                    <td>
                      <div class="media">
                        <div class="d-flex">
                          <img src="../images/<?=$v['img']?>" alt="" />
                        </div>
                        <div class="media-body">
                          <p></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5><?=$k?></h5>
                    </td>
                    <td>
                      <h5><?=$v['color']?></h5>
                    </td>
                    <td>
                      <h5><?=$v['size']?></h5>
                    </td>
                    <td>
                      <h5>$<?=$v['price']?>.00</h5>
                    </td>                    
                    <td>
                    
                      <input type="hidden" name="action" value="update">
                      <input type="hidden" name="id" value="<?=$k?>">
                      <div class="product_count">
                        <!-- <span class="input-number-decrement"> <i class="ti-minus"></i></span> -->
                        <input name ="quantity" class="input-number" type="number" value="<?=$v['quantity']?>" min="0" max="10">
                        <!-- <span class="input-number-increment"> <i class="ti-plus"></i></span> -->
                      </div>
                      </td>                    
                    <td>
                      <h5>$<?=(float)$v['price']*(int)$v['quantity']?>.00</h5>
                    </td>
                    <td>
                    <a style="color:red;font-weight:bold;" href="cart.php?id=<?php echo $v['id'] ?>&action=delete">X</a>
                    </td>
                  </tr>
                 
                  <?php endforeach ?>
                  <tr class="bottom_button">
                    <td>
                    <button type="submit" class="btn"> Cập nhật giỏ hàng</button>
                      <!-- <a class="btn_1" href="">Update Cart</a> -->
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                  </tr>
                  </form>
                  <tr class="shipping_area">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <h3>Tổng tiền thanh toán</h3>
                    </td>
                    <td>
                      <h3>$<?=$total_price?>.00</h3>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
              
                <a class="submit_btn" href="#">Tiếp tục mua sắm</a>
                <a class="submit_btn checkout_btn_1" href="index.php?act=checkout">Tiến hành thanh toán</a>
                <!-- <form action="bill.php" method="post">
                <button name="btn_thanhtoan" type="submit" class="btn_1 checkout_btn_1"> Proceed to checkout</button>
                </form> -->
              </div>
            </div>
          </div>
      </section>
     
      <!--================End Cart Area =================-->
  </main>
