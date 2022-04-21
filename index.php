<!-- Lấy những gì sau thanh địa chỉ localhost/tmdt/index.php?url=.......-->
<?php
session_start();
require_once "./mvc/bridge.php";
$myAPP = new App();


?>

<!-- Trang index gọi đến trang bridge bà bridge gọi đến trang App-->