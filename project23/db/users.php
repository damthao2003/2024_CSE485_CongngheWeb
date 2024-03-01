<?php
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashedpassword
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    [
        "username" => "janedoe",
        "password" => password_hash("doe123", PASSWORD_DEFAULT),
        "name" => "Jane Doe",
        "email" => "janedoe@example.com"
    ],
    [
        "username" => "alice",
        "password" => password_hash("alice321", PASSWORD_DEFAULT),
        "name" => "Alice Smith",
        "email" => "alice@example.com"
    ],
    [
        "username" => "bob",
        "password" => password_hash("bob456", PASSWORD_DEFAULT),
        "name" => "Bob Johnson",
        "email" => "bob@example.com"
    ],
    [
        "username" => "emma",
        "password" => password_hash("emma789", PASSWORD_DEFAULT),
        "name" => "Emma Brown",
        "email" => "emma@example.com"
    ]
];

?>