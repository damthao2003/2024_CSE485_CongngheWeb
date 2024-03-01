<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        "image_url" => "https://picsum.photos/id/237/200/200",
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        "image_url" => "https://picsum.photos/id/238/200/200"
    ],
    [
        "id" => 3,
        "name" => "Running Shoes",
        "price" => 79.99,
        "description" => "Lightweight and breathable running shoes.",
        "image_url" => "https://picsum.photos/id/239/200/200", // Sample image URL
    ],
    [
        "id" => 4,
        "name" => "Backpack",
        "price" => 49.99,
        "description" => "A spacious and durable backpack.",
        "image_url" => "https://picsum.photos/id/240/200/200", // Sample image URL
    ],
    [
        "id" => 5,
        "name" => "Wireless Headphones",
        "price" => 59.99,
        "description" => "Enjoy your music wirelessly with these high-quality headphones.",
        "image_url" => "https://picsum.photos/id/241/200/200", // Sample image URL
    ],
    [
        "id" => 2,
        "name" => "Jogger Pants (Gray)",
        "price" => 29.99,
        "description" => "Comfortable and casual jogger pants in gray color.",
        "image_url" => "https://picsum.photos/id/238/200/200", // Sample image URL
    ],
    [
        "id" => 3,
        "name" => "Wireless Earbuds",
        "price" => 39.99,
        "description" => "Enjoy your music wirelessly with these high-quality earbuds.",
        "image_url" => "https://picsum.photos/id/239/200/200", // Sample image URL
    ],
    [
        "id" => 4,
        "name" => "Water Bottle (Stainless Steel)",
        "price" => 19.99,
        "description" => "Durable and reusable stainless steel water bottle.",
        "image_url" => "https://picsum.photos/id/240/200/200", // Sample image URL
    ],
    [
        "id" => 5,
        "name" => "Laptop Backpack",
        "price" => 69.99,
        "description" => "Spacious and comfortable backpack for carrying your laptop.",
        "image_url" => "https://picsum.photos/id/241/200/200", // Sample image URL
    ]
];

// tham số phân trang
$itemPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
// tính dữ liệu phân trang
$totalPages = ceil( count($products) / $itemPerPage);
// lấy các mục cho trang hiện tại
$currentPageItems = array_slice($products, ($currentPage - 1)*$itemPerPage, $itemPerPage);
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
        .pagination a{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="product-list container">
    <div class="row ">
        <?php foreach ($currentPageItems as $product): ?>
        <div class="col-md-3" >
            <div class="card w-18 m-t-5" >
                <img src=" <?php echo $product['image_url']; ?>" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title text-center"> <?php echo $product['name']?></h5>
                    <h4 class="text-center"> <?php echo $product['price']?></h4>
                    <p class="card-text"> <?php  echo $product['description'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="pagination m-5">
    <?php if($currentPage > 1): ?>
        <a href="?page = <?php  echo $currentPage - 1; ?>"> Previous</a>
    <?php endif;?>
    <?php for($i=1; $i <= $totalPages; $i++): ?>
         <?php if($i == $currentPage): ?>
            <span class="active"><?php echo $i?> </span>
         <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
         <?php endif; ?>
    <?php endfor; ?>

    <?php if($currentPage < $totalPages): ?>
         <a href="?page = <?php echo $currentPage + 1?>">Next</a>
    <?php endif;?>
</div>

</body>
</html>