<?php
class Search
{
    public function Search(){
        $productModel = new ProductModel();

        //phân trang cho listProduct
        if (isset($_POST['searchKey'])) {
            $count = $productModel->countRowsProductByKeyWordCount($_POST['searchKey']);
        } else {
            $count = $productModel->countRowsProductByKeyWordCount($_SESSION['searchKey']);
        }
        //$count = $productModel->countRowsProductByKeyWordCount($_POST['searchKey']);
        $rows = mysqli_fetch_assoc($count);
        $total_records = $rows['total'];
        //tìm số page và giới hạn dòng trong page
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3;
        $total_page = ceil($total_records / $limit); // tính tổng số page
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;

        if (isset($_POST['searchKey'])) {
            $_SESSION['searchKey'] = $_POST['searchKey'];
            $keyWord = $_SESSION['searchKey'];
            $result = $productModel->SortProductByKeyWord($keyWord,$start,$limit);
        } elseif (!isset($_POST['searchKey'])){
            if (isset($_SESSION['searchKey'])) {
                $keyWord = $_SESSION['searchKey'];
                $result = $productModel->SortProductByKeyWord($keyWord,$start,$limit);
            }
        } else {
            echo 'nhap keyword';exit;
        }
        include_once 'views/web/search.php';
    }
}
?>