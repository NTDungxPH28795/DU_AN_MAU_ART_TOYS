<?php
    function insert_comment($content, $iduser, $idpro, $date){
        $sql="insert into comment(content, iduser, idpro, date) values('$content','$iduser','$idpro','$date')";
        pdo_execute($sql);
    }
    function list_comment($idpro){
        $sql= "select * from comment where 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'";
        $sql.=" order by id desc";
        $list_comment=pdo_query($sql);
        return $list_comment;
    }
    function remove_comment($id){
        $sql="delete from comment where id=".$id;
        pdo_execute($sql);
    }
?>