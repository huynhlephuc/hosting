<?php
//Ten class nen dat chung voi ten file 
class TestController extends Controller{
    function SayHi() {
        $phuc = $this->model("TestModel");
        echo $phuc->GetTest();
    }
    function Show($n, $m) {
        $phuc1 = $this->model("TestModel");
        $hieu = $phuc1->GetTest2($n, $m);
        echo $hieu;
    }
}
?>