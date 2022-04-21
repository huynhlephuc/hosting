<?php

// La thang xu li thanh dia chi URL



class App{

    protected $controller="Home";
    protected $action="hello";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();
 
        // Xu Ly Controller
        if( file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            //Huy di de xuong duoi mang k con cai controller
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";

        $this->controller = new $this->controller;

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            //Huy di de xuong duoi mang k con cai Action
            //De ngoai dong if vi luc nao cung phai bo cai Action
            unset($arr[1]);
        }

        // Params
        $this->params = $arr?array_values($arr):[];

        //Tao bien co kieu la Controller va chay ham co ten la action va tham so truyen vao la params
        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            //Ham cat nhung ki tu sau dau /
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}
?>