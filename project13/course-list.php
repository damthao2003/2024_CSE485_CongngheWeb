<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        .content {
            display: flex;
            .box {
                background-color: #990000;
                height: 25px;
                width: 4px;
                margin: auto 10px;
            }

        }

        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
            width: 700px;

        }

        .course h2 {
            color: #333;
        }

        .course p {
            color: #666;
            font-size: 30px;

        }

        .part {
            display: flex;
            p {
                margin: auto 5px;
            }
        }
        .courses-list{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

    </style>
</head>
<body>
<div class="content">
    <div class="box"></div>
    <h1 style="color: #990000">KHÓA HỌC SẮP KHAI GIẢNG</h1>
</div>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'image' => 'images/laptrinhvienquocte.png',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND', 'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'image' => 'images/laptrinhvienfullstack.png',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu học lập trình hoặc người chuyển nghề. 
        Trang b t frontend đến backend, xây dựng website hoa chỉnh sau khóa học.',
        'fee' => 'Ưu đãi gia 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],
    [
        'image' => 'images/khoahoc_java.png',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => ' Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servel, JS, Spring Framework, EJP...',
        'fee' => 'Ưu đãi giá 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ'
    ],
    [
        'image' => 'images/laptrinhphp.png',
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong những ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chin sử dụng PHP kết hợp laravel framework.',
        'fee' => 'Học phí 9.600.000 VNĐ',
        'start_date' => '5/2/2024',
        'duration' => '36 giờ'
    ],
    [
        'image' => 'images/laptrinhhocnet.png',
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thư C# và Frontend',
        'fee' => 'Học phí 6.000.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '40 giờ'
    ],
    [
        'image' => 'images/laptrinhsql.png',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL server như các kĩ thật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu...',
        'fee' => 'Học phí 4.500.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '30 giờ'
    ],
];


// Hiển thị danh sách khóa học
echo '<div class="courses-list">';
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<img style="width: 600px;" '. 'src="' . $course['image'] . '">';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<div class="part fee">';
    echo '<div> <img src=" images/icons8-gift-24.png"> </div>';
    echo '<p>Học phí: ' . $course['fee'] . '</p>';
    echo '</div>';
    echo '<div class="part start-date">';
    echo '<div> <img src=" images/icons8-clock-24%20(1).png"> </div> ';
    echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
    echo '</div>';
    echo '<div class="part duration">';
    echo '<div> <img src=" images/icons8-save-24%20(1).png"> </div> ';
    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
    echo '</div>';
}
echo '</div>';

?>
</body>
</html>