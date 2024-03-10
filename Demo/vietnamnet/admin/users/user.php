<?php
require_once '../../function.php';
$users = getAllUsers();
//echo '<pre>';
//print_r($users);
//echo '</pre>';

$itemsPerPage = 7; // đặt số mục trên mỗi trang
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // truy cập số trang hiên tại từ URL bằng cách sử dụng GET
$totalPages = ceil(count($users) / $itemsPerPage); // tính tổng số trang
// dùng hàm array_slice để lấy các mục cho trang hiện tại
$currentPageItems = array_slice($users, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a class="navbar-brand text-primary" href="#">Vietnamnet</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../dashboard/dashboard.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/dashboard.php">Quản lý danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-disabled="true" href="user.php">Quản lý người dùng</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="proflie.php" style="text-decoration: none" >Tài khoản: dungkt</a>
                    <a href="logout.php" class="btn btn-danger">Thoát</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row ">
                <div class="col-md">
                    <h3 class="text-center text-primary mb-3">DANH SÁCH TÀI KHOẢN NGƯỜI DÙNG</h3>
                    <?php if(isset($_GET['msg'])): ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_GET['msg'] ?>
                        </div>
                    <?php endif;?>
                    <a href="user_add.php" class="btn btn-primary">Thêm mới</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Số TT</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Email</th>
                            <th scope="col" colspan="4" class="text-center">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($currentPageItems as $user): ?>
                        <tr>
                            <td> <?= ++$i; ?> </td>
                            <td> <?= $user['username'] ?> </td>
                            <td> <?= $user['email'] ?> </td>
                            <td>
                                <a href="user_detail.php?id=<?= $user['user_id']?>" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            </td>
                            <td>
                                <a href="user_detail.php?id=<?= $user['user_id']?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> </a>
                            </td>
                            <td>
                                <a href="user_detail.php?id=<?= $user['user_id']?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                            <td>
                                <a href="user_detail.php?id=<?= $user['user_id']?>" class="btn btn-success"><i class="bi bi-key-fill"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php if($currentPage > 1): ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $currentPage - 1; ?>">Trước</a></li>
                            <?php endif; ?>

                            <?php for($i=1; $i <= $totalPages; $i++): ?>
                                <?php if($i == $currentPage): ?>
                                    <li class="page-item active"><a class="page-link" href="?page=<?= $i ?>"> <?= $i; ?> </a></li>
                                 <?php else: ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"> <?= $i; ?> </a></li>
                                <?php endif; ?>
                            <?php endfor;?>

                            <?php if($currentPage < $totalPages): ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $currentPage + 1; ?>">Sau</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <footer>


    </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>