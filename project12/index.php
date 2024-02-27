<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project12</title>
    <style>
        nav ul {
            display: flex;
            list-style: none;
            background-color: #0a1f77;
            color: #ffffff;
            text-align: center;
            place-items: center;
            padding: 10px;
        }

        nav li {
            margin-right: 20px; /* Khoảng cách giữa các mục trong nav */
            padding-left: 10px;
        }
        a{
            margin-left: 30px;
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

   echo '<nav><ul>';
   echo '<img style ="margin-left: 5px" src = "image/a1.png">';
   foreach($navItems as $item){
       echo " <a>|<span>$item</span></a>";
    }
   echo '</ul></nav>';

?>
</body>
</html>
