<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project12</title>
    <style type="text/css">
        nav{
            background-color:rgb(10, 31, 119);
        }
        nav a{
            display:inline-block;
            padding:10px;
            font-size:20px;
            color:white;
            text-decoration:none;
            text-align: center;
            place-items: center

        }
        nav a:hover{
            background-color:#333;
        }
        a{
            margin-left: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];

echo '<nav> ';
echo '<a><img src="project12/Picture1.png"  style="position: absolute; top: 15px; left: 10px;"> | </a>';
foreach($navItems as $item){
    echo "  <a><span>$item </span>|</a> ";
}
echo '</nav>';

?>



</body>
</html>
