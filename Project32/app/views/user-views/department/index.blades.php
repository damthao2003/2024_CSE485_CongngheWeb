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
        h4{
            margin-left: 60px;
        }
        img{
            top: 15px;
            position: absolute;
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

    </style>
</head>
<body>
    <div class="container">
        <img src="image/logo.jpg" width="50" height="40" >
        <h4>Danh Bạ</h4>
        <hr>
        <table class="customers">
            <tr class="table-title">
                <td width="35" class="text-center">1</td>
                <td width="250">Khoa Công Nghê Thông Tin</td>
                <td>Thông tin Đơn Vị</td>
            </tr>
            <tr>
                <td rowspan="3"></td>
                <td rowspan="3" style="padding: 10px 30px 10px 10px; max-width: 140px;">
                    <img class="img-fluid" src="">
                </td>
                <td>
                    <b>Số Điện Thoại: </b>
                    "0332019523"
                </td>
            </tr>
            <tr>
                <td>
                    <b>Email: </b>
                    "quynhhuong6319@gmail.com"
                </td>
            </tr>
            <tr>
                <td>
                    <b>Địa Chỉ: </b>
                    "175 Tây Sơn"
                </td>
            </tr>
    </div>
    <div class="view-more">
        <button class="view-more-btn">Xem Thêm</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>