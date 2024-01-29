<div class="row">
            <div class="row header">
                <h3>DANH SÁCH TÀI KHOẢN</h3>
            </div>
            <div class="row frmcontent">
                <div class="row mb10">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>NỘI DUNG BÌNH LUẬN</th>
                                <th>NGƯỜI DÙNG</th>
                                <th>SẢN PHẨM</th>
                                <th>NGÀY</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($list_comment as $comment) {
                                    extract($comment);
                                    $remove_comment="index.php?act=remove_comment&id=".$id;

                                    echo '
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$content.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$idpro.'</td>
                                        <td>'.$date.'</td>
                                        <td>
                                            <a href="'.$update_comment.'">
                                                <input type="button" value="Sửa">  
                                            </a>
                                            <a href="'.$remove_comment.'">
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