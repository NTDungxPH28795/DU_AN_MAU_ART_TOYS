<?php
function viewcart($del)
{
    global $img_path;
    $sum = 0;
    $i = 0;
    if ($del == 1) {
        $delete_pro_th = '<th>Thao tác</th>';
        $delete_pro_td2 = '<td></td>';
    } else {
        $delete_pro_th = "";
        $delete_pro_td2 = "";
    }
    echo '
            <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                ' . $delete_pro_th . '
            </tr>
        ';
    foreach ($_SESSION['mycart'] as $cart) {
        $image = $img_path . $cart[2];
        $price_all = $cart[3] * $cart[4];
        $sum = $sum + $price_all;
        if ($del == 1) {
            $delete_pro_td = '<td><a href="index.php?act=delete_cart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        } else {
            $delete_pro_td = "";
        }
        echo '
                <tr>
                    <td><img src="' . $image . '" alt="" height="80px"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $price_all . '</td>
                    ' . $delete_pro_td . '
                </tr>';
        $i += 1;
    }
    echo '
        <tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $sum . '</td>
            ' . $delete_pro_td2 . '
        </tr>';
}

function bill_detail($listbill)
{
    global $img_path;
    $sum = 0;
    $i = 0;
    echo '
            <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        ';
    foreach ($listbill as $cart) {
        $image = $img_path . $cart['img'];
        $sum = $sum + $cart['price_all'];
        echo '
                <tr>
                    <td><img src="' . $image . '" alt="" height="80px"></td>
                    <td>' . $cart['name'] . '</td>
                    <td>' . $cart['price'] . '</td>
                    <td>' . $cart['quantity'] . '</td>
                    <td>' . $cart['price_all'] . '</td>
                </tr>';
        $i += 1;
    }
    echo '
        <tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $sum . '</td>
        </tr>';
}

function sum_cart()
{
    $sum = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $price_all = $cart[3] * $cart[4];
        $sum = $sum + $price_all;
    }
    return $sum;
}

function insert_bill($id_user, $name, $email, $address, $phone, $payment, $date_confirm, $sum_cart)
{
    $sql = "insert into bill(id_user, bill_name, bill_email, bill_address, bill_phone, bill_payment, date_confirm, total) values('$id_user', '$name', '$email', '$address', '$phone', '$payment', '$date_confirm', '$sum_cart')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($id_user, $id_pro, $img, $name, $price, $quantity, $price_all, $id_bill)
{
    $sql = "insert into cart(id_user, id_pro, img, name, price, quantity, price_all, id_bill) values('$id_user', '$id_pro', '$img', '$name', '$price', '$quantity', '$price_all', '$id_bill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($id_bill)
{
    $sql = "select * from cart where id_bill=" . $id_bill;
    $cart = pdo_query($sql);
    return $cart;
}

function loadall_cart_count($id_bill)
{
    $sql = "select * from cart where id_bill=" . $id_bill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill($id_user=0,$key="")
{
    $sql = "select * from bill where 1";
    if($id_user>0) $sql.=" AND id_user=" . $id_user;
    if($key!="") $sql.=" AND id like '%".$key."%'";
    $sql.=" order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}

function remove_bill($id_bill){
    $sql="delete from bill where id_bill=".$id_bill;
    pdo_execute($sql);
}

function get_status($n){
    switch ($n) {
        case '0':
            $status="Đơn hàng mới";
            break;
        case '1':
            $status="Đang chờ";
            break;
        case '2':
            $status="Đang giao hàng";
            break;
        case '3':
            $status="Đã giao hàng";
            break;
        
        default:
            $status="Đơn hàng mới";
            break;
    }
    return $status;
}

function list_statistical()
{
    $sql = "select category.id as id_cat, category.name as name_cat, count(products.id) as count_products, min(products.price) as min_price, max(products.price) as max_price, avg(products.price) as avg_price";
    $sql .= " from products left join category on category.id=products.idcat";
    $sql .= " group by category.id order by category.id desc";
    $list_statistical = pdo_query($sql);
    return $list_statistical;
}
