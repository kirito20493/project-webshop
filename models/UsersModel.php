<?php
include_once './config/DBconnect.php';
class UsersModel extends DBConnect
{
    // Lấy giá trị UserList
    public function getDataUser(){
        $sql = "SELECT * FROM user";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Xoá User
    public function deleteUserByID($id){
        $sql = "DELETE FROM user WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Chỉnh sửa User khách hàng
    public function editUser($id,$phone,$address){
        $sql = "UPDATE user SET phone='$phone',address='$address' WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Lấy giá trị UserByID
    public function getDataUserByID($id){
        $sql = "SELECT * FROM user WHERE id='$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Hàm kiểm tra Email đã tồn tại chưa
    function checkIssetEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($this->connect(), $sql);
        if(mysqli_num_rows($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    // Check Login
    function checkLoginUser($email,$password)
    {
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}
?>