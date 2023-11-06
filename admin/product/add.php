<div class="row">
    <div class="row frm">
        <div class="row header">
            <h3>Thêm mới sản phẩm</h3>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=add-pro" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Danh mục <br>
                    <select name="idcat">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listcat as $category) {
                                extract($category);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp">
                </div>
                <div class="row mb10">
                    Giá sản phẩm <br>
                    <input type="text" name="giasp">
                </div>
                <div class="row mb10">
                    Hình ảnh <br>
                    <input type="file" name="hinh" >
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" cols="30" rows="10"></textarea>
                </div>
                <div class="row mb10">
                    <input type="submit" name="add" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=list-pro">
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