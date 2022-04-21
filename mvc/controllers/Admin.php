<?php

// http://localhost/live/Home/Show/1/2

class Admin extends Controller{

    // Must have SayHi()
    function hello(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();

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

    function showdata() {
        $calldata = $this->model("AdminModel");
        $data = $calldata->InsertNewEmail();

        // call view function

        $callview = $this->view("AdminView", [

        ]);


    }
}
?>