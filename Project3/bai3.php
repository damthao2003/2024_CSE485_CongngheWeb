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
        'fee' => 'Học bổng 15.000.000 VNĐ',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Khóa học phù hợp với người bắt đầu học lập trình hoặc người chuyển nghề. Trang b t frontend đến backend, xây dựng website hoa chỉnh sau khóa học.',
        'fee' => 'Ưu đãi gia 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],
    [
        'title' => ' Lập trình Java fullstack',
        'description' => ' Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servel, JS, Spring Framework, EJP...',
        'fee' => 'Ưu đãi gia 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ'
    ],
    [
        'title' => 'Lập trình PHP & LARAVEL',
        'description' => 'PHP là ',
        'fee' => 'Ưu đãi gia 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],
    [

    ]
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