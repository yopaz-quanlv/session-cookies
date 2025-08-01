<?php
$users = require __DIR__ . '/../data/users.php';
$user_id = $_COOKIE['user_id'] ?? null;
$username = $user_id && isset($users['by_id'][$user_id]) ? $users['by_id'][$user_id] : null;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trang 3</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Trang 3</h2>

      <?php if ($username): ?>
        <p>Chào <strong><?php echo htmlspecialchars($username); ?></strong>, bạn đang được ghi nhớ nhờ cookie.</p>
      <?php else: ?>
        <p style="color: red;"><strong>Không thể nhận biết người dùng!</strong></p>
        <p>Bạn đã truy cập mà không có thông tin đăng nhập trong cookie.</p>

        <a href="login.php"><button>Đăng nhập lại</button></a>
      <?php endif; ?>

      <div style="margin-top: 20px;">

        <a href="dashboard.php"><button>Quay Về Dashboard</button></a>
      </div>
    </div>
  </div>
</body>
</html>
