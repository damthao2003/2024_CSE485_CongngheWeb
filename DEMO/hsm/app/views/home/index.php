<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ Thống Quản Lý Bệnh Viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container">

    <h3 class="text-center text-uppercase text-primary my-3">Quản lý bệnh nhân</h3>
    <a href="<?= DOMAIN.'app/views/patient/add_patient.php'; ?>" class="btn btn-success">Thêm mới</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">Mã bệnh nhân</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Điện thoại</th>
            <th scope="col" >Sửa</th>
            <th scope="col" >Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($patients as $patient) { ?>
            <tr>
                <th scope="row"> <?= $patient->getId(); ?> </th>
                <td><?= $patient->getFullName(); ?></td>
                <td><?= $patient->getGender(); ?></td>
                <td><?= $patient->getDateOfBirth(); ?></td>
                <td><?= $patient->getAddress(); ?></td>
                <td><?= $patient->getMobile(); ?></td>
                <td><a href="<?= DOMAIN.'app/views/patient/edit_patient.php?id='.$patient->getId() ?> "> <i class="bi bi-pencil-square"></i> </a> </td>
                <td><a href="<?= DOMAIN.'app/views/patient/delete_patient.php?id='.$patient->getId() ?>"> <i class="bi bi-trash3"></i> </a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>