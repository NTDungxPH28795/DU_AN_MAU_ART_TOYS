<div class="row mb">
    <div class="box-left mr">
        <div class="row mb">
            
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formuser">
                <form action="index.php?act=fogot_pass" method="post">
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Gửi" name="sent">
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