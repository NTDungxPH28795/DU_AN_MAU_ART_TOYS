<div class="row mb">
            <div class="box-left mr">
                <div class="row">
                    <div class="banner">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                            <img src="img/MSI.png" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                            <img src="img/MSI_MAG.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                            <img src="img/MSI_MEG_ACE.jpg" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row boxsp">
                    <?php
                        $i=0;
                        foreach ($listprohome as $product) {
                            extract($product);
                            $linksp="index.php?act=detailproduct&idpro=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2) || ($i==5) || ($i==8)){
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
                                <div class="row btnaddtocart frmcontent">
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="price" value="'.$price.'">
                                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                    </form>
                                </div>
                            </div>
                            ';
                            $i+=1;
                        }
                    ?>
                </div>
            </div>
            <div class="box-right">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>