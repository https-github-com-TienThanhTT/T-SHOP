<?php 
    class app{
        protected $controller="home";
        protected $action="trangchu";
        protected $param=[];
        function __construct()
        {
            $arr=$this->URLprocess();
                if(isset($arr[0])){
                if(file_exists("./Mvc/Controller/".$arr[0].".php")){
                    $this->controller=$arr[0];
                   unset($arr[0]);
                }
            }

            require_once"./Mvc/Controller/".$this->controller.".php";
            $this->controller= new $this->controller;
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){
                    $this->action=$arr[1];
                }
                unset($arr[1]);
               
            }
            $this->param=$arr?array_values($arr):[];
         json_encode($this->controller);
           call_user_func_array([$this->controller,$this->action],$this->param);
            
        }
        function URLprocess(){
            if(isset($_GET['url'])){
                return explode('/',trim($_GET['url']));
            }
        }
        
    }
?>