<div class="row">
            <div class="row header mb">
                <h3>THỐNG KÊ SẢN PHẨM THEO LOẠI HÀNG</h3>
            </div>
            <div class="row frmcontent">
                <div class="row mb10">
                    <table>
                        <thead>
                            <tr>
                                <th>MÃ DANH MỤC</th>
                                <th>TÊN DANH MỤC</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>GIÁ TRUNG BÌNH</th>
                            </tr>
                        </thead>
                        <?php
                        
                            foreach ($list_statistical as $statistical) {
                                extract($statistical);
                                echo'<tbody>
                                        <tr>
                                            <td>'.$id_cat.'</td>
                                            <td>'.$name_cat.'</td>
                                            <td>'.$count_products.'</td>
                                            <td>'.$max_price.'</td>
                                            <td>'.$min_price.'</td>
                                            <td>'.$avg_price.'</td>
                                        </tr>
                                    </tbody>';
                            };

                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=chart">
                        <input type="button" value="Xem biểu đồ">
                    </a>
                </div>
            </div>
        </div>