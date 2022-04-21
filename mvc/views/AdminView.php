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
        echo $data["Mau"];
        echo $data["ChatLuong"];
        ?> 
        <div id="header"></div>
        <div id="content"></div>
        <?php
        echo $data["Mau"];
        echo $data["Page"];
        ?>
            <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?> -->


        <!-- Thêm form -->
            <form action="./Admin/dataset" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email"
                    -00
                     name= "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name= "password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
            </form>


        <?php if(isset($data["result"]) ) { ?>
            <h3><?php
            if($data["result"] == 1 ){
                echo "Dang ky thanh cong";
            }else{
                echo "Dang ky that bai";
            }
            ?></h3>

        <?php } ?>
6
        
    </body>
    

</html>