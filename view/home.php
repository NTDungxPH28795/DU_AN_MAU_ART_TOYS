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
                                <a href="#" class="name_pro">'.$name.'</a>
                            </div>
                            ';
                            $i+=1;
                        }
                    ?>
                </div>
            </div>
            <div class="box-right">
                <div class="row mb">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formuser">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="password" id="">
                            </div>
                            <div class="row mb10 checkbox">
                                <input type="checkbox" name="check" id=""> Ghi nhớ tài khoản? <br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập"> <br>
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a> <br>
                        </li>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Danh mục</div>
                    <div class="boxcontent2 menu">
                        <ul>
                            <?php
                                foreach ($listcathome as $category) {
                                    extract($category);
                                    $linkcat="index.php?act=product&idcat=".$id;
                                    echo '
                                        <li><a href="'.$linkcat.'">'.$name.'</a></li>
                                    ';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="#" method="post">
                            <input type="search" placeholder="Từ khóa tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($top10 as $product) {
                                extract($product);
                                $linkpro="index.php?act=detailpro&idpro=".$id;
                                $img=$img_path.$img;
                                echo '
                                <div class="row mb10 top10">
                                    <img src="'.$img.'" alt="">
                                    <a href="'.$linkpro.'">'.$name.'</a>
                                </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>