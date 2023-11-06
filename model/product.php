<?php

function insert_pro($tensp,$giasp,$hinh,$mota,$idcat){
    $sql="insert into products(name,price,img,description,idcat) values('$tensp','$giasp','$hinh','$mota','$idcat')";
    pdo_execute($sql);
}
function remove_pro($id){
    $sql="delete from products where id=".$id;
    pdo_execute($sql);
}
function list_pro_home(){
    $sql= "select * from products where 1 order by id desc limit 0,9";
    $listpro=pdo_query($sql);
    return $listpro;
}
function list_pro_top10(){
    $sql= "select * from products where 1 order by view desc limit 0,10";
    $listpro=pdo_query($sql);
    return $listpro;
}
function list_pro($key="",$idcat=0){
    $sql= "select * from products where 1";
    if($key!=""){
        $sql.=" and name like '%".$key."%'";
    }
    if($idcat>0){
        $sql.=" and idcat = '".$idcat."'";
    }
    $sql.=" order by id desc";
    $listpro=pdo_query($sql);
    return $listpro;
}
function edit_pro($id){
    $sql="select * from products where id=".$id;
    $pro=pdo_query_one($sql);
    return $pro;
}
function update_pro($id,$idcat, $tensp, $giasp, $mota, $hinh){
    if($hinh!=""){
        $sql="update products set idcat='".$idcat."' ,name='".$tensp."', price='".$giasp."', description='".$mota."',img='".$hinh."' where id=".$id;
    // echo $sql;
    // die();  
    }else{
        $sql="update products set idcat='".$idcat."', name='".$tensp."', price='".$giasp."', description='".$mota."' where id=".$id;
    }
    pdo_execute($sql);
}

?>