<?php
    if(is_array($cat)){
        extract($cat);
    }
?>
<div class="row">
    <div class="row frm">
        <div class="row header">
            <h3>Cập nhật loại hàng hóa</h3>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=update-cat" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai" value="<?=$name?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="update" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=list-cat">
                        <input type="button" value="DANH SÁCH">
                    </a>
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>
    </div>
    </div>
</div>