<?php
session_start();
session_destroy();

// Xóa cookie
setcookie('user_id', '', time() - 3600, '/');

header("Location: login.php");
exit;
