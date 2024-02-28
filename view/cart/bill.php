<div class="row mb">
    <div class="box-left mr">
        <form action="index.php?act=billconfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent frmcontent billform">
                    <table>
                        <?php
                        if (isset($_SESSION['username'])) {
                            $name = $_SESSION['username']['username'];
                            $address = $_SESSION['username']['address'];
                            $email = $_SESSION['username']['email'];
                            $phone = $_SESSION['username']['phone'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $phone = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="phone" value="<?= $phone ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent frmcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="payment" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="payment">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="payment">Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent frmcontent cart">
                    <table>
                        <?php viewcart(0); ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill frmcontent">
                <form method="post" action="index.php?act=billconfirm">
                    <div class="row mb bill frmcontent">
                        <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="confirm">
                    </div>
                </form>

            </div>
        </form>
    </div>
    <div class="box-right">
        <?php include "view/boxright.php"; ?>
    </div>
</div>