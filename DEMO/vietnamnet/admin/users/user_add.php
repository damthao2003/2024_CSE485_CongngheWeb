<?php
require_once '../../function.php';
$users = getAllUsers();
//echo '<pre>';
//print_r($users);
//echo '</pre>';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Users</title>
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
                    <h3 class="text-center text-primary mb-3">THÊM MỚI TÀI KHOẢN NGƯỜI DÙNG</h3>
                    <?php if(isset($_GET['err'])):?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET['err'] ?>
                    </div>
                    <?php endif; ?>
                    <div style="font-weight: 500">
                        <form action="./user_add_process.php" method="post" >
                            <div class="mb-3">
                                <label for="username" class="form-label ">Tên người dùng</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Mật khẩu</label>
                                <input type="password" class="form-control" id="password1" name="password1">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" id="password2" name="password2">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label" >Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </form>
                    </div>


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