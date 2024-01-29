<div class="row mb">
    <div class="box-left mr">
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM <strong><?=$namecat?></strong></div>
            <div class="row boxsp">
                <?php
                    $i=0;
                    foreach ($listpro as $product) {
                        extract($product);
                        $linksp="index.php?act=detailproduct&idpro=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2) || ($i==5) || ($i==8) || ($i==11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '
                        <div class="boxproduct '.$mr.'">
                            <div class="row img">
                                <img src="'.$hinh.'" alt="">
                            </div>
                            <h2>'.$price.'đ</h2>
                            <a href="'.$linksp.'" class="name_pro">'.$name.'</a>
                        </div>
                        ';
                        $i+=1;
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="box-right">
        <?php
            include "boxright.php";
        ?>
    </div>
</div>