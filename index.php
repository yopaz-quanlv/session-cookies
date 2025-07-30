<?php
session_start();

// Nếu không có session → thử lấy từ cookie
if (!isset($_SESSION['user_id']) && isset($_COOKIE['user_id'])) {
    $_SESSION['user_id'] = $_COOKIE['user_id'];
}

// Nếu vẫn chưa có → quay lại login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "Chào mừng, bạn đã đăng nhập!";
?>
<a href="logout.php">Đăng xuất</a>
