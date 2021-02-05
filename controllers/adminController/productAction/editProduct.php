<?php
/**
 *
 *  Class thực hiện chức năng chỉnh sửa thông tin sản phẩm
 **/ 
class editProduct
{
    public function editProduct(){
        $productModel = new ProductModel();
        $catalogModel = new CatalogModel();
        $cataResult = $catalogModel->getDataCatalog();
        $result = $productModel->getDataByProductId($_GET['id']);
        $data = $result->fetch_assoc();
        if (isset($_POST['editProduct'])){
            $catalogData = $catalogModel->getRowDataCatalogByName($_POST['catalog_name']);
            $catalogID = $catalogData->fetch_assoc();

            if (empty($_POST['name'])){
                $error['name'] = "Không được bỏ trống!";
            } else {
                $name = $_POST['name'];
            }
            if (empty($_POST['price'])){
                $error['price'] = "Không được bỏ trống!";
            } elseif (!is_numeric($_POST['price'])){
                $error['price'] = "Giá chỉ được nhập số (đơn vị $)";
            } else {
                $price = $_POST['price'];
            }
            if (empty($_POST['content'])) {
                $error['content'] = "Không được bỏ trống!";
            } else {
                $content = $_POST['content'];
            }
            if (empty($_POST['image_link'])){
                $image_link = $data['image_link'];
            } else {
                $image_link = $_POST['image_link'];
            }
            // kiểm tra nếu không có lỗi thì Thực hiện update infor sản phẩm trong database
            if (empty($error)){
                $productModel->editDataProduct($_GET['id'],$catalogID['id'],$name,$price,$content,$image_link);
                header('Location: admin.php?controller=home&action=showListProduct');
            }
        }
        include_once 'views/admin/editProduct.php';
    }
}
?>