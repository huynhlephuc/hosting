<?php
class ProductModel extends DB{
    

    public function getDetailProduct($id){
        echo " va day la model ProductModel phuong thuc getDetailProduct:   ", $id;
    }

    public function getProduct() {
        echo "day la phuong thuc get san pham";

        $qr = "SELECT * FROM sanpham";
        $result = false;
        if ( mysqli_query($this->con, $qr) ) {
            $result = true;
        }
        return json_decode( $result );
    }

   

}
?>