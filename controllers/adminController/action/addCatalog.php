<?php
class addCatalog
{
    public function addCatalog(){
        $catalogModel = new CatalogModel();
        $error = array();
        if (isset($_POST['addCatalog'])) {
            if (empty($_POST['name'])) {
                $error['name'] = "Không được bỏ trống! Vui lòng nhập!";
            } elseif (!$catalogModel->checkIssetCatalog($_POST['name'])) {
                $error['name'] = "Danh mục này đã tồn tại!";
            } else {
                $name = $_POST['name'];
            }
            if (empty($error)) {
                $catalogModel->addCatalog($name);
                header('Location: admin.php?controller=home&action=showListCatalog');
            }
        }
        include_once 'views/admin/addCatalog.php';
    }
}
?>