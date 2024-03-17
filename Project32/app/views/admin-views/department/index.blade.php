
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Bạ Đơn Vị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
      <?php include APP_ROOT.'/app/public/assets/css/admin/department/index.css';?>
  </style>

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-3" >
    <h2 style="color: blue; text-align: center">Danh Bạ Đơn Vị </h2>

    <div class="button-add">
        <a href="?controller=department&action=indexAdd" class="btn btn-warning" > <i class="bi bi-plus-circle"></i>  Thêm mới </a>
    </div>
    <div class="row mt-3">
        <table class="table-bordered">
           <?php foreach ($departments as $department){ ?>
                <thead >
                    <tr>
                        <th scope="col" > <?= $i++; ?> </th>
                        <th scope="col" style="width: 25%"> <?=  $department->getDepartmentName(); ?></th>
                        <th scope="col" style="width: 50%"> Thông tin đơn vị</th>
                        <th scope="col" style="width: 15%"> Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?=$department->getLogo(); ?>
                        </td>
                        <td>
                            <div class="departmentId">
                                <a href="<?= APP_ROOT.'/app/views/admin-views/employee/employee.blade.php'?>"> Mã: <?= $department->getDepartmentId(); ?> </a>
                            </div>
                        </td>
                        <td class="infor">
                            <p> Số điện thoại: <?=$department->getPhone() ?></p>
                            <hr>
                            <p> Email: <?=$department->getEmail(); ?></p>
                            <hr>
                            <p> Địa chỉ: <?=$department->getAddress(); ?> </p>
                            <hr>
                            <a href="<?=$department->getWebsite(); ?>" style="text-decoration: none; color: black">
                                Website: <?=$department->getWebsite(); ?>
                            </a>
                        </td>
                        <td class="btn-ed">
                                <a href="<?= DOMAIN.'app/views/admin-views/department/edit.blade.php?id='.$department->getDepartmentId() ?>" class="btn btn-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="?controller=department&action=delete&&id=<?= $department->getDepartmentId() ?> " class="btn btn-danger">
                                    <i class="bi bi-trash3"></i>
                                </a>
                        </td>
                    </tr>
                </tbody>
           <?php } ?>

        </table>
    </div>

</div>

</body>
</html>
