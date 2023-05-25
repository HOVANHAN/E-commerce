<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Classes/Order.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Modules/db_module.php");

class OrderModel
{
    public function getOrder()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_orders");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $order = new Order($rows['order_id'], $rows['order_time'], $rows['user_id']);
            array_push($data, $order);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
}
