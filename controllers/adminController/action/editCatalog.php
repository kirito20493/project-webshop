<?php
class editCatalog
{
    public function editCatalog(){
        $catalogModel = new CatalogModel();
        $result = $catalogModel->getRowDataCatalog($_GET['id']);
        $data = $result->fetch_assoc();
        $error = array();
        if (isset($_POST['editCatalog'])){
            if(empty($_POST['name'])){
                $error['name'] = "Không được để trống! Vui lòng nhập tên Danh mục.";
            } elseif (!$catalogModel->checkIssetCatalog($_POST['name'])) {
                $error['name'] = "Danh mục này đã tồn tại!";
            } else {
                $name = $_POST['name'];
            }
            if (empty($error)) {
                $catalogModel->editCatalog($_GET['id'],$name);
                header('Location: admin.php?controller=home&action=showListCatalog');
            }
        }
        include_once 'views/admin/editCatalog.php';
    }
}
?>