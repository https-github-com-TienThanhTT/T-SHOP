<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="./Public/CSS/style.css"> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/> 
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function()
        {
            /*  var page=$("#page").val(); */
            $("li").on("click","a",function()
            {
                var hrf=$(this).attr("href");
                var ld=hrf.slice(1,hrf.length);
                $(".content").load(ld);  
                $.get("gaming.php",{page},function(dara){
                  $(".content").html(dara);
                });
            });
          
        });
    </script>
    <script>
        $(document).ready(function()
        {
            /*  var page=$("#page").val(); */
            $("div.page").click(function()
            {
                  
                $.get("gaming.php",{page:2},function(dara){
                  $(".content").html(dara);
                });
            });
          
        });
    </script>
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
                    <a class="navbar-brand" href="index.php">T-SHOP</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">PC</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="?option=laptop">Laptop</a>
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
  
</body>
</html>