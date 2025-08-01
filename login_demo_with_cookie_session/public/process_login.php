<?php
$users = require __DIR__ . '/../data/users.php';
$valid_users = $users['users'];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($valid_users[$username]) && $valid_users[$username]['password'] === $password) {
    $user_id = $valid_users[$username]['id'];

    setcookie('user_id', $user_id, time() + 86400, '/');

    header("Location: dashboard.php");
    exit;
} else {
    header("Location: login.php?error=" . urlencode("Sai tên đăng nhập hoặc mật khẩu"));
    exit;
}
