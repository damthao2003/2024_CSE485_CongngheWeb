<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project12</title>
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

   echo '<nav> <ul>';
   foreach($navItems as $item){
       echo " <li> $item </li>";
    }
   echo '</ul></nav>';

?>

</body>
</html>
