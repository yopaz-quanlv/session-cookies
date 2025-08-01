<?php
$users = require __DIR__ . '/../data/users.php';
$user_id = $_COOKIE['user_id'] ?? null;

if (!$user_id || !isset($users['by_id'][$user_id])) {
    header("Location: login.php?error=" . urlencode("Vui lòng đăng nhập lại."));
    exit;
}

$username = $users['by_id'][$user_id];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trang 2</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Trang 2</h2>
      <p>Chào bạn <strong><?php echo htmlspecialchars($username); ?></strong>, đây là nội dung Trang 2.</p>
      <div style="margin-top: 20px;">
        <a href="dashboard.php"><button>Quay về Dashboard</button></a>
      </div>
    </div>
  </div>
</body>
</html>
