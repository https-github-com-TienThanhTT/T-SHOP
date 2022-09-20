<?php 
    class home extends control{
       function trangchu()
        {   
            $DB=$this->model("DB_connect");
            $DB->connect('localhost','root','','t_shop');
            $arr=$DB->get_list("SELECT*FROM product_gaming WHERE noibat=1");
            $arr1=$DB->get_list("SELECT*FROM product_pc WHERE noibat=1");
            $DB=$this->view("home",["arr"=>$arr,"arr1"=>$arr1]);
            
        }  
    }
?>
