<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa Thông Tin Đơn Vị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .btn-edit {
            background: #151A46;
            color: white;
            border-radius: 5px;
            width: 100px;
            font-weight: 500;
            font-size: 16px;
            height: 35px;
            margin: 15px 20px;
        }
        .buttons {
            float: right;
            margin-right: 30px
        }
        .but-save , .but-cancel{
            font-weight: 500;
            font-size: 18px;
            width: 80px;
            margin-left: 10px;
        }
        .item{
            margin: 30px;
            display: flex;

        }
        .item label{
            font-size: 20px;
            font-weight: 500;
            flex: 1;
        }
        .item input,select{
            flex:3;
        }
    </style>


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
    <form action="" method="post">
        <div class="container mt-5" style="width: 60%">
            <div class="item" >
                <label>Tên Bộ Phận: </label>
                <select name="department" id="department">
                    <option value="">Chọn tên bộ phận</option>
                    <?php foreach ( $departmentsNames as $department){ ?>
                    <option value="name"> <?php $department->getDepartmentName(); ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="item">
                <label >Địa chỉ: </label>
                <input type="text" name="address" id="address" value="<?php $departmentID ?>">
            </div>
            <div class="item">
                <label>Email: </label>
                <input type="email" name="email" id="email" value=" ">
            </div>
            <div class="item">
                <label>Số điện thoại: </label>
                <input type="tel" name="phone" id="phone" value="">
            </div>
            <div class="item">
                <label>Website: </label>
                <input type="url" name="website" id="website" value="">
            </div>
            <div class="item">
                <label>Thuộc bộ phận (nếu có): </label>
                <select name="department" id="department">
                    <option value="">Chọn tên bộ phận</option>
                    <?php foreach ($departmentsNames as $department){ ?>
                    <option value=" <?= $parentID ?>"> <?php $department->getDepartmentName(); ?> </option>
                    <?php } ?>
                </select>
            </div>

            <div class="buttons">
                <button type="submit"  class="btn btn-primary but-save" >Lưu</button>
                <a href="../../../public/index.php" class="btn btn-warning but-cancel" > Hủy </a>
            </div>
        </div>
    </form>

</div>

</body>
</html>


