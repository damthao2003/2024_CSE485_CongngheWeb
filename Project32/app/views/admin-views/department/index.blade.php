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

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-3" >
    <div class="row col-3 button-add">
        <a href="<?= DOMAIN.''?>" class="btn btn-warning">Thêm</a>
    </div>
    <div class="row mt-3">
        <table class="table table-bordered table-sm">
            <?php foreach ($departments as $department){ ?>
                <thead style="background-color: #151A46">
                <tr>
                    <th> <?= $department->getDepartmentId(); ?> </th>
                    <th> <?=  $department->getDepartmentName() ?></th>
                    <th> Thông tin đơn vị</th>
                    <th> Thao tác</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> Mã: <?= ?> </td>
                    <td></td>
                    <td></td>
                </tr>
           <?php } ?>
            </tbody>
        </table>

    </div>
</div>
</body>
</html>