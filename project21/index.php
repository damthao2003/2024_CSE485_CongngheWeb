<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project21</title>
    <style>
        .product-list{
            top: 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
        }
        .products {
            left: 1cm;
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 5px;
            margin-top: 40px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .pagination{
            margin-left: 15px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<?php
    $products = [
            [
                    'image' => "image/a1.png",
                "id" => 1,
                "name" => "Wooden Bath Room",
                "price" => 20.89,
                "description" => "New, Modern and Comfortable"
            ],
            [
                    'image' => 'image/a2.png',
                "id" => 2,
                "name" => "Waterproof Emil Backpack",
                "price" => 99.00,
                "description" => "New, Modern and Comfortable"
            ],
            [
                    'image' => 'image/a3.png',
                "id" => 3,
                "name" => "Slylo Stool",
                "price" => 300.00,
                "description" => "New, Modern and Comfortable"
            ],
            [
                    'image' => 'image/a4.png',
                "id" => 4,
                "name" => "Stylist Wooden Chair",
                "price" => 349.00,
                "description" => "New, Modern and Comfortable"
            ],
        [
            'image' => 'image/a3.png',
            "id" => 3,
            "name" => "Slylo Stool",
            "price" => 300.00,
            "description" => "New, Modern and Comfortable"
        ],
        [
            'image' => 'image/a4.png',
            "id" => 4,
            "name" => "Stylist Wooden Chair",
            "price" => 349.00,
            "description" => "New, Modern and Comfortable"
        ],
        [
            'image' => "image/a1.png",
            "id" => 1,
            "name" => "Wooden Bath Room",
            "price" => 20.89,
            "description" => "New, Modern and Comfortable"
        ],
        [
            'image' => 'image/a2.png',
            "id" => 2,
            "name" => "Waterproof Emil Backpack",
            "price" => 99.00,
            "description" => "New, Modern and Comfortable"
        ],
        [
            'image' => "image/a1.png",
            "id" => 1,
            "name" => "Wooden Bath Room",
            "price" => 20.89,
            "description" => "New, Modern and Comfortable"
        ],
        [
            'image' => 'image/a2.png',
            "id" => 2,
            "name" => "Waterproof Emil Backpack",
            "price" => 99.00,
            "description" => "New, Modern and Comfortable"
        ],
        [
            'image' => 'image/a3.png',
            "id" => 3,
            "name" => "Slylo Stool",
            "price" => 300.00,
            "description" => "New, Modern and Comfortable"
        ],
    ];

    $itemPerPage = 4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count ($products)/$itemPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemPerPage, $itemPerPage);
    echo '<div>';
    echo '<div style = "display: grid; place-items: center" >';
    echo '<div style="border: 1px solid darkturquoise; padding: 10px;">';
    echo '<div class = "product-list">';
        foreach ($currentPageItems as $product){
            echo '<div class = "products">';
            echo '<img style = "width = 100%;" src = "'. $product['image'].'">';
            echo '<h3>' .$product['name'].'</h3>';
            echo '<p>$' .$product['price'] .'</p>';
            echo '<p>' .$product['description'].'</p>';
            echo '</div>';
        }
        echo '</div>';
?>
    <div class="pagination">
        <?php if ($currentPage >1): ?>
            <a href="?page =<?php echo $currentPage -1; ?>"></a>
        <?php endif; ?>
        <?php for($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page =<?php echo $i; ?>"><?php echo $i; ?></a><?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>

</div>
</body>
</html>
