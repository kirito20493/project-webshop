<?php
    // Hàm check định dang của tài khoản
function isUserName($username)
{
    if(preg_match("/^[a-zA-Z0-9-']*$/", $username)) {
        return true;
    }
}
    // Hàm check định dang của EMAIL
function isEmail($email)
{
    if(preg_match('/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/', $email)) {
        return true;
    }
}
// Hàm check định dang của tài khoản
function isPhoneNumber($phone)
{
    if(preg_match('/^[0-9]{10,12}$/', $phone)) {
        return true;
    }
}
    // Hàm check Validation đã nhập Tài khoản hay chưa
function checkEmptyUserName($username)
{
    if($username=="") {
        return false;
    } else {
        return true;
    }
}
    // Hàm check Validation đã nhập Mật khẩu hay chưa
function checkEmptyPassword($password)
{
    if($password=="") {
        return false;
    } else {
        return true;
    }
}
    // Hàm check định dang của Mật khẩu
function isPassWord($password)
{
    if(preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/", $_POST['password'])) {
        return true;
    }
}
function setValue($labelField)
{
    global $$labelField;
    if(isset($$labelField)) { echo $$labelField;
    }
}
?>