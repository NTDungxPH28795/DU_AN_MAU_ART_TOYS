<div class="row">
            <div class="row header">
                <h3>Danh sách loại hàng hóa</h3>
            </div>
            <div class="row frmcontent">
                <div class="row mb10">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($listcat as $category) {
                                    extract($category);
                                    $editcat="index.php?act=edit-cat&id=".$id;
                                    $removecat="index.php?act=remove-cat&id=".$id;

                                    echo '
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>
                                            <a href="'.$editcat.'">
                                                <input type="button" value="Sửa">  
                                            </a>
                                            <a href="'.$removecat.'">
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
                    <a href="index.php?act=add-cat">
                        <input type="button" value="NHẬP THÊM">
                    </a>
                </div>
            </div>
        </div>