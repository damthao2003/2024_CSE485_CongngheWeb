<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        "image" => "https://limeorange.vn/_next/image?url=https%3A%2F%2Fs3-ap-southeast-1.amazonaws.com%2Flo-image%2Fproduct%2Fcover%2Fpc-ao-thun-hinh-in-nu-de-thuong-mau-den-large-1672994734-3417.jpg&w=750&q=75",
        "category" => "Clothing"
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        "image" => "https://saigonsneaker.com/wp-content/uploads/2021/10/quanjeans-11-1.jpg",
        "category" => "Clothing"
    ],
    [
        "id" => 3,
        "name" => "Wireless Headphones",
        "price" => 79.99,
        "description" => "Enjoy high-quality wireless audio with these comfortable and stylish headphones.",
        "image" => "https://hanoicomputercdn.com/media/product/65293_tai_nghe_bluetooth_jbl_live_460nc_hong_0004_5.jpg",
        "category" => "Electronics"
    ],
    [
        "id" => 4,
        "name" => "Stainless Steel Water Bottle",
        "price" => 24.95,
        "description" => "Stay hydrated in style with this reusable stainless steel water bottle.",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR5rrDwJfMRy9mXMWE-9BD-TfouE8SdIYZbA&usqp=CAU",
        "category" => "Accessories"
    ],
    [
        "id" => 5,
        "name" => "Leather Laptop Backpack",
        "price" => 99.99,
        "description" => "A stylish and functional leather backpack perfect for carrying your laptop and other essentials.",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThv8TIcce1P3N-N0hqg5YOBdUoaiPD2BwvWg&usqp=CAU",
        "category" => "Accessories"
    ],
    [
        "id" => 3,
        "name" => "Wireless Headphones",
        "price" => 79.99,
        "description" => "Enjoy high-quality wireless audio with these comfortable and stylish headphones.",
        "image" => "https://hanoicomputercdn.com/media/product/65293_tai_nghe_bluetooth_jbl_live_460nc_hong_0004_5.jpg",
        "category" => "Electronics"
    ],
    [
        "id" => 4,
        "name" => "Stainless Steel Water Bottle",
        "price" => 24.95,
        "description" => "Stay hydrated in style with this reusable stainless steel water bottle.",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR5rrDwJfMRy9mXMWE-9BD-TfouE8SdIYZbA&usqp=CAU",
        "category" => "Accessories"
    ],
    [
        "id" => 5,
        "name" => "Leather Laptop Backpack",
        "price" => 99.99,
        "description" => "A stylish and functional leather backpack perfect for carrying your laptop and other essentials.",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThv8TIcce1P3N-N0hqg5YOBdUoaiPD2BwvWg&usqp=CAU",
        "category" => "Accessories"
    ],

];
$itemsPerPage = 3;
$currentPage
    = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems =
    array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="product-list">
    <div class="row m-4">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="product col-md-3">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="lỗi ảnh" style="height: 250px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p><?php echo $product['price']; ?></p>
                        <p><?php echo $product['description']; ?></p>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
</body>
</html>