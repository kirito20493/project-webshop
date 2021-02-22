<?php
class SortByTime
{
    public function SortByTime(){
        $productModel = new ProductModel();
        $result = $productModel->SortProductByTimeAddNew(); 

        include_once 'views/web/sortByTime.php';
    }
}
?>