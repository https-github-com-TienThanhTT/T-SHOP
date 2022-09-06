<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="./CSS/style.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/> 
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <i class="fas fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="#">T-SHOP</a>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">PC</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link ">Laptop</a>
                      </li>
                    </ul>
                    <form class="d-flex input-group w-auto">
                      <input type="search" class="form-control" placeholder="Tìm kiếm" aria-label="Search"/>
                      <button class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                        Search
                      </button>
                    </form>
    
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-link px-3 me-2">
                          Login
                        </button>
                        <button type="button" class="btn btn-primary me-3">
                          Sign up for free
                        </button>
                        <ul class="navbar-nav">
                            <!-- Badge -->
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span class="badge badge-pill bg-danger">1</span>
                                <span><i class="fas fa-shopping-cart"></i></span>
                              </a>
                            </li>
                          </ul>
                      </div>
                  </div>
                </div>
              </nav>
      </div>

        <div class="slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active"> <img src="./img/pic1.jpg" class="d-block w-100" alt="Wild Landscape" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item"> <img src="./img/pic2.png" class="d-block w-100" alt="Camera" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item"> <img src="./img/pic3.png" class="d-block w-100" alt="Exotic Fruits" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
            </div>
        </div>
        
         <div class="information-card">
            <h1>Nhu cầu khách hàng</h1>
            <div class="information-card-box">
                <ul class="list-info">
                    <li class="item-info box-1">
                        <div class="item-box">
                            <img src="./img-product-info/category_item_1.webp">
                            <h1>Thiết kế đồ họa</h1>
                        </div>
                    </li>
                    <li class="item-info box-2">
                        <div class="item-box">
                            <img src="./img-product-info/game-gearing.webp">
                            <h1>Gaming</h1>
                        </div>
                    </li>
                    <li class="item-info box-3">
                        <div class="item-box">
                            <img src="./img-product-info/category_item_3.webp">
                            <h1>Học tập</h1>
                        </div>
                    </li>
                    <li class="item-info box-4">
                        <div class="item-box">
                            <img src="./img-product-info/category_item_4.webp">
                            <h1>Văn phòng</h1>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
         
         <div class="container_Parent">
             <div class="content-left">
                    <div class="content-left-Parent">
                        <h1>Danh mục sản phẩm</h1>
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
                                <span>Gaming</span>
                            </div>
                            <div class="Product-LAPTOP">
                                <span>Vostro</span>
                            </div>
                            <div class="Product-LAPTOP">
                                <span>XPS</span>
                            </div>
                            <div class="Product-LAPTOP">
                                <span>Inspiron</span>
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
        
        <div class="footer">
          <footer id="footer" class="footer-1">
            <div class="main-footer widgets-dark typo-light">
            <div class="container">
            <div class="row">
            
              <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget subscribe no-box">
            <h5 class="widget-title">T-SHOP<span></span></h5>
            <p>Chuyên bán máy tính, laptop </p>
            </div>
            </div>
            
              
            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
            <h5 class="widget-title">Quick Links<span></span></h5>
            <ul class="thumbnail-widget">
            <li>
            <div class="thumb-content"><a href="#.">&nbsp;Get Started</a></div> 
            </li>
            <li>
            <div class="thumb-content"><a href="#.">&nbsp;Top Leaders</a></div> 
            </li>
            <li>
            </ul>
            </div>
            </div>
            
              
            
                  <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
            <h5 class="widget-title">Follow up<span></span></h5>
                        <a href="#"> <i class="fa fa-facebook"> </i> </a>
                        <a href="#"> <i class="fa fa-facebook"> </i> </a>
                        <a href="#"> <i class="fa fa-twitter"> </i> </a>
                        <a href="#"> <i class="fa fa-youtube"> </i> </a>
            </div>
            </div>
            <br>
              <br>
            
            
            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
            <h5 class="widget-title">Contact Us<span></span></h5>
                        <p>Kết nối với chúng tôi</p>
              <div class="emailfield">
            <input type="text" name="email" value="Email">
            <input name="uri" type="hidden" value="arabiantheme">
            <input name="loc" type="hidden" value="en_US">
            <input class="submitbutton ripplelink" type="submit" value="Subscribe">
            </form>  
            </div>
            </div>
            
            </div>
            </div>
            </div>
              
            <div class="footer-copyright">
            <div class="container">
            <div class="row">
            <div class="col-md-12 text-center">
            <p>Copyright T-SHOP</p>
            </div>
            </div>
            </div>
            </div>
            </footer>
        </div>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
