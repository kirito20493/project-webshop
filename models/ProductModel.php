<?php
include_once './config/DBconnect.php';
class ProductModel extends DBConnect
{
    // lấy thông tin tất cả sản phẩm JOIN catalog_ID với bảng Catalog
    public function getAllDataProduct(){
        $sql = "SELECT product.id, product.name, product.price, product.content, catalog.name as cate_name, product.created FROM product 
        INNER JOIN catalog where product.catalog_id = catalog.id
        GROUP BY product.id ASC";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // thêm sản phẩm
    public function addProduct($catalogID,$name,$price,$content,$imageLink){
        $sql = "INSERT INTO product(catalog_id, name, price, content, image_link, created) 
        VALUES ('$catalogID','$name','$price','$content','$imageLink',CURRENT_TIMESTAMP())";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Delete Product
    public function deleteProduct($id){
        $sql = "DELETE FROM product WHERE id='$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin product từ catalog_ID
    public function getDataProductByCatalogId($id){
        $sql = "SELECT * FROM product WHERE catalog_id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin product từ product_ID
    public function getDataByProductId($id){
        $sql = "SELECT * FROM product WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // chỉnh sửa thông tin sản phẩm
    public function editDataProduct($id,$catalogID,$name,$price,$content,$imageLink){
        $sql = "UPDATE product SET catalog_id='$catalogID',name='$name',price='$price'
            ,content='$content',image_link='$imageLink',created=CURRENT_TIMESTAMP() WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}
?>