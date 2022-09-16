<?php 
    include'./View/include/header.php';
    include'./View/include/slider.php';
    require_once('./Model/DB_connect.php');
    $DB=new DB_driver();
    $DB->connect('localhost','root','','t_shop');
?>
<?php 
if(isset($_GET['option'])){
    $option=$_GET['option'];
}
else{
    $option='home';
}
switch ($option) {
    case 'home':
       require'./Site/page/home.php';
        break;
    case 'laptop':
        require'./View/page/laptop.php';
        break;
    default:
        # code...
        break;
}

?>
<?php include'./View/include/footer.php'; ?>