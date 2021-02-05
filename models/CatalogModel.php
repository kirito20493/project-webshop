<?php
include_once './config/DBconnect.php';
class CatalogModel extends DBConnect
{
    // lấy dữ liệu từ bảng Catalog
    public function getDataCatalog(){
        $sql = "SELECT * FROM catalog";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy dữ liệu 1row Catalog by name
    public function getRowDataCatalogByName($name){
        $sql = "SELECT * FROM catalog WHERE name = '$name'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy dữ liệu 1row Catalog by ID
    public function getRowDataCatalog($id){
        $sql = "SELECT * FROM catalog WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // DELETE CatalogList's Item
    public function deleteCatalog($id){
        $sql = "DELETE FROM catalog WHERE id='$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Add new catalog
    public function addCatalog($name){
        $sql = "INSERT INTO catalog(id, name) VALUES (null,'$name')";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Hàm kiểm tra Catalog đã tồn tại chưa
    function checkIssetCatalog($name)
    {
        $sql = "SELECT * FROM catalog WHERE name='$name'";
        $result = mysqli_query($this->connect(), $sql);
        if(mysqli_num_rows($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    // Chỉnh sửa Catalog's Name
    public function editCatalog($id,$name){
        $sql = "UPDATE catalog SET name='$name' WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy CatalogID by CatalogName
    public function getIDByName($name){
        $sql = "SELECT id FROM catalog WHERE id = '$name'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}
?>