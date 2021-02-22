<?php
class Search
{
    public function Search(){
        $productModel = new ProductModel();
        if (isset($_POST['keyword'])) {
            $keyWord = $_POST['searchKey'];
            $result = $productModel->SortProductByKeyWord($keyWord);
        } else {
            echo 'nhap keyword';exit;
        }
        
        include_once 'views/web/search.php';
    }
}
?>