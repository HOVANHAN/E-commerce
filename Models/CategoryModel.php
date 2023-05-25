<?php
require_once("../do-an-web-php/Classes/Category.php");
require_once("../do-an-web-php/Modules/db_module.php");

class CategoryModel
{
    public function getCategoryList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_categories");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $category = new Category($rows["cat_id"], $rows["cat_name"]);
            array_push($data, $category);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
}
