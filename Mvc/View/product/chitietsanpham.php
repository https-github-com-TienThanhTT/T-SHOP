<main role="main">
       <?php foreach($data['arr'] as $key=>$value){ ?>
        <div class="container mt-4">
            <div class="card">
                <div class="container-fliud">
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                        action="/php/twig/frontend/giohang/themvaogiohang">
                        <input type="hidden" name="sp_ma" id="sp_ma" value="5">
                        <input type="hidden" name="sp_ten" id="sp_ten" value="Samsung Galaxy Tab 10.1 3G 16G">
                        <input type="hidden" name="sp_gia" id="sp_gia" value="10990000.00">
                        <input type="hidden" name="hinhdaidien" id="hinhdaidien" value="samsung-galaxy-tab-10.jpg">

                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane" id="pic-1">
                                        <img src="<?php echo $value['tmp'];?>" width="100%" >
                                    </div>
                                    <div class="tab-pane" id="pic-1">
                                    <img src="<?php echo $value['tmp'];?>" width="100%" >
                                    </div>
                                    <div class="tab-pane" id="pic-2">
                                    <img src="<?php echo $value['tmp'];?>" width="100%" >
                                    </div>
                                    <div class="tab-pane active" id="pic-3">
                                    <img src="<?php echo $value['tmp'];?>" width="100%" >
                                    </div>
                                </div>
                                    
                                
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                        <img src="<?php echo $value['tmp'];?>" width="100%" >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title"><?php echo $value['nameLT_gaming'];?></h3>
                                <div class="rating">
                                    <?php foreach($data['arr1'] as $key1=>$value1){?>
                                        
                                            
                                    <p class="review-no">Hãng sản xuất: <strong><?php echo $value1['name_hang'];?></strong> </p>
                                    
                                    <?php }?>
                                   <p class="review-no">Bảo hành: <strong>12 tháng</strong></p>
                                   <p class="review-no">Tình trạng:<strong> Còn hàng</strong></p>
                                </div>
                                
                                <!-- <small class="text-muted">Giá cũ: <s><span>10,990,000.00 vnđ</span></s></small> -->
                                <h4 class="price">Giá hiện tại: <span><?php echo $value['price'];?></span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy
                                        tín</strong>!</p>
                                
        
                                <div class="form-group">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="number" class="form-control" id="soluong" name="soluong">
                                </div>
                                <div class="action">
                                    <a class="add-to-cart btn btn-default" id="btnThemVaoGioHang">Thêm vào giỏ hàng</a>
                                    <a class="like btn btn-default" href="#"><span class="fa fa-heart"></span></a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                    <h3>Thông tin chi tiết về Sản phẩm</h3>
                    <div class="row">
                        <div class="col">
                            Vi xử lý Dual-core 1 Cortex-A9 tốc độ 1GHz
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>;