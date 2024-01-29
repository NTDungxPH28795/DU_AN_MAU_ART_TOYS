<?php
    session_start();
    include "model/pdo.php";
    include "model/product.php";
    include "model/account.php";
    include "model/category.php";
    include "view/header.php";
    include "global.php";

    $listprohome=list_pro_home();
    $listcathome=list_cat();
    $top10=list_pro_top10();
    // include "view/home.php";

    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'product':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['idcat'])&&($_GET['idcat']>0)){
                    $idcat=$_GET['idcat'];
                    
                }else{
                    $idcat=0;
                }
                $listpro=list_pro($kyw,$idcat);
                $namecat=load_name_cat($idcat);
                include "view/product.php";
                break;
            case 'detailproduct':
                if(isset($_GET['idpro'])&&($_GET['idpro']>0)){
                    $id=$_GET['idpro'];
                    $onepro=edit_pro($id);
                    extract($onepro);
                    $samepro=load_pro_same($id, $idcat);
                    include "view/detailproduct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'signup':
                if(isset($_POST['signup'])&&($_POST['signup'])){
                    $username=$_POST['username'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    insert_account($email,$username,$pass);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập";
                }
                include "view/account/signup.php";
                break;
            case 'signin':
                if(isset($_POST['signin'])&&($_POST['signin'])){
                    $username=$_POST['username'];
                    $pass=$_POST['pass'];
                    $check_user=check_user($username,$pass);
                    if(is_array($check_user)){
                        $_SESSION['username']=$check_user;
                        header('Location: index.php');
                    }else{
                        $thongbao="Tài khoản không tồn tại.";
                    }
                }
                include "view/account/signup.php";
                break;
            case 'edit_account':
                if(isset($_POST['update'])&&($_POST['update'])){
                    $username=$_POST['username'];
                    $pass=$_POST['pass'];
                    $id=$_POST['id'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $phone=$_POST['phone'];

                    update_account($id,$username, $pass, $email, $address, $phone);
                    $_SESSION['username']=check_user($username,$pass);
                    header('Location: index.php?act=edit_account');

                }
                include "view/account/edit_account.php";
                break;
            case 'fogot_pass':
                if(isset($_POST['sent'])&&($_POST['sent'])){
                    $email=$_POST['email'];

                    $check_email=check_email($email);
                    if(is_array($check_email)){
                        $thongbao="Mật khẩu của bạn là: ".$check_email['pass'];
                    }else{
                        $thongbao="Email không tồn tại";
                    }
                }
                include "view/account/fogot_pass.php";
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
    }else{    
        include "view/home.php";
    }
    include "view/footer.php";
?>