<?php
//truy van du lieu

function getAllCate(){
    //b1: ket noi mysql
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) die("Disconnected");
    // b2: viet cau sql
    $sql_cate = "select * from categories";

    // b3: thuc thi cau lenh sql
    $result = mysqli_query($conn, $sql_cate);
    //b4: taọ mảng lưu trữ data
    $categories = [];
    // mysqli_num_rows($result): kiểm tra số lượng bản ghi
    if (mysqli_num_rows($result) > 0) {
        // lấy từng bản ghi gán vào biến row
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
    }
    //b5: đóng kết nối
    mysqli_close($conn);

    return $categories;
};

function getAllNews()
{
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) die("Disconnected");

    $sql_news = "select * from news order by news_id DESC limit 4";
    $result_news = mysqli_query($conn, $sql_news);
    $news = [];
    if (mysqli_num_rows($result_news)) {
        while ($row = mysqli_fetch_assoc($result_news)) {
            $news[] = $row;
        }
    }
    return $news;
}
function getAllUsers()
{
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) die("Disconnected");

    $sql_users = "select * from user order by username ASC "; // sap xep theo chieu tang dan
    $result_users = mysqli_query($conn, $sql_users);
    $users = [];
    if(mysqli_num_rows($result_users)){
        while($row = mysqli_fetch_assoc($result_users)){
            $users[] = $row;
        }
    }
    return $users;
}

function addUser($username,$email, $password){
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) die("Disconnected");

    $sql_check = "SELECT * FROM user WHERE username = '$username' OR email= '$email'";
    $result = mysqli_query($conn, $sql_check);
    if(mysqli_num_rows($result) > 0){
        return false;
    }else{
        $sql = "insert into user(username,email, password) values('$username',  '$email','$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

}
?>



