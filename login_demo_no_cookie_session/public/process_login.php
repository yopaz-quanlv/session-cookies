<?php
$valid_users = [
    'admin' => '12345',
    'guest' => 'guest123',
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
    header("Location: dashboard.php?user=" . urlencode($username));
    exit;
} else {
    header("Location: login.php?error=" . urlencode("Tên đăng nhập hoặc mật khẩu sai."));
    exit;
}
