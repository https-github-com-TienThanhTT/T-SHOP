<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                <div class="col">
                  <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">15.000.000 VND</span>  </div>
                      <h5 class="card-title">máy 1</h5>
                      <div class="text-center my-4 force-to-bottom "> <a href="#" class="btn btn-warning">Check offer</a> </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">10.999.000 VND</span>  </div>
                      <h5 class="card-title">máy 2</h5>
                      <div class="text-center my-4" > <a href="#" class="btn btn-warning">Check offer</a> </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">11.500.999 VND</span>  </div>
                      <h5 class="card-title">máy 3</h5>
                      <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">12.000.000 VND</span>  </div>
                      <h5 class="card-title">máy 4</h5>
                      <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                    </div>
                  </div>
                </div>
</div>
<div class="baner-laptop">
<img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/1/637975909995284934_F-C1_1200x300-3.png" alt="Dell Laptop C1 Dell" title="Dell Laptop C1 Dell" style="height: 150px;">
</div>
<div class="dell">
  <h2 style="color:green">Dell chính hãng </h2>
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
  <?php 
  foreach($data['arr'] as $key => $value) {
  ?>
                <div class="col">
                  <div class="card h-100 shadow-sm"> <img src="<?php echo $value['tmp'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success"><?php echo $value['price'];?></span>  </div>
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
                      <div class="text-center my-4 force-to-bottom "> <a href="#" class="btn btn-warning">Check offer</a> </div>
                    </div>
                  </div>
                </div>
  <?php }?>
  </div>
</div> 
<div class="baner-laptop"> 
  <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/1/637975909991691304_F-C1_1200x300-2.png" alt="Asus Laptop C1" title="Asus Laptop C1" style="height: 150px;">
</div>
<div class="asus">
  <h2>Asus chính hãng</h2>
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
  <?php 
  foreach($data['ar'] as $key => $value) {
  ?>
                <div class="col">
                  <div class="card h-100 shadow-sm"> <img src="<?php echo $value['tmp'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success"><?php echo $value['price'];?></span>  </div>
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
  <?php }?>
  </div>
</div>