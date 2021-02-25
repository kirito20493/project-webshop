<?php
include_once './config/DBconnect.php';
class CommentModel extends DBConnect
{
    // lấy dữ liệu của bảng comment từ ID sản phẩm
    public function getDataCommentByProductID($productID){
        $sql = "SELECT comment.content, comment.productID, user.email as email FROM comment INNER JOIN user WHERE comment.userID = user.id AND comment.productID = $productID";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // thêm mới comment
    public function addComment($productID, $userID, $content){
        $sql = "INSERT INTO comment(`productID`, `userID`, `content` ) VALUES ('$productID','$userID','$content')";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}
?>