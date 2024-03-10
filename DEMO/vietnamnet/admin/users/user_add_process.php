<?php
require '../../function.php';
// lấy thoong tin từ from user_add.php truyền sang
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    // kiểm tra dữ liệu
    if(empty($username) || empty($password1) || empty($password2) || empty($email)){
        echo 'Dữ liệu ko hợp lệ';
    }
    if($password1 != $password2){
        echo 'Mật khẩu không trùng khớp';
    }
    // mã hóa mật khẩu
    $password = password_hash($password1, PASSWORD_DEFAULT);
    // LƯU VÀO CSDL
    $result = addUser($username, $email, $password);
    if($result){
        header("Location: user.php?msg=Thêm mới thành công");
    }
    else{
        header("Location: user_add.php?err=Lỗi");
    }


}

?>