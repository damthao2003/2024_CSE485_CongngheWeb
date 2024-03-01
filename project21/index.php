<?php include "db/products.php"; ?>
<?php
//global $products;
//tham số phân trang
$itemPerPage = 4 ; // so muc tren 1 trang
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
// tính dữ liệu phân trang
$totalPages = ceil(count($products)) / $itemPerPage;
// lấy các mục cho trang hiện tại
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemPerPage, $itemPerPage);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .pagination a {
        margin-left: 10px;
    }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="product-list container">
        <div class="row">
            <?php foreach ($currentPageItems as $product) : ?>
            <div class="col-md-3">
                <div class="card " >
                    <img src=" <?php echo $product['image_url']; ?>" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-center"> <?php echo $product['name'] ?></h5>
                        <h4 class="text-center"> <?php echo $product['price']. '$' ?></h4>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row" style="margin: 30px;">
            <nav aria-label="Page navigation example" >
                <ul class="pagination">
                    <?php if ($currentPage > 1) : ?>
                        <li class="page-item"> <a class="page-link" href="?page = <?php echo $currentPage - 1; ?>">Previous</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <?php if ($i == $currentPage) : ?>
                            <li class="page-item"> <a class="page-link" href="?page=<?php echo $i; ?>"> <?php echo $i; ?></a> </li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($currentPage < $totalPages) : ?>
                        <li class="page-item"><a class="page-link" href="?page = <?php echo $currentPage + 1 ?>">Next </a></li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>


</body>

</html>