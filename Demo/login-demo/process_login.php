<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // lay ra du lieu tu POST
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //kiem tra csdl
    if($user == 'jenny' && $pass = '111'){
        session_start();
        $_SESSION['islogin'] = $user;
        header("Location: admin/login.php"); // chuyen huong
    }else{
        header("Location: http://tlu.edu.vn");
    }

}
?>