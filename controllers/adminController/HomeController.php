<?php
include_once './models/CatalogModel.php';
include_once './models/ProductModel.php';
include_once './models/OrderModel.php';
include_once './models/TransactionModel.php';
/**
 * Class điều hướng Action từ HomeController
 * (Sau khi đăng nhập thành công!)
 */
class HomeController
{
    public function HomeController(){
        $model = new UsersModel();
        if (isset($_SESSION['username']) && isset($_SESSION['name']) && isset($_SESSION['id'])) {
            $action = isset($_GET['action'])?$_GET['action']:'main';
            include_once 'views/admin/header.php';
            include_once 'views/admin/navbar.php';
            switch ($action) {
                /**
                 * Làm việc với User Admin
                 */
                // Chỉ hiện tên admin
                case 'main':
                    include_once 'views/admin/container.php';
                    break;
                // đăng xuất xoá session
                case 'logout':
                    session_destroy();
                    header('Location: admin.php?controller=login');
                    break;
                // Thay đổi mật khẩu Tài khoản ADMIN
                case 'changePAD':
                    include_once 'controllers/adminController/action/changePasswordAdmin.php';
                    $adminAction = new changePasswordAdmin();
                    break;

                /**
                 * Làm việc với UserModel
                 */
                // Hiện thị danh sách User khách hàng 
                case 'showListUser':
                    include_once 'controllers/adminController/action/showListUser.php';
                    $showListUser = new showListUser();
                    break;
                // Xoá User
                case 'deleteUser':
                    $model->deleteUserByID($_GET['id']);
                    header('Location: admin.php?controller=home&action=showListUser');
                    break;
                // chỉnh sửa thông User
                case 'editUser':
                    include_once 'controllers/adminController/action/editUser.php';
                    $editUser = new editUser();
                    break;

                /**
                 * Làm việc với Catalog Model
                 */
                // show List danh mục hàng hoá
                case 'showListCatalog':
                    include_once 'controllers/adminController/action/showListCatalog.php';
                    $showListCatalog = new showListCatalog();
                    break;
                // ADD NEW CATALOG
                case 'addCatalog':
                    include_once 'controllers/adminController/action/addCatalog.php';
                    $addCatalog = new addCatalog();
                    break;
                // Chỉnh sửa Tên danh mục hàng hoá
                case 'editCatalog':
                    include_once 'controllers/adminController/action/editCatalog.php';
                    $editCatalog = new editCatalog();
                    break;
                // Xoá item của List danh mục hàng hoá
                case 'deleteCatalog':
                    $catalogModel = new CatalogModel();
                    if (isset($_GET['id'])) {
                        $result = $catalogModel->deleteCatalog($_GET['id']);
                        header('Location: admin.php?controller=home&action=showListCatalog');
                    }
                    break;
                // Hiện thị thông danh sách liên quan của Item trong danh mục hàng hoá
                case 'detailCatalog':
                    include_once 'controllers/adminController/catalogAction/detailCatalog.php';
                    $detailCatalog = new detailCatalog();
                    break;

                /**
                 * Làm việc với Product Model
                 */
                // hiển thị danh sách sản phẩm
                case 'showListProduct':
                    include_once 'controllers/adminController/action/showListProduct.php';
                    $showListProduct = new showListProduct();  
                    break;
                // xoá sản phẩm
                case 'deleteProduct':
                    $productModel = new ProductModel();
                    $productModel->deleteProduct($_GET['id']);
                    header('Location: admin.php?controller=home&action=showListProduct');
                    break;
                // chỉnh sửa thông tin sản phẩm
                case 'editProduct':
                    include_once 'controllers/adminController/productAction/editProduct.php';
                    $editProduct = new editProduct();
                    break;
                // thêm sản phẩm
                case 'addProduct':
                    include_once 'controllers/adminController/productAction/addProduct.php';
                    $addProduct = new addProduct();
                    break;
                // hiển thị chi tiết thông tin sản phẩm
                case 'detailProduct':
                    include_once 'controllers/adminController/productAction/detailProduct.php';
                    $detailProduct = new detailProduct();
                    break;
                /**
                 * Làm việc với Transaction Model
                 * (đơn đặt hàng)
                 */
                // hiện thị danh sách các đơn đặt hàng
                case 'showListTransaction':
                    include_once 'controllers/adminController/transactionAction/ShowListTransaction.php';
                    $showListTransaction = new ShowListTransaction();
                    break;
                // hiện thị chi tiết thông tin đơn đặt hàng
                // xoá đơn đặt hàng
                case 'deleteTransaction':
                    $transactionModel = new TransactionModel();
                    $transactionModel->deleteTransaction($_GET['id']);
                    header('Location: admin.php?controller=home&action=showListTransaction');
                    break;
                // xem chi tiết thông tin đơn đặt hàng
                case 'detailTransaction':
                    include_once 'controllers/adminController/transactionAction/DetailTransaction.php';
                    $detailTransaction = new DetailTransaction();
                    break;

                //
                default:
                    include_once 'views/admin/container.php';
                    break;
            }
            include_once 'views/admin/footer.php';
        } else {
            header('Location: admin.php?controller=login');
        }
    }
}
?>