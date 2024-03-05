<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    <style>
        label {
            display: block; /* Đặt nhãn vào mỗi dòng mới */
            margin-bottom: 25px; /* Khoảng cách giữa các nhãn */
        }
        .information_detail{
            margin-left: 5cm;
        }
    </style>
</head>
<body>
<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.png" // Initial avatar URL
];
?>
<form action="update_profile.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="Account">
            <h2>Account Settings</h2>
        </div>
        <div class="Information">
            <label for="" style="color: red">Profile</label>
            <label for="">Password</label>
            <label for="">Integrations</label>
            <label for="">Billing</label>
        </div>
        <div class="Avatar">
            <label for="">Avatar</label>
            <input type="file" name="avatar" accept="image/*">
            <br>
            <button type="submit" style="background-color: crimson; color: white">Change my Avatar</button>
        </div>
        <div class="Information_detail">
            <div class="item">
                <label for="">Full Name</label>
                <input type="text">
            </div>
            <br>
            <div class="item">
                <label for="">Email</label>
                <input type="text">
            </div>
            <br>
            <div class="item">
                <label for="">Phone Number</label>
                <input type="text" style="color: gray">
            </div>
            <br>
            <div class="item">
                <label for="">Company Name</label>
                <input type="text">
            </div>
        </div>
    </div>
</form>
</body>
</html>
