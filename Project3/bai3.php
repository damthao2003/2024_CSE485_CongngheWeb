<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khóa học</title>
    <style>

        .container{
            top: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
        }
        .course {
            left: 1cm;
            background-color: #f9f9f9;
            padding: 30px;
            margin-bottom: 50px;
            margin-top: 40px;
        }
        .course h2 {
            color: #333;
            font-size: 20px;
        }

        .course p {
            color: #666;
            font-size: 20px;

        }
        .red-bar {
            width: 6px;
            height: 0.8cm;
            background-color: #c70331;
            position: absolute;
            left: 1cm;
            top: 0.6cm;


        }
        h1 {
            color: #c70331;
            position: absolute;
            left: 1.5cm;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px; /* Thiết lập kích thước font chữ là 20px */
        }
        img {
            float: left;
            margin-right: 10px;
        }
    </style>
</head>
<body>
        <div class="red-bar"></div>
        <h1>KHÓA HỌC SẮP KHAI GIẢNG</h1>


    <?php
$courses = [
    [
            'image' => 'img/a1.png',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chính thức tại việt nam từ aptech global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế',
        'fee' => 'Học bổng 15.000.000 VNĐ',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
    ],
    [
            'image' => 'img/a2.png',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu học lập trình hoặc người chuyển nghề. Trang b t frontend đến backend, xây dựng website hoa chỉnh sau khóa học.',
        'fee' => 'Ưu đãi gia 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],
    [
            'image' => 'img/a3.png',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => ' Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servel, JS, Spring Framework, EJP...',
        'fee' => 'Ưu đãi giá 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ'
    ],
    [
            'image' => 'img/a4.png',
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong những ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chin sử dụng PHP kết hợp laravel framework.',
        'fee' => 'Học phí 9.600.000 VNĐ',
        'start_date' => '5/2/2024',
        'duration' => '36 giờ'
    ],
    [
            'image' => 'img/a5.png',
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thư C# và Frontend',
        'fee' => 'Học phí 6.000.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '40 giờ'
    ],
    [
            'image' => 'img/a6.png',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL server như các kĩ thật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu...',
        'fee' => 'Học phí 4.500.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '30 giờ'
    ],
];

echo '<div>';
echo '<div class ="container">';
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<img style="width: 100%;" src="' . $course['image'] . '">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<img style="width: 30px;" src = "img/i1.png">';
        echo '<p>' . $course['fee'] . '</p>';
        echo '<img style="width: 20px;" src = "img/i2.png">';
        echo '<p>Khai giảng: ' . $course['start_date'] . '</p>';
        echo '<img style="width: 20px;" src = "img/i3.png">';
        echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
    }
    echo'</div>';
    ?>
</body>
</html>