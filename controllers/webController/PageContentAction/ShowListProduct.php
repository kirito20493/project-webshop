<?php
class ShowListProduct
{
    public function ShowListProduct(){
        $productModel = new ProductModel();
        // $result = $productModel->getAllDataProduct();

        //phân trang cho listProduct
        $count = $productModel->countRowsProduct();
        $rows = mysqli_fetch_assoc($count);
        $total_records = $rows['total'];
        //tìm số page và giới hạn dòng trong page
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
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

        $result = $productModel->getAllDataProductLimit($start, $limit);
        include_once 'views/web/showListProduct.php';
    }
}
?>