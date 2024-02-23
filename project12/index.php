<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project12</title>
</head>
<body>

<?php
   $navItems = [
       "GIỚI THIỆU",
       "TIN TỨC & THÔNG BÁO",
       "TUYỂN SINH",
       "ĐÀO TẠO",
       "NGHIÊN CỨU",
       "ĐỐI NGOẠI",
       "VĂN BẢN",
       "SINH VIÊN",
       "LIÊN HỆ"
   ];

   echo '<nav> <ul>';
   foreach($navItems as $item){
       echo " <li> $item </li>";
    }
   echo '</ul></nav>';

?>



</body>
</html>



<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khóa học</title>
    <style>
        /*Thêm css*/
        .course{
            background-color: #f9f9f9;
            padding: 10px;
            margin-botton: 20px;
        }
        .course h2{
            color: #333;
        }
        .course p {
            color: #666;
        }
    </style>
</head>
<body>
<?php
$courses = [
        [
                'title' => 'Lập trình viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại việt nam từ aptech global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế',
                'fee' => '15.000.000 VNĐ',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
        ],
];
//Hiển thị danh sách khóa học
    foreach ($courses as $course){
        echo '<div class = "course">';
        echo '<h2>' .$course['title'] .'</h2>';
        echo '<p>' .$course['description'] .'</p>';
        echo '<p> Học phí: ' .$course['fee'] . '</p>';
        echo '<p> Khai Giảng: ' .$course['start_date'] .'</p>';
        echo '<p> Thời Lượng: ' . $course['duration'] .'</p>';
        echo '</div>';
    }
?>
</body>
</html>