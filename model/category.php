<?php

function insert_cat($tenloai){
    $sql="insert into category(name) values('$tenloai')";
    pdo_execute($sql);
}
function remove_cat($id){
    $sql="delete from category where id=".$id;
    pdo_execute($sql);
}
function list_cat(){
    $sql= "select * from category order by id desc";
    $listcat=pdo_query($sql);
    return $listcat;
}
function edit_cat($id){
    $sql="select * from category where id=".$id;
    $cat=pdo_query_one($sql);
    return $cat;
}
function update_cat($id, $tenloai){
    $sql="update category set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}

?>