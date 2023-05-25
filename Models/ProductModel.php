<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Classes/Product.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Modules/db_module.php");

class ProductModel
{
    public function getProductList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_products WHERE status = 0");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product($rows["pro_id"], $rows["pro_name"], $rows["pro_des"], $rows["price"], $rows["pic"], $rows["cat_id"], $rows["status"]);
            array_push($data, $product);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function getProduct($id)
    {
        $allproducts = $this->getProductList();
        foreach ($allproducts as $product)
            if ($product->getId() === $id)
                return $product;
        return null;
    }
    // public function getForCategory($category)
    // {
    //     $link = null;
    //     taoKetNoi($link);
    //     $cat_id = chayTruyVanTraVeDL($link, "SELECT cat_id FROM tbl_categories WHERE cat_name LIKE " . $category . "");
    //     $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_products WHERE cat_id LIKE '%" . $cat_id . "%'");
    //     $data = array();
    //     while ($rows = mysqli_fetch_assoc($result)) {
    //         $product = new Product($rows["pro_id"], $rows["pro_name"], $rows["pro_des"], $rows["price"], $rows["pic"], $rows["cat_id"], $rows["status"]);
    //         array_push($data, $product);
    //     }
    //     giaiPhongBoNho($link, $result);
    //     return $data;
    // }
    public function searchProduct($keyword)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link,  "select * from tbl_products where pro_name like '%" . $keyword . "%'");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product($rows["pro_id"], $rows["pro_name"], $rows["pro_des"], $rows["price"], $rows["pic"], $rows["cat_id"], $rows["status"]);
            array_push($data, $product);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function deleteProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "DELETE FROM tbl_products WHERE pro_id = '" . $id  . "'");
        giaiPhongBoNho($link, $result);
        return $result;
    }
    public function deleteByStatus($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_products SET status = 1 WHERE pro_id = '" . $id  . "'");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product($rows["pro_id"], $rows["pro_name"], $rows["pro_des"], $rows["price"], $rows["pic"], $rows["cat_id"], $rows["status"]);
            array_push($data, $product);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function createProduct($name, $des, $price, $pic, $cat_id)
    {
        $link = null;
        taoKetNoi($link);
        $query = "INSERT INTO tbl_products (pro_id, pro_name, pro_des, price, pic, cat_id, status) 
                  VALUES (NULL, '" . $name . "', '" . $des . "', " . $price . ", '" . $pic . "', '" . $cat_id . "', 0)";
        $result = chayTruyVanKhongTraVeDL($link, $query);
        giaiPhongBoNho($link, $result);
        return $result;
    }
    public function updateProduct($id, $name, $des, $price, $pic, $cat_id)
    {
        $link = null;
        taoKetNoi($link);
        $query = "UPDATE tbl_products SET pro_name = '" . $name . "', 
                                          pro_des = '" . $des . "', 
                                          price = " . $price . ", 
                                          pic = '" . $pic . "', 
                                          cat_id = '" . $cat_id . "',   
                                          status = 0 
                                        WHERE pro_id = '" . $id  . "'";
        $result = chayTruyVanKhongTraVeDL($link, $query);
        giaiPhongBoNho($link, $result);
        return $result;
    }
}
