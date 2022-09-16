
  
  <div class="container">
    <div class="row" style="text-align:center;padding:20px 0px">
      <div class="col">
        <img src="./img/1.png" width="200px"height="200px" style="border-radius:50%">
        <h1>PC</h1>
      </div>

      <div class="col">
        <a href="./laptop.php"><img src="./img/2.jfif"200px" height="200px" style ="border-radius:50%" >
        <h1>LAPTOP</h1></a>
      </div> 
    </div>


    <div class="sp-noibat">
      <h1>Sản phẩm nổi bật</h1>
      <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        <?php
        $arr=$DB->get_list("SELECT * FROM product_gaming WHERE noibat=1 ");
                  foreach($arr as $key =>$value){?>
                  <div class="col">
                    <div class="card h-100 shadow-sm"><?php echo '<img src="'.$value['tmp'].'"'.'class="card-img-top" alt="...">';?>
                      <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success"><?php echo $value['price'];?></span> 
                        </div>
                        <h5 class="card-title"><?php echo $value['nameLT_gaming'];?></h5>
                        <div class="cdt-product__config">
                          <div class="cdt-product__config__param">
                            <span data-title="Màn hình"><i class="icon-screen-size"></i>15.6 inch</span>
                            <span data-title="CPU"><i class="icon-cpu"></i>Core i5</span>
                            <span data-title="RAM"><i class="icon-ram"></i>8 GB</span>
                            <span data-title="Ổ cứng"><i class="icon-hdd-black"></i>SSD 512 GB</span>
                            <span data-title="Đồ họa"><i class="icon-vga"></i>NVIDIA GeForce GTX 1650 4GB</span>
                            <span data-title="Trọng lượng"><i class="icon-weight"></i>2.2 kg</span>
                          </div>
                        </div>
                        <div class="text-center my-4 force-to-bottom "> <a href="#" class="btn btn-warning">Check offer</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <?php
        $arr1=$DB->get_list("SELECT * FROM product_pc WHERE noibat=1 ");
                  foreach($arr1 as $key =>$value){?>
                  <div class="col">
                    <div class="card h-100 shadow-sm"><?php echo '<img src="'.$value['tmp'].'"'.'class="card-img-top" alt="...">';?>
                      <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success"><?php echo $value['price'];?></span> 
                        </div>
                        <h5 class="card-title"><?php echo $value['namePC'];?></h5>
                        <div class="cdt-product__config">
                          <div class="cdt-product__config__param">
                            <span data-title="Màn hình"><i class="icon-screen-size"></i>15.6 inch</span>
                            <span data-title="CPU"><i class="icon-cpu"></i>Core i5</span>
                            <span data-title="RAM"><i class="icon-ram"></i>8 GB</span>
                            <span data-title="Ổ cứng"><i class="icon-hdd-black"></i>SSD 512 GB</span>
                            <span data-title="Đồ họa"><i class="icon-vga"></i>NVIDIA GeForce GTX 1650 4GB</span>
                            <span data-title="Trọng lượng"><i class="icon-weight"></i>2.2 kg</span>
                          </div>
                        </div>
                        <div class="text-center my-4 force-to-bottom "> <a href="#" class="btn btn-warning">Check offer</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
      </div>
    </div>

    <section class="st-service"style="margin-top:2.5rem">
      <div class="box-container">
        <div class="title">
          <h1>Dịch vụ tiện ích</h1>
        </div>
        <ul class="row">
          <div class="col-6 col-md-4">
            <div class="item-img">
              <img src="./img/agri.jpg" alt="Thanh toán bằng thẻ"width="50px" height="50px">
            </div>

            <div class="wrap-text">
              <span class="item-title">
                <b>Thanh toán bằng thẻ online</b>
              </span>
              <p class="item-text">Thanh toán nhanh chóng , tiện lợi</p>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="item-img">
              <img src="./img/viettel.jfif" alt="Thanh toán thẻ cào"width="50px" height="50px">
            </div>

            <div class="wrap-text">
              <span class="item-title">
                <b>Thanh toán thẻ cào</b>
              </span>
              <p class="item-text">Thanh toán nhanh chóng, tiện lợi</p>
            </div>
          </div>
          
          <div class="col-6 col-md-4">
            <div class="item-img">
              <img src="./img/garena.jpg" alt="Thẻ cào Garena" width="50px" height="50px">
            </div>

            <div class="wrap-text">
              <span class="item-title">
                <b>Thẻ cào Garena</b>
              </span>
              <p class="item-text">
                <span>Giảm 2%</span> cho thẻ mệnh giá từ 100.000đ
              </p>
            </div>
          </div>
        </ul>
      </div>
    </section>
  </div>



