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
                                        
                                            
                                    <p class="review-no">H??ng s???n xu???t: <strong><?php echo $value1['name_hang'];?></strong> </p>
                                    
                                    <?php }?>
                                   <p class="review-no">B???o h??nh: <strong>12 th??ng</strong></p>
                                   <p class="review-no">T??nh tr???ng:<strong> C??n h??ng</strong></p>
                                </div>
                                
                                <!-- <small class="text-muted">Gi?? c??: <s><span>10,990,000.00 vn??</span></s></small> -->
                                <h4 class="price">Gi?? hi???n t???i: <span><?php echo $value['price'];?></span></h4>
                                <p class="vote"><strong>100%</strong> h??ng <strong>Ch???t l?????ng</strong>, ?????m b???o
                                    <strong>Uy
                                        t??n</strong>!</p>
                                
        
                                <div class="form-group">
                                    <label for="soluong">S??? l?????ng ?????t mua:</label>
                                    <input type="number" class="form-control" id="soluong" name="soluong">
                                </div>
                                <div class="action">
                                    <a class="add-to-cart btn btn-default" id="btnThemVaoGioHang">Th??m v??o gi??? h??ng</a>
                                    <a class="like btn btn-default" href="#"><span class="fa fa-heart"></span></a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                    <h3>Th??ng tin chi ti???t v??? S???n ph???m</h3>
                    <div class="row">
                        <div class="col">
                            Vi x??? l?? Dual-core 1 Cortex-A9 t???c ????? 1GHz
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>;