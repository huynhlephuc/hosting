<?php

// http://localhost/live/Home/Show/1/2

class Product extends Controller{

    // Must have SayHi()
    function hello(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();

    }

    function getProduct(){
      echo  "day la controller getProduct";

    }

    function detailProduct($id){        
        // Call Models
        $a = "day la gia tri cua bien id: ";
        echo $a.' '.$id;

        // call model Product Model:
        $callproModel = $this->Model("ProductModel");
        $varoggetproduct = $callproModel->getDetailProduct($id);

        // call view ListProduct Model

        $calllistviewmodel = $this->view("ListProduct", [
            "page" => "contact",
            "Number" => $varoggetproduct,
            
        ]);

      

        
    }
}
?>