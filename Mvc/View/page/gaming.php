<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            <?php 
                  foreach($data['arr'] as $key =>$value){?>
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
                        <div class="text-center my-4 force-to-bottom "> <a href="http://localhost:8080/T-Shop/chitiet/&sanpham=<?php echo  $value['nameLT_gaming'] ;?>&id=<?php echo $value['idLT_gaming'];?>" class="btn btn-warning">Check offer</a> 
                        </div>
                      </div>
                    </div>
                  </div>
                 
                  <?php } ?>
                  </div> 
                  
                <div style="margin-top:70px"class="page">
                  <?php 
                    for($i=1;$i<=$data['tong'];$i++){
                      echo '<a href="LTgaming&page='.$i.'"'.'>'.$i.'</a>';
                    };
                  ?> 
                
                
                
                