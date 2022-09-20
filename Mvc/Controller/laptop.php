<?php 
    class laptop extends control{
        function trangchu()
        {
            $DB=$this->model("DB_connect");
            $DB->connect('localhost','root','','t_shop');
            $arr=$DB->get_list("SELECT *FROM product_gaming WHERE id_hang=1");
            $ar=$DB->get_list("SELECT *FROM product_gaming WHERE id_hang=3");
            $this->view("laptop",["page"=>"trangchu",
                                    'arr'=>$arr,
                                    'ar'=>$ar
                                ]);
            
        }
        function LTdesign()
        {
            $DB=$this->model("DB_connect");
            $DB->connect('localhost','root','','t_shop');
            $arr=$DB->get_list("SELECT *FROM product_gaming WHERE id_theloai=2");
            $this->view("laptop",["page"=>"design",
                                    "arr"=>$arr
                                ]);
            
        }
        function LTgaming()
        {
            $DB=$this->model("DB_connect");
            $DB->connect('localhost','root','','t_shop');
            $showSP=4;
            $tongSP=($DB->get_row("SELECT nameLT_gaming FROM product_gaming WHERE id_theloai=1"));
            $tongST=ceil($tongSP/$showSP);
            if(isset($_GET['page'])){
             $page=$_GET['page'];
             settype($page,"int");
            }else{
              $page=1;
            }  
            $start=($page - 1)*$showSP;
            $arr=$DB->get_list("SELECT*FROM product_gaming WHERE id_theloai=1 LIMIT $start,$showSP"); 
            $this->view("Laptop",["arr"=>$arr,"tong"=>$tongST,"page"=>"gaming"]); 
        }
     }
?>
