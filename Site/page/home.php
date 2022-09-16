
<?php 
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
else{
    $action='home';
}
switch ($action) {
    case 'home':
       require_once'./View/page/home.php';
        break;
   
    default:
        # code...
        break;
}

?>