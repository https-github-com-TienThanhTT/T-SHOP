<?php 
    class chitiet extends control{
       function trangchu()
        {   
            $DB=$this->model("DB_connect");
            $DB->connect('localhost','root','','t_shop');
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $arr=$DB->get_list("SELECT*FROM product_gaming WHERE idLT_gaming='$id'");
                $arr1=$DB->get_list("SELECT b.name_hang
                FROM hanglaptop b JOIN product_gaming a
               WHERE a.id_hang=b.id_hang AND a.idLT_gaming='$id'");
                
            }
           
            $DB=$this->view("chitiet",["page"=>"chitietsanpham",
                                        "arr"=>$arr,
                                        "arr1"=>$arr1
                                        ]);
            
        }  
    }
?>
