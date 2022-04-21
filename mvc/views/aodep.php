<!DOCTYPE html>
<html lang="en"></html> 
<html>
    <header>
        <style>
            #header, #footer {background-color: purple}
            div{padding: 25px}
        </style>

    </header>
    <body>
        <!-- <h2>Ao Dep</h2>
        Dong nay de view hung nhung data do model do ra
        <?php
        echo $data["Number"];
        echo $data["ChatLuong"];
        ?> -->
        <div id="header"></div>
        <div id="content"></div>
            <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
        <div id="footer"></div>
    </body>
    

</html>