<?php
    if(is_array($pro)){
        extract($pro);
    //    echo "<pre>";
    //    print_r($pro);
    }
    $imgpath="../upload/".$img;
    if (is_file($imgpath)){
        $hinh="<img src='".$imgpath."' height='80'";
    }else{
        $hinh="No photo";
    }
?>
<div class="row">
    <div class="row frm">
        <div class="row header">
            <h3>Cập nhật loại hàng hóa</h3>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=update-pro" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <select name="idcat">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listcat as $category) {
                                extract($category);
                                if($idcat==$id) $s="selected"; else $s="";
                                echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value="<?=$pro['name'] ?>">
                </div>
                <div class="row mb10">
                    Giá sản phẩm <br>
                    <input type="text" name="giasp" value="<?=$price ?>">
                </div>
                <div class="row mb10">
                    Hình ảnh <br>
                    <input type="file" name="hinh" >
                    <?=$hinh?>
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" cols="30" rows="10"><?=$description ?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$pro['id']?>">
                    <input type="submit" name="add" value="CẬP NHẬT">
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