<div class="row mb">
    <div class="box-left mr">
        <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG ĐẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    <?php
                        if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $status_bill = get_status($bill['bill_status']);
                                $count_pro=loadall_cart_count($bill['id']);
                                echo '
                                    <tr>
                                        <td>DAM-'.$bill['id'].'</td>
                                        <td>'.$bill['date_confirm'].'</td>
                                        <td>'.$count_pro.'</td>
                                        <td>'.$bill['total'].'</td>
                                        <td>'.$status_bill.'</td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
    <div class="box-right">
        <?php include "view/boxright.php"; ?>
    </div>
</div>