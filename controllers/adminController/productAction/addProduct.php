<?php
/**
 * Class dùng đẻ thêm sản phẩm mới vào cơ sở dữ liệu
 */
class addProduct
{
    public function addProduct(){
        $productModel = new ProductModel();
        $catalogModel = new CatalogModel();
        $cataResult = $catalogModel->getDataCatalog();
        $error = array();
        if (isset($_POST['addProduct'])){
            // lấy giá trị CatalogID 
            $catalogID = $catalogModel->getRowDataCatalogByName($_POST['catalog_name']);
            $id = $catalogID->fetch_assoc();
            // hỏi đoạn này!!!!! cách lấy mỗi ID mà ko cần lấy cả ROW
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
                $error['image_link'] = "Xin mời nhập file";
            } else {
                $image_link = $_POST['image_link'];
            }
            // kiểm tra nếu không có lỗi thì Thực hiện thêm sản phẩm trong database
            if (empty($error)){
                $productModel->addProduct($id['id'],$name,$price,$content,$image_link);
                header('Location: admin.php?controller=home&action=showListProduct');
            }
        }
        include_once 'views/admin/addProduct.php';
    }
}
?>