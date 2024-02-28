<div class="row">
    <div class="row mb">
        <div class="box-left mr">
            <div class="row mb">
                <div class="boxtitle">CẢM ƠN</div>
                <div class="row boxcontent" style="text-align:center">
                    <h2>Cảm ơn quý khách đã đặt hàng!</h2>
                </div>
            </div>
            <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
            ?>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                <div class="row boxcontent" style="text-align:center">
                    <li>Mã đơn hàng: DAM-<?= $bill['id']; ?></li>
                    <li>Ngày đặt hàng: <?= $bill['date_confirm']; ?></li>
                    <li>Tổng đơn hàng: <?= $bill['total']; ?></li>
                    <li>Phươg thức thanh toán: <?= $bill['bill_payment']; ?></li>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent frmcontent billform">
                    <table>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?= $bill['bill_name']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= $bill['bill_address']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $bill['bill_email']; ?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?= $bill['bill_phone']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
    
            <div class="row mb">
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                <div class="row boxcontent frmcontent cart">
                    <table>
                        <?php
                        bill_detail($bill_detail);
                        ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill frmcontent">
                <a href="index.php">
                    <input type="button" value="ĐỒNG Ý ĐẶT HÀNG" name="confirm">
                </a>
            </div>
        </div>
        <div class="box-right">
            <?php include "view/boxright.php"; ?>
        </div>
    </div>
</div>