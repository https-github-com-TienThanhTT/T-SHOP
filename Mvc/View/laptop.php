<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="./Public/css/style.css">
    <link rel="stylesheet" href="../Public/css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/> 
    <script src="https://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
<div class="container">
    <?php 
        include'include/header.php';
        include'include/slider.php';
        include'include/sidebar.php';
    ?>
    <div class="container_Parent">  
        <div class="content-left">
        <?php
        include'include/sidebar-left.php';
        ?>
        </div>
        <div class="content">
            <div class="noibat">Sản phẩm nổi bật</div>
                     
             <?php require_once'./Mvc/View/page/'.$data['page'].'.php';?>
            <div class="dellnoibat">

            </div>
        </div>
    </div>
</div>
</body>
</html>
                