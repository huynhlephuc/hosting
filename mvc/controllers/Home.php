<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function hello(){

        // call model Product
        $th1 = $this->model("ProductModel");
        $varofgetnew = $th1->getProduct();

        // call view model

        $this->view("MenuBar", [
            
        ]);
        $this->view("ProductList", [
            
        ]);
        


    }

    function Show($var){        
        // Call Models newsModel
       
        $th1 = $this->model("NewsModel");
        $varofgetnew = $th1->getNews();

        // call PRODUCT model:

        $callproModel = $this->model("ProductModel");
        $varofgetdetail =  $callproModel->getDetailProduct($var);

        //call view : 
        $calllistviewmodel = $this->view("ListNew", [
            "page" => "contact",
            "Number" => $varofgetnew,
            "ChatLuong" => $varofgetdetail,
        ]);

      
        
    }

    function news() {
        $th1 = $this->model("NewsModel");
        echo $th1->getNews();
    }
}
?>