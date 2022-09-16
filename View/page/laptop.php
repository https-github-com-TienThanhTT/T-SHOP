 
  <!-- $DB->connect('localhost','root','','t_shop');
   $showSP=4;
  if(isset($_GET['page'])){
   $page=$_GET['page'];
   settype($page,"int");
  }else{
    $page=1;
  }
  $start=($page - 1)*$showSP;
  $arr=$DB->get_list("SELECT*FROM product_gaming ORDER BY price ASC LIMIT $start,$showSP");  -->

            

<div class="information-card">
            <h1>Nhu cầu khách hàng</h1>
            <div class="information-card-box">
                <ul class="list-info">
                    <li class="item-info box-1">
                      <a href="#./laptop/design.php">
                        <div class="item-box">
                            <img src="./Public/img/img-product-info/category_item_1.webp">
                            <h1>Thiết kế đồ họa</h1>
                        </div>
                      </a>
                    </li>
                    <li class="item-info box-2">
                      <a href="#./laptop/gaming.php">
                        <div class="item-box">
                            <img src="./Public/img/img-product-info/game-gearing.webp">
                            <h1>Gaming</h1>
                        </div>
                      </a>
                    </li>
                    <li class="item-info box-3">
                        <div class="item-box">
                            <img src="./Public/img/img-product-info/category_item_3.webp">
                            <h1>Học tập</h1>
                        </div>
                    </li>
                    <li class="item-info box-4">
                        <div class="item-box">
                            <img src="./Public/img/img-product-info/category_item_4.webp">
                            <h1>Văn phòng</h1>
                        </div>
                    </li>
                </ul>
          </div>
</div>
<div class="container">
  <div class="container_Parent">
          <div class="content-left">
                <h1>Danh mục sản phẩm</h1>
                <div class="content-left-parent">
                  <div class="PC">
                    <h1>PC</h1>
                                <div class="Product-PC">
                                    <span>Gaming</span>
                                </div>
                                <div class="Product-PC">
                                    <span>Vostro</span>
                                </div>
                                <div class="Product-PC">
                                    <span>XPS</span>
                                </div>
                                <div class="Product-PC">
                                    <span>Inspiron</span>
                                </div>
                  </div>
                  <div class="LAPTOP">
                    <h1>LAPTOP</h1>
                      <div class="Product-LAPTOP">
                        <span>DELL</span>
                      </div>
                      <div class="Product-LAPTOP">
                        <span>ASUS</span>
                      </div>
                      <div class="Product-LAPTOP">
                        <span>HP</span>
                      </div>
                      <div class="Product-LAPTOP">
                        <span>MSI</span>
                      </div>
                      <div class="Product-LAPTOP">
                        <span>MSI</span>
                      </div>
                      <div class="Product-LAPTOP">
                        <span>Mac</span>
                      </div>
                  </div>
                  <div class="PHUKIEN">
                    <h1>Phụ kiện</h1>
                      <div class="Product-PHUKIEN">
                        <span>Chuột</span>
                      </div>
                      <div class="Product-PHUKIEN">
                        <span>Bàn phím</span>
                      </div>
                      <div class="Product-PHUKIEN">
                        <span>Màn hình</span>
                      </div>
                      <div class="Product-PHUKIEN">
                        <span>Tai nghe</span>
                      </div>
                  </div>
                </div>
          </div>
          <div class="content">
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
                
                
          </div>
  </div>

</div>

                 