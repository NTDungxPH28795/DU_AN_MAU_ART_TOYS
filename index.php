<?php
session_start();
include "model/pdo.php";
include "model/product.php";
include "model/account.php";
include "model/category.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$listprohome = list_pro_home();
$listcathome = list_cat();
$top10 = list_pro_top10();
// include "view/home.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['idcat']) && ($_GET['idcat'] > 0)) {
                $idcat = $_GET['idcat'];
            } else {
                $idcat = 0;
            }
            $listpro = list_pro($kyw, $idcat);
            $namecat = load_name_cat($idcat);
            include "view/product.php";
            break;
        case 'detailproduct':
            if (isset($_GET['idpro']) && ($_GET['idpro'] > 0)) {
                $id = $_GET['idpro'];
                $onepro = edit_pro($id);
                extract($onepro);
                $samepro = load_pro_same($id, $idcat);
                include "view/detailproduct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'signup':
            if (isset($_POST['signup']) && ($_POST['signup'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_account($email, $username, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập";
            }
            include "view/account/signup.php";
            break;
        case 'signin':
            if (isset($_POST['signin']) && ($_POST['signin'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $check_user = check_user($username, $pass);
                if (is_array($check_user)) {
                    $_SESSION['username'] = $check_user;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại.";
                }
            }
            include "view/account/signup.php";
            break;
        case 'edit_account':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $id = $_POST['id'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];

                update_account($id, $username, $pass, $email, $address, $phone);
                $_SESSION['username'] = check_user($username, $pass);
                header('Location: index.php?act=edit_account');
            }
            include "view/account/edit_account.php";
            break;
        case 'fogot_pass':
            if (isset($_POST['sent']) && ($_POST['sent'])) {
                $email = $_POST['email'];

                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là: " . $check_email['pass'];
                } else {
                    $thongbao = "Email không tồn tại";
                }
            }
            include "view/account/fogot_pass.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $quantity = 1;
                $price_all = $quantity * $price;
                $pro_add = [$id, $name, $img, $price, $quantity, $price_all];
                array_push($_SESSION['mycart'], $pro_add);
            }

            include "view/cart/viewcart.php";
            break;
        case 'delete_cart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            };
            // include "view/cart/viewcart.php";
            header('Location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset($_POST['confirm'])) {
                if(isset($_SESSION['username'])) $id_user=$_SESSION['username']['id'];
                else $id=0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $payment = $_POST['payment'];
                $date_confirm = date('h:i:sa d/m/Y');
                $sum_cart = sum_cart();

                $id_bill = insert_bill($id_user, $name, $email, $address, $phone, $payment, $date_confirm, $sum_cart);

                //insert into cart : $session['mycart'] & id_bill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['username']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $id_bill);
                }

                $bill = loadone_bill($id_bill);
                
                $bill_detail = loadall_cart($id_bill);
                $_SESSION['mycart'] = [];

            }



            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bill($_SESSION['username']['id']);
            include "view/cart/mybill.php";
            break;
        case 'signout':
            session_unset();
            header('Location: index.php');
            break;
        case 'introduce':
            include "view/introduce.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
