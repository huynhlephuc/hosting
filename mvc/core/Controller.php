<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        //Khoi tao/tra ve mot doi tuong model
        return new $model;
    }

    //Data la bien de hien thi du lieu do ve tren view
    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    

}
?>