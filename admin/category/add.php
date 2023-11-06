<div class="row">
    <div class="row frm">
        <div class="row header">
            <h3>Thêm mới loại hàng hóa</h3>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=add-cat" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb10">
                    <input type="submit" name="add" value="THÊM MỚI">
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