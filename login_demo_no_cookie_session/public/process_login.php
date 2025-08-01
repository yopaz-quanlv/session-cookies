<?php
$users = require __DIR__ . '/../data/users.php';
$valid_users = $users['users'];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (
    isset($valid_users[$username]) &&
    $valid_users[$username]['password'] === $password
) {
    $user_id = $valid_users[$username]['id'];
    header("Location: dashboard.php?user_id=" . urlencode($user_id));
    exit;
} else {
    header("Location: login.php?error=" . urlencode("Tên đăng nhập hoặc mật khẩu sai."));
    exit;
}
