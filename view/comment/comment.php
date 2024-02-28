<?php

    session_start();
    include "../../model/pdo.php";
    include "../../model/comment.php";
    $idpro=$_REQUEST['idpro'];

    $list_comment=list_comment($idpro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .comment table{
            width: 90%;
            margin-left: 5%;
        }
        .comment table td:nth-child(1){
            width: 50%;
        }
        .comment table td:nth-child(2){
            width: 20%;
        }
        .comment table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent2 comment">
            <table>
                <?php
                    foreach ($list_comment as $comment) {
                        extract($comment);
                        echo '<tr><td>'.$content.'</td>';
                        echo '<td>'.$iduser.'</td>';
                        echo '<td>'.$date.'</td></tr>';
                    }
                ?>
            </table>
        </div>
        <div class="boxfooter formcomment">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="content">
                <input type="submit" value="Gửi" name="sent_comment">
            </form>
        </div>

        <?php
            if(isset($_POST['sent_comment']) && ($_POST['sent_comment'])){
                $content=$_POST['content'];
                $idpro=$_POST['idpro'];
                $iduser=$_SESSION['username']['id'];
                $iduser=$_SESSION['username']['name'];
                $date=date('h:i:sa d/m/Y');
                insert_comment($content, $iduser, $idpro, $date);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }


        ?>
    </div>
</body>
</html>