<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        .container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;


        }
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;

        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
        }
        *{
            margin-left: 10px;
            margin-right: 10px;
        }
        .element{
            display: flex;

        }
        .element h1 {
            margin-top: 0.0000000000000001px;
        }
    </style>
</head>
<body>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'title' => 'Lập trình viên quốc tế',
        'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện .Phù hợp với học sinh tốt nghiệp THPT , sinh viên 
        và người định hướng theo nghề nghiệp lập trình chuyên nghiệp.',
        'fee' => 'Học Bổng 15.000.000 VND',
        'start_date' => 'Khai giảng : 2/2024',
        'duration' => 'Thời lượng: 2 - 2.5 năm'
    ],
    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => 'Ưu đãi giảm 15% học phí ',
        'start_date' => 'Khai giảng : 2/2024',
        'duration' => 'Thời lượng : 6 tháng '
    ],
    [
        'title' => 'Lập trình java fullstack',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => 'Ưu đãi giảm 15% học phí ',
        'start_date' => 'Khai giảng : 2/2024',
        'duration' => 'Thời lượng : 6 tháng '
    ],
    [
        'title' => 'Lập trình PHP & LARAVEL',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => 'Ưu đãi giảm 15% học phí ',
        'start_date' => 'Khai giảng : 2/2024',
        'duration' => 'Thời lượng : 6 tháng '
    ],
    [
        'title' => 'Khóa ho lập trình .Net',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => 'Ưu đãi giảm 15% học phí ',
        'start_date' => 'Khai giảng : 2/2024',
        'duration' => 'Thời lượng : 6 tháng '
    ],
    [
        'title' => 'Lập trình SQL SERVER',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => 'Ưu đãi giảm 15% học phí ',
        'start_date' => 'Khai giảng : 2/2024',
        'duration' => 'Thời lượng : 6 tháng '
    ],

];

echo '<div class="element">';
echo '<div style="border-style: solid; border-width: 5px; border-color: #c21b1b;height: 20px;width:0.1px"></div>';
echo '<h1 style="color: #A00000"> Khóa học sắp khai giảng </h1>';
echo '</div>';
// Hiển thị danh sách khóa học
echo '<div class ="container">';
    foreach ($courses as $course) {
        echo '<div class="course" >';
        echo '<img src="th.jpg" width="430 " height="200"> </img>';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p>' . $course['fee'] . '</p>';
        echo '<p>' . $course['start_date'] . '</p>';
        echo '<p> ' . $course['duration'] . '</p>';
        echo '</div>';

    }
echo '</div>';
?>
</body>
</html>
