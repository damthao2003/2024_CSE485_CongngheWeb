<?php
$users = [

    "id" => 1,
    "name" => "Alice Smith",
    "email" => "alice.smith@example.com",
    "avatar" => "https://picsum.photos/id/200/200", // Sample avatar URL

];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project22</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <h2>Profile Information</h2>
        <div class="m-3">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $users['name']; ?>" required>
        </div>
        <div class="m-3">
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $users['email']; ?>" disabled>
        </div>
        <div class="m-3">
            <label for="avatar">Avatar:</label>
            <input type="file" name="avatar" accept="image/*">
        </div>

        <button type="submit" class="m-3">Update Profile</button>
    </form>
</div>



</body>
</html>