<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "Day la model mac dinh";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien() {
        $sqr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $sqr);
    }

    public function ShowName($a, $b){
        $b = "intro";
        $a = "iphone13";
        $c = $a.' + '.$b;
        return $c;
        
    }
    

}
?>