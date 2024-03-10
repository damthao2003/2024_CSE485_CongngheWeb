<?php
//truy van du lieu
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
// check data
//echo '<pre>';
//print_r($news);
//echo '</pre>';


?>