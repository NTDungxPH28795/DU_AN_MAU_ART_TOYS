<div class="row">
            <div class="row header mb">
                <h3>Danh sách loại hàng hóa</h3>
            </div>
            <form action="index.php?act=list-pro" method="post">
                <input type="text" name="key">
                <select name="idcat">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listcat as $category) {
                            extract($category);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="listok" value="GO">
            </form>
            <div class="row frmcontent">
                <div class="row mb10">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>HÌNH</th>
                                <th>GÍA</th>
                                <th>LƯỢT XEM</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                foreach ($listpro as $product) {
                                    extract($product);
                                    $editpro="index.php?act=edit-pro&id=".$id;
                                    $removepro="index.php?act=remove-pro&id=".$id;
                                    $imgpath="../upload/".$img;
                                    if (is_file($imgpath)){
                                        $hinh="<img src='".$imgpath."' height='80'";
                                    }else{
                                        $hinh="No photo";
                                    }

                                    echo '
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$view.'</td>
                                        <td>
                                            <a href="'.$editpro.'">
                                                <input type="button" value="Sửa">  
                                            </a>
                                            <a href="'.$removepro.'">
                                                <input type="submit" value="Xóa">
                                            </a>
                                        </td>
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="CHỌN TẤT CẢ">
                    <input type="button" value="BỎ CHỌN TÂT CẢ">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                    <a href="index.php?act=add-pro">
                        <input type="button" value="NHẬP THÊM">
                    </a>
                </div>
            </div>
        </div>