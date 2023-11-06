<?php
    include "model/pdo.php";
    include "model/product.php";
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