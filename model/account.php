<?php
    function list_account(){
        $sql= "select * from account order by id desc";
        $list_account=pdo_query($sql);
        return $list_account;
    }
    function insert_account($email,$username,$pass){
        $sql="insert into account(email,username,pass) values('$email','$username','$pass')";
        pdo_execute($sql);
    }
    function check_user($username, $pass){
        $sql="select * from account where username='".$username."' and pass='".$pass."'";
        $pro=pdo_query_one($sql);
        return $pro;
    }
    function check_email($email){
        $sql="select * from account where email='".$email."'";
        $pro=pdo_query_one($sql);
        return $pro;
    }
    function update_account($id,$username, $pass, $email, $address, $phone){
        $sql="update account set username='".$username."', pass='".$pass."', email='".$email."', address='".$address."', phone='".$phone."' where id=".$id;
        pdo_execute($sql);
    }
    function remove_account($id){
        $sql="delete from account where id=".$id;
        pdo_execute($sql);
    }
?>