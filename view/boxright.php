<div class="row mb">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formuser">
                        <?php
                            if(isset($_SESSION['username'])){
                                extract($_SESSION['username']);
                        ?>

                            <div class="row mb10">
                                Xin chaof <br>
                                <?=$username?>
                            </div>
                            <div class="row mb10">
                                <li>
                                    <a href="index.php?act=fogot_pass">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_account">Cập nhật tài khoản</a> <br>
                                </li>
                                <?php
                                    if($role==1){
                                ?>
                                <li>
                                    <a href="admin/index.php">Admin</a> <br>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="index.php?act=signout">Đăng xuất</a> <br>
                                </li>
                            </div>
                        <?php
                            }else{
                        ?>
                        <form action="index.php?act=signin" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="username">
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10 checkbox">
                                <input type="checkbox" name="check"> Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="signin">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=signup">Đăng ký thành viên</a> <br>
                        </li>
                        <?php }?>
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
                        <form action="index.php?act=product" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" value="Tìm kiếm" name="search">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($top10 as $product) {
                                extract($product);
                                $linkpro="index.php?act=detailproduct&idpro=".$id;
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