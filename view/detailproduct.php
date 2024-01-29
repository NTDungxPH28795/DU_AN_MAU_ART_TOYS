<div class="row mb">
    <div class="box-left mr">
        <div class="row mb">
            <?php
                extract($onepro);
            ?>
            <div class="boxtitle"><?=$name?></div>
            <div class="row boxcontent">
                <?php
                    extract($onepro);
                    $img=$img_path.$img;
                    echo '
                        <div class="row mb detail">
                            <img src="'.$img.'" width="300px">
                        </div>
                    ';
                    echo $description;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#comment").load("view/comment/comment.php", {idpro: <?=$id?>});
            });
        </script>
        <div class="row" id="comment">
            
        </div>
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                    foreach ($samepro as $samepro) {
                        extract($samepro);
                        $linksp="index.php?act=detailproduct&idpro=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
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