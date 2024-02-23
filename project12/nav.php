<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project12</title>

    <style>
        nav{
            background-color: darkblue;
            height: 50px;
        }
        ul {
            list-style-type: none;
            display: flex;
            color: white;
            padding-top: 15px  ;
        }
        li{
            font-size: 19px;
            margin: 0 10px;


        }
        .box{
            background-color: white;
            height: 15px;
            width: 2px;
            margin: 5px;

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

   echo ' <nav> <ul>';
   echo " <li> <img src='images/home_13317809.png' style='height: 20px; background-color: white'>";
   foreach($navItems as $item){
       echo " <li class='box'></li> ";
       echo " <li> $item </li>";

    }
   echo '</ul></nav>';

?>



</body>
</html>