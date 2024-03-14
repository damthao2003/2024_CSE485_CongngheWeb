<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        hr {
            height: 20px;
            color: #151A46; /* Đổi màu nền của đường kẻ ngang */
        }
        .container{
            margin-top: 20px;
        }
        table {
            border-collapse: collapse; /* Loại bỏ khoảng cách giữa các ô */
            width: 100%; /* Đảm bảo bảng có chiều rộng đầy đủ */
        }

        th, td {
            border: 1px solid gray; /* Đặt viền cho các ô */
            padding: 8px; /* Đặt khoảng cách giữa nội dung và viền */
            text-align: left; /* Căn lề nội dung */
        }
        .table-title{
            background-color: #151A46;
            color: white;
        }
        .view-more {
            text-align: right; /* Canh lề phải */
            margin-top: 10px; /* Khoảng cách từ nút đến bảng */
        }
        .view-more-btn {
            background-color: #151A46;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            bottom: 100px;
        }
        .pagination {
            margin-top: 15px;
        }
        .page-btn {
            display: inline-block;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            margin-right: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .page-btn:hover {
            background-color: #f0f0f0;
        }

    </style>
</head>
<body>
<div class="container">
    <h4 style="font-size: 30px; color: #151A46">Danh Bạ Đơn Vị</h4>
    <hr>
    <table class="customers">
        <?php

        $rowsPerPage = 10;

        $totalPages = ceil(count($departments) / $rowsPerPage);

        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

        $startIndex = ($currentPage - 1) * $rowsPerPage;
        $endIndex = $startIndex + $rowsPerPage;

        $index = 1;
        for ($i = $startIndex; $i < $endIndex && $i < count($departments); $i++) {
            $department = $departments[$i];
            ?>
        <tr class="table-title">
            <td width="35" class="text-center"><?= $index; ?></td>
            <td width="250">Khoa Công Nghê Thông Tin</td>
            <td>Thông tin Đơn Vị</td>
        </tr>
        <tr>
            <td rowspan="4"></td>
            <td rowspan="4" style="padding: 10px 30px 10px 10px; max-width: 140px;">
                <img class="img-fluid" src="">
                <a style="text-align: center;  display: block;" href="<?= DOMAIN.'app/views/user-views/employee/index.blades.php'; ?>"><?= $department -> getDepartmentId(); ?></a>
            </td>
            <td>
                <b>Số điện thoại: <?= $department -> getPhone(); ?> </b>
            </td>
        </tr>
        <tr>
            <td>
                <b>Email: <?= $department -> getEmail(); ?>  </b>
            </td>
        </tr>
        <tr>
            <td>
                <b>Địa Chỉ: </b>
                <?= $department -> getAddress(); ?>
            </td>
        </tr>
            <tr>
                <td>
                    <b>Website: </b>
                    <?= $department -> getWebsite(); ?>
                </td>
            </tr>
        <?php
            $index++;
        }
        ?>
    </table>
    <!-- Phân trang -->
    <div class="pagination">
        <?php

        for ($page = 1; $page <= $totalPages; $page++) {
            echo '<a href="?page=' . $page . '" class="page-btn">' . $page . '</a>';
        }
        // Nút "Next"
        if ($currentPage < $totalPages) {
            $nextPage = $currentPage + 1;
            echo '<a href="?page=' . $nextPage . '" class="page-btn">Next</a>';
        }
        ?>
    </div>
</div>
<!--<div class="view-more">-->
<!--    <button class="view-more-btn">Xem Thêm</button>-->
<!--</div>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
