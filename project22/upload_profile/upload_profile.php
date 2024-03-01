<?php
$users = [
    "id" => 1,
    "name" => "Alice Smith",
    "email" => "alice.smith@example.com",
    "avatar" => "https://picsum.photos/id/200/200", // Sample avatar URL
];
// check if from is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate and update user information
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    //handle avatar upload - xử lý việc upload avatar
    $allowedExtentions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $targetDir = "uploads/"; // adjust directory path

    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']); // tra ve thong tin cua a file path (dng dan file)
        if (!in_array($fileInfo['extension'], $allowedExtentions)) { // search 1 gia tri trong 1 mang
            $errors[] = "Only JPG, JPEG and PNG files are allowed.";
        } else if ($_FILES['avatar']['name'] > $maxSize) {
            $errors[] = "File size must be less than 1 MB";
        } else {
            $fileName = uniqid() . "project22" . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;

            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile; // upload avatar url in array
            } else {
                $errors[] = "Failed to upload file";
            }
        }
    }
    // handle errors or update profile
    if (empty($errors)) {
        // update serve proile in DB or persistent storage (replace with wour logic)
        echo "Profile updated successfully";
    } else {
        echo "Errors";
        foreach ($errors as $error) {
            echo "<br> $error";
        }
    }
}
// tets
//$nameU = $_POST['name'];
//$emailU = $_POST['email'];
//$avatarU = $_POST['avatar'];
//echo $nameU, $emailU, $avatarU;
