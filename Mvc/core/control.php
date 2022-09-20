<?php 
    class control{
        public function model($model){
            require_once'./Mvc/Model/'.$model.'.php';
            return new $model;
        }
        public function view($view,$data=[]){
            require_once'./Mvc/View/'.$view.'.php';
        }
    }
?>