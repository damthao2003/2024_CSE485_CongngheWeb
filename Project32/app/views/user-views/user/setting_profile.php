<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa thông tin nhân viên</title>
    <style>
        .item{
            margin: 0px 0px 70px;
        }
        .container {
            top: 30px;
            display: flex;
            flex-direction: column; /* Định hướng các phần tử con theo chiều dọc */
            justify-content: center; /* Căn giữa theo chiều ngang */
            align-items: center; /* Căn giữa theo chiều dọc */
            margin-top: 80px;
        }
        /*.btn{*/
        /*    padding: 10px 20px;*/
        /*    border: none;*/
        /*    position: absolute;*/
        /*    bottom: 50px;*/
        /*    margin-right: 90px;*/
        /*    right: 0;*/
        /*}*/
        .btn.btn-button1 {
            background-color: #151A46;
            color: white;
            padding: 10px 20px; /* Khoảng cách padding */
            border: none; /* Loại bỏ viền */
            border-radius: 5px; /* Bo tròn góc */
            position: fixed; /* Đặt vị trí cố định */
            bottom: 60px; /* Cách lề dưới 20px */
            right: 190px; /* Cách lề phải 20px */
        }
        .btn.btn-button2 {
            background-color: #151A46;
            color: white;
            padding: 10px 20px;
            border: none; /* Loại bỏ viền */
            border-radius: 5px; /* Bo tròn góc */
            position: fixed; /* Đặt vị trí cố định */
            bottom: 60px; /* Cách lề dưới 20px */
            right: 110px; /* Cách lề phải 20px */
        }
        .item-content{
            margin: 10px 20px ;
            margin-left: 15.5cm;
            label{
                margin-right: 70px; /*  Khoảng cách giữa nhãn và hộp văn bản */
                font-size: 20px;
                font-weight: 700;
            }

            input{
                height: 21px;
                width: 400px; /* Chiều rộng cố định cho input */
                margin-right: 30px;
                float: right;
                background-color: #F3F4F4;
            }
        }
        h3{
            position: absolute;
            top: 300px; /* Cách top là 100px */
            left: 200px;
        }
        button#additionalButton {
            margin-top: 20px; /* Khoảng cách giữa nút và h3 */
            position: absolute;
            top: 330px; /* Cách top là 100px */
            left: 220px;
            height: 40px;
            width: 100px;
            cursor: pointer;
            background-color: #151A46;
            color: white;
            border-radius: 5px;
        }
        .avatar-image {
            top: 100px; /* Cách top là 100px */
            left: 170px;
            width: 200px; /* Đặt kích thước của hình ảnh */
            height: 200px;
            border-radius: 50%; /* Làm cho hình ảnh trở thành hình tròn */
            margin-bottom: 20px; /* Khoảng cách giữa hình ảnh và h3 */
            position: absolute;
        }
    </style>

</head>
<body>

        <div class="container">
            <div class="avatar">
                <?php
                $imagePath = "https://img6.thuthuatphanmem.vn/uploads/2022/11/18/anh-avatar-don-gian-cho-nu_081757692.jpg";
                ?>
                <img src="<?php echo $imagePath; ?>" alt="Avatar" class="avatar-image"">
                <h3 style="font-size: 20px">Mã Nhân Viên: <?php echo $employee->getEmployeeId(); ?></h3>
                <button id="additionalButton">Thay Ảnh</button>
            </div>

                <div class="item-content">
                <div class = "item">
                    <label for = "">Tên: </label>
                    <input type="text" placeholder="<?php echo $employee->getFullName(); ?>">
                </div>
                <div class = "item">
                    <label for="">Địa Chỉ: </label>
                    <input type="text" placeholder="<?php echo $employee -> getAddress(); ?>">
                </div>
                <div class="item">
                    <label for="">Email: </label>
                    <input type="text" placeholder="<?php echo $employee -> getEmail(); ?>">
                </div>
                <div class="item">
                    <label for="">Số Điện Thoại: </label>
                    <input type="text" placeholder="<?php echo $employee -> getMobilePhone(); ?>">
                </div>
                <div class="item">
                    <label for="">Chức Vụ: </label>
                    <input type="text" placeholder="<?php echo $employee -> getPosition(); ?>">
                </div>
                </div>
        </div>

        <a href="<?= DOMAIN.'app/views/user-views/employee/index.blades.php' ?>" class='btn btn-button1'>Lưu</a>
        <a href="<?= DOMAIN.'app/views/user-views/department/index.blades.php' ?>" class='btn btn-button2'>Hủy</a>

</body>
</html>