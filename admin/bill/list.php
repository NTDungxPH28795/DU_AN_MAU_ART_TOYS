<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƯƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="key" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="go">
    </form>
    <div class="row frmcontent">
        <div class="row mb10">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $client=$bill["bill_name"].'
                        <br> '.$bill["bill_email"].'
                        <br> '.$bill["bill_address"].'
                        <br> '.$bill["bill_phone"];
                        $status_bill=get_status($bill["bill_status"]);
                        $count_pro =loadall_cart_count($bill["id"]);
                        $remove_bill="index.php?act=remove_bill&id=".$bill['id'];
                        echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DAM-'.$bill['id'].'</td>
                                <td>'.$client.'</td>
                                <td>'.$count_pro.'</td>
                                <td><strong>'.$bill['total'].'</strong>VNĐ</td>
                                <td>'.$status_bill.'</td>
                                <td>'.$bill['date_confirm'].'</td>
                                <td>
                                    <input type="button" value="Sửa">
                                    <a href="'.$remove_bill.'">
                                        <input type="submit" value="Xóa">
                                    </a>
                                </td>
                            </tr>
                        ';
                    }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=add_pro">
                <input type="button" value="Nhập thêm">
            </a>
        </div>
    </div>
</div>