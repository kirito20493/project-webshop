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
            if(isset($_FILES['image_link'])) {
                $errors= array();
                $file_name = $_FILES['image_link']['name'];
                $file_size =$_FILES['image_link']['size'];
                $file_tmp =$_FILES['image_link']['tmp_name'];
                $file_type=$_FILES['image_link']['type'];
                $file_subName = explode('.', $_FILES['image_link']['name']);
                $file_ext=strtolower(end($file_subName));
                $expensions= array("jpeg","jpg","png");
                
                if(in_array($file_ext, $expensions)=== false) {
                    $errors ="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
                }
                
                if($file_size > 2097152) {
                    $errors ='Kích cỡ file quá lớn!';
                }
                
                if(empty($errors)==false) {
                    $error['image_link'] = $errors;
                } else { 
                    $image_link = $file_name;
                }
            } else {
                    $error['image_link'] = "Vui lòng chọn avatar!";
            }
            // kiểm tra nếu không có lỗi thì Thực hiện thêm sản phẩm trong database
            if (empty($error)){
                $productModel->addProduct($id['id'],$name,$price,$content,$image_link);
                move_uploaded_file($file_tmp, "public/images/".$file_name);
                header('Location: admin.php?controller=home&action=showListProduct');
            }
        }
        include_once 'views/admin/addProduct.php';
    }
}
?>