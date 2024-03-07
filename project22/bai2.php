<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.png", // Initial avatar URL
    [
    "id" => 2,
        "name" => "Jane Smith",
        "email" => "janesmith@example.com",
        "avatar" => "uploads/user_avatars/jane_smith.jpg",
    ],
    [
        "id" => 3,
        "name" => "Michael Brown",
        "email" => "michaelbrown@example.com",
        "avatar" => "uploads/user_avatars/michael_brown.png",
    ],
    [
        "id" => 4,
        "name" => "Alice Johnson",
        "email" => "alicejohnson@example.com",
        "avatar" => "uploads/user_avatars/alice_johnson.gif",
    ],
    [
        "id" => 5,
        "name" => "David Williams",
        "email" => "davidwilliams@example.com",
        "avatar" => "uploads/user_avatars/david_williams.jpg",
    ],
    [
        "id" => 6,
        "name" => "Sarah Miller",
        "email" => "sarahmiller@example.com",
        "avatar" => "uploads/user_avatars/sarah_miller.png",
    ],

];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update_profile.php" method="post" enctype="multipart/form-data">
    <h2>Profile Information</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>"
           required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>"
           disabled>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Update Profile</button>
</form>
</body>
</html>
<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // Handle avatar upload (similar to previous exercise)
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $targetDir = "uploads/"; // Adjust directory path
    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile))
            {
                $user['avatar'] = $targetFile; // Update avatar URL in array
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }
    // Handle errors or update profile
    if (empty($errors)) {
        // Update user profile in database or persistent storage (replace wityour logic)
 echo "Profile updated successfully!";
 } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>