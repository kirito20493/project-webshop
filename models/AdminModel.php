<?php
include_once './config/DBconnect.php';
class AdminModel extends DBConnect
{
    // Hàm tạo mới Tài khoản admin
    public function addUserAdmin($username,$password,$name){
        $sql = "INSERT INTO admin(id, username, password, name) VALUES (null,'$username','$password','$name')";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Hàm kiểm tra tài khoản đã tồn tại chưa
    function checkIssetUser($username)
    {
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $result = mysqli_query($this->connect(), $sql);
        if(mysqli_num_rows($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    // Hàm kiểm tra tài khoản LOGIN
    public function checkLogin($username,$password)
    {
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->connect(), $sql);
        return $result;
    }
    // Hàm thay đổi mật khẩu
    function changePassword($id,$password)
    {
        $sql = "UPDATE admin SET password='$password' WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Hàm lấy dataByUserName 
    function getDataByUsername($username){
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}
?>