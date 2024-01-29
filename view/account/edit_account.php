<div class="row mb">
    <div class="box-left mr">
        <div class="row mb">
            
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formuser">
                <?php
                    if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                        extract($_SESSION['username']);

                    }
                ?>
                <form action="index.php?act=edit_account" method="post">
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="username" value="<?=$username?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Đại chỉ <br>
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Số điện thoại <br>
                        <input type="text" name="phone" value="<?=$phone?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="update">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="box-right">
        <?php
            include "view/boxright.php";
        ?>
    </div>
</div>