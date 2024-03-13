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
        .btn{
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            position: absolute;
            bottom: 100px;
            margin-right: 160px;
            right: 0;
        }
        button{
            height: 40px;
            width: 60px;
            background-color: #151A46;
            color: white;
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
            left: 210px;
        }
        button#additionalButton {
            margin-top: 20px; /* Khoảng cách giữa nút và h3 */
            position: absolute;
            top: 330px; /* Cách top là 100px */
            left: 220px;
            height: 40px;
            width: 80px;
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
                <img src="image/th.jpg" alt="Avatar" class="avatar-image">
                <h3>Mã Nhân Viên</h3>
                <button id="additionalButton">Thay Ảnh</button> <!-- Thêm nút bên dưới h3 -->
            </div>
                <div class="item-content">
                <div class = "item">
                    <label for = "">Tên: </label>
                    <input type="text" placeholder="">
                </div>
                <div class = "item">
                    <label for="">Địa Chỉ: </label>
                    <input type="text" placeholder="">
                </div>
                <div class="item">
                    <label for="">Email: </label>
                    <input type="text" placeholder="">
                </div>
                <div class="item">
                    <label for="">Số Điện Thoại: </label>
                    <input type="text" placeholder="">
                </div>
                <div class="item">
                    <label for="">Chức Vụ: </label>
                    <input type="text">
                </div>
        </div>
    <div class="btn">
        <button id="saveButton">Lưu</button>
        <button id="cancelButton">Hủy</button>
    </div>
</body>
</html>
