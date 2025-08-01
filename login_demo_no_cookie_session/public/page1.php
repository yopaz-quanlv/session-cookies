<?php
$user_id = $_GET['user_id'] ?? null;
$users = require __DIR__ . '/../data/users.php';
$users_by_id = $users['by_id'];

if (!$user_id || !isset($users_by_id[$user_id])) {
    die("Bạn chưa đăng nhập. <a href='login.php'>Đăng nhập lại</a>");
}

$username = $users_by_id[$user_id];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trang 1</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Trang 1</h2>
      <p>Xin chào <strong><?php echo htmlspecialchars($username); ?></strong>, đây là nội dung trang 1.</p>
      <div style="margin-top: 20px;">
        <a href="dashboard.php?user_id=<?php echo urlencode($user_id); ?>"><button>Quay về Dashboard</button></a>
      </div>
    </div>
  </div>
</body>
</html>
