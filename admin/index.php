<?php
    include "../model/pdo.php";
    include "../model/category.php";
    include "../model/product.php";
    include "header.php";
    //controler
    
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'add-cat':
                //kiểm tra người dùng có click vào nút add ko
                if(isset($_POST['add']) && ($_POST['add'])){
                    $tenloai=$_POST['tenloai'];
                    insert_cat($tenloai);
                    $thongbao="Thêm thành công";
                }
                include "category/add.php";
                break;    
            case 'list-cat':
                $listcat=list_cat();
                include "category/list.php";
                break;
            case 'remove-cat':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    remove_cat($_GET['id']);
                }
                $sql= "select * from category order by name";
                $listcat=list_cat();
                include "category/list.php";
                break;
            case 'edit-cat':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $cat=edit_cat($_GET['id']);
                }
                include "category/update.php";
                break;
            case 'update-cat':
                if(isset($_POST['update']) && ($_POST['update'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_cat($id, $tenloai);
                    $thongbao="Cập nhật thành công";
                }
                $sql= "select * from category order by name";
                $listcat=pdo_query($sql);
                include "category/list.php";
                break;
            //Sản phẩm
            case 'add-pro':
                //kiểm tra người dùng có click vào nút add ko
                if(isset($_POST['add']) && ($_POST['add'])){
                    $idcat=$_POST['idcat'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    insert_pro($tensp, $giasp, $hinh, $mota, $idcat);
                    $thongbao="Thêm thành công";
                }
                $listcat=list_cat();
                include "product/add.php";
                break;
            case 'list-pro':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $key= $_POST['key'];
                    $idcat= $_POST['idcat'];
                }else{
                    $key= '';
                    $idcat= 0;
                }
                $listcat=list_cat();
                $listpro=list_pro($key,$idcat);
                include "product/list.php";
                break;
            case 'remove-pro':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    remove_pro($_GET['id']);
                }
                $listpro=list_pro("",0);
                include "product/list.php";
                break;
            case 'edit-pro':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $pro=edit_pro($_GET['id']);
                }
                $listcat=list_cat();
                include "product/update.php";
                break;
            case 'update-pro':
                if(isset($_POST['add']) && ($_POST['add'])){
                    // echo "<pre>";
                    //  print_r($_POST);
                    $id=$_POST['id'];
                    $idcat=$_POST['idcat'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    update_pro($id, $idcat, $tensp, $giasp, $mota, $hinh);
                    $thongbao="Cập nhật thành công";
                }
                $listcat=list_cat();
                $listpro=list_pro();
                include "product/list.php";
                break;

            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }


    include "footer.php";
?>