<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
                                <a class="nav-link active" aria-current="page" href=".dashboard.php">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Quản lý danh mục</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quản lý tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-disabled="true" href="../users/user.php">Quản lý người dùng</a>
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
            <div class="row mt-5">
                <div class="col-md">
                    <div class="card" style="width: 20rem">
                        <div class="card-body">
                            <h5 class="card-title">Số danh mục</h5>
                            <p class="card-text">5</p>
                            <a href="#" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số danh mục</h5>
                            <p class="card-text">20</p>
                            <a href="#" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số danh mục</h5>
                            <p class="card-text">6</p>
                            <a href="#" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </main>
    <footer></footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>