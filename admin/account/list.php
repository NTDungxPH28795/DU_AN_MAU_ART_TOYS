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
                                <th>MÃ TÀI KHOẢN</th>
                                <th>TÊN ĐĂNG NHẬP</th>
                                <th>MẬT KHẨU</th>
                                <th>EMAIL</th>
                                <th>ĐẠI CHỈ</th>
                                <th>ĐIỆN THOẠI</th>
                                <th>VAI TRÒ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($list_account as $account) {
                                    extract($account);
                                    $update_account="index.php?act=update_account&id=".$id;
                                    $remove_account="index.php?act=remove_account&id=".$id;

                                    echo '
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$username.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$phone.'</td>
                                        <td>'.$role.'</td>
                                        <td>
                                            <a href="'.$remove_account.'">
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