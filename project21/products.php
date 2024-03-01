<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        "image_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Blue_Tshirt.jpg/220px-Blue_Tshirt.jpg",
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        "image_url" => "https://bizweb.dktcdn.net/thumb/1024x1024/100/259/188/products/db685ddfc27f37216e6e.jpg?v=1622631519377"
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
$itemPerPage = 10;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
// tính dữ liệu phân trang
$totalPages = ceil($products) / $itemPerPage;
// lấy các mục cho trang hiện tại
$currentPageItems = array_slice($products, ($currentPage - 1)*$itemPerPage, $itemPerPage);
?>