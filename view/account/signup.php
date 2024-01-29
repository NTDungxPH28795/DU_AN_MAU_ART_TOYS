<div class="row mb">
    <div class="box-left mr">
        <div class="row mb">
            
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formuser">
                <form action="index.php?act=signup" method="post">
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="username">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng ký" name="signup">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao" style="color: red;">
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