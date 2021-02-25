<?php
include_once './config/DBconnect.php';
class ProductModel extends DBConnect
{
    // lấy thông tin tất cả sản phẩm JOIN catalog_ID với bảng Catalog
    public function getAllDataProduct(){
        $sql = "SELECT product.id, product.name, product.price, product.content, product.image_link, catalog.name as cate_name, product.created FROM product 
        INNER JOIN catalog WHERE product.catalog_id = catalog.id
        GROUP BY product.id ASC";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin tất cả sản phẩm JOIN catalog_ID với bảng Catalog
    public function getAllDataProductLimit($start, $limit){
        $sql = "SELECT product.id, product.star, product.name, product.price, product.content, product.image_link, catalog.name as cate_name, product.created FROM product 
        INNER JOIN catalog WHERE product.catalog_id = catalog.id LIMIT $start, $limit";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin tất cả sản phẩm JOIN catalog_ID với bảng Catalog WHERE catalogID
    public function getDataProductWithCatalogID($cataID){
        $sql = "SELECT product.id, product.name, product.price, product.content, product.image_link, catalog.name as cate_name, product.created FROM product 
        INNER JOIN catalog WHERE product.catalog_id = catalog.id AND catalog.id = $cataID
        GROUP BY product.id ASC";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin tất cả sản phẩm  WHERE productID
    public function getDataProductWithProductID($productID){
        $sql = "SELECT * FROM product WHERE id = $productID
        GROUP BY id ASC";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // thêm sản phẩm
    public function addProduct($catalogID,$name,$price,$content,$imageLink){
        $sql = "INSERT INTO product(catalog_id, name, price, content, star, rating, timerating, image_link, created) 
        VALUES ('$catalogID','$name','$price','$content',0,0,0,'$imageLink',CURRENT_TIMESTAMP())";
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
    //đếm số dòng trong dataProduct
    public function countRowsProduct(){
        $sql = "SELECT COUNT(id) as total FROM product";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // sắp xếp sản phẩm theo thời gian (10 sản phẩm được thêm mới nhất)
    public function SortProductByTimeAddNew(){
        $sql = "SELECT * FROM product ORDER BY created DESC LIMIT 0, 10";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin sản phẩm JOIN với bảng order (đếm số lượng được bán ra củ sản phẩm)
    public function SortProductByTimeOrder(){
        $sql = "SELECT product.id, product.star, product.name, product.price, product.content, product.image_link , COUNT(order.product_id) as cnt FROM `order` 
        INNER JOIN product WHERE `product`.id = `order`.product_id GROUP BY product_id ORDER BY cnt DESC";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin sản phẩm với KeyWord nhập từ input search
    public function SortProductByKeyWord($keyWord,$start,$limit){
        $sql = "SELECT * from product WHERE name LIKE '%$keyWord%' LIMIT $start, $limit";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // lấy thông tin sản phẩm với KeyWord nhập từ input search
    public function countRowsProductByKeyWordCount($keyWord){
        $sql = "SELECT COUNT(id) as total FROM product WHERE name LIKE '%$keyWord%'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Update Rating Product
    public function updateRatingProduct($productID,$star,$rating,$timerating){
        $sql = "UPDATE `product` SET `star`='$star',`rating`='$rating',`timerating`='$timerating' WHERE id = '$productID'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}
?>