<?php
class AdminModel extends DB{
    public function GetModel(){
        return "Admin Model";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien() {
        $sqr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $sqr);
    }


    
    public function InsertNewEmail($email, $password) {
        $qr = "Insert Into tbl_email values(null, '$email','$password')";
        $result = false;
        if ( mysqli_query($this->con, $qr) ) {
            $result = true;
        }
        return json_decode( $result );
        //return $result;
    }
    

}
?>